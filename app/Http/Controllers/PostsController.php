<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Post;
use Illuminate\Support\Facades\Auth;



class PostsController extends Controller
{
    public function store(Request $request){
        $post = new Post;
        $allowedfileExtension=['jpg','png','gif'];
        if(!$request->texto){
            $error[] = 'Selecione um carro!';//pensar num jeito do texto voltar em caso de erro
        }
        if(!$request->tag){
            $error[] = 'Insira um horário!';
        }
        if(!$request->hasFile('fotos')){
            $error[] =  'Insira pelo menos um arquivo!'; 
        }
        else{
            foreach($request->file('fotos') as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                //dd($check);
                if(!$check){
                    $error[] =  'Insira somente arquivos válidos! As extensões aceitas são jpg, png e gif.';
                }
            }
        }
        if(isset($error)){
            return redirect()->back()->with('error', $error);
        }
        $post->titulo = $request->titulo;
        $post->tag = $request->tag;
        $post->texto = $request->texto;
        $post->data = date('Y-m-d H:i:s');

        $post->user_id = Auth::id();
        $post->save();
        $this->validate($request, [
            'fotos' => 'required'
        ]);
        if($request->hasFile('fotos')){
            $files = $request->file('fotos');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);

                if($check){
                    $filename = $file->store('fotos');
                    Foto::create([
                        'post_id' => $post->id,
                        'url' => $filename
                    ]);
                }
            }
        }
        return redirect()->back()->with('message', 'Sucesso ao cadastrar entrada!');

    }
}
