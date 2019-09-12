<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Post;

class FotosController extends Controller
{
    public function update(Request $request, $id){
        $foto = Foto::findOrFail($id);
        $foto->nome = $request->nomeFoto;
        $foto->save();
        return redirect()->back()->with('message', 'Sucesso ao atualizar foto!');
    }

    public function destroy($id){
        $foto = Foto::findOrFail($id);
        $foto->delete();
        return redirect()->back()->with('message', 'Sucesso ao excluir foto!');
    }
    public function store_pacote(Request $request, $pacote){
        $allowedfileExtension=['jpg','png','gif','jpeg'];
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
        if($request->hasFile('fotos')){
            $files = $request->file('fotos');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $without_extension = basename($filename, ".$extension");
                $check=in_array($extension,$allowedfileExtension);

                if($check){
                    $filename = $file->store('fotos');
                    Foto::create([
                        'pacote_id' => $pacote,
                        'nome' => $without_extension,
                        'url' => $filename
                    ]);
                }
            }
        }
        return redirect()->back()->with('message', 'Sucesso ao adicionar foto!');
    }
    public function store_post(Request $request, $post){
        $allowedfileExtension=['jpg','png','gif','jpeg'];
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
        if($request->hasFile('fotos')){
            $files = $request->file('fotos');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $without_extension = basename($filename, ".$extension");
                $check=in_array($extension,$allowedfileExtension);

                if($check){
                    $filename = $file->store('fotos');
                    Foto::create([
                        'post_id' => $post,
                        'nome' => $without_extension,
                        'url' => $filename
                    ]);
                }
            }
        }
        return redirect()->back()->with('message', 'Sucesso ao adicionar foto!');
    }
}
