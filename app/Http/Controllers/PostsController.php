<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;



class PostsController extends Controller
{
    public function store(Request $request){
        $post = new Post;
        $allowedfileExtension=['jpg','png','gif','jpeg'];
        if(!$request->texto){
            $error[] = 'Insira um texto!';//pensar num jeito do texto voltar em caso de erro
        }

        if(!$request->tag){
            $error[] = 'Insira uma categoria!';
        }
        else{
            if(!($request->tag=='Turismo Ecológico'||$request->tag=='Excursão'||$request->tag=='City Tour'||
            $request->tag=='Fazenda Pantanal'||$request->tag=='Day Use'||$request->tag=='Pesca Pantanal'||
            $request->tag=='Bonito Tour'||$request->tag=='Receitas'||$request->tag=='Trilhas')){
                $error[] = 'Insira uma categoria válida!';
            }
        }

        if(!$request->titulo){
            $error[] = 'Insira o título!';
        }
        else{
            if(strlen($request->titulo)>30){
                $error[] = 'Insira título com no máximo 30 caracteres!';
            }
        }

        if(!$request->previa){
            $error[] = 'Insira a prévia!';
        }
        else{
            if(strlen($request->previa)>120){
                $error[] = 'Insira previa com no máximo 120 caracteres!';
            }
        }

        if(!$request->hasFile('fotos')){
            $error[] =  'Insira pelo menos uma foto!'; 
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
        $post->previa = $request->previa;
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
                $without_extension = basename($filename, ".$extension");
                $check=in_array($extension,$allowedfileExtension);

                if($check){
                    $filename = $file->store('fotos');
                    Foto::create([
                        'post_id' => $post->id,
                        'nome' => $without_extension,
                        'url' => $filename
                    ]);
                }
            }
        }
        return redirect()->back()->with('message', 'Sucesso ao cadastrar entrada!');

    }

    public function show ($id){
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    public function index (){
        $posts = Post::orderBy('data', 'desc')->paginate(3);
        $flag = 0; //indicar o primeiro
        return view('post.index', compact('posts', 'flag'));
    }
    public function indexAdm (){
        $posts = Post::orderBy('data', 'desc')->paginate(20);
        return view('post.indexAdm', compact('posts'));
    }
    public function indexAdmFilter ($categoria){
        $posts = Post::where('tag', $categoria)->orderBy('data', 'desc')->paginate(20);
        return view('post.indexAdm', compact('posts'));
    }

    public function categoria ($categoria){
        $posts = Post::where('tag', $categoria)->orderBy('data', 'desc')->paginate(3);
        $flag = 0; //indicar o primeiro
        return view('post.categoria', compact('posts', 'flag'));
    }

    public function autor ($autor){
        $usuario = User::where('name', $autor)->get();
        $posts = Post::where('user_id', $usuario[0]->id)->orderBy('data', 'desc')->paginate(3);
        $flag = 0; //indicar o primeiro
        return view('post.autor', compact('posts', 'flag'));
    }
    public function edit ($id){
        $post = Post::findOrFail($id);
        $fotos = Foto::where('post_id', $id)->get();
        return view('post.edit', compact('post', 'fotos'));
    }
    public function update (Request $request, $id){
        if(!$request->texto){
            $error[] = 'Insira um texto!';//pensar num jeito do texto voltar em caso de erro
        }

        if(!$request->tag){
            $error[] = 'Insira uma categoria!';
        }
        else{
            if(!($request->tag=='Turismo Ecológico'||$request->tag=='Excursão'||$request->tag=='City Tour'||
            $request->tag=='Fazenda Pantanal'||$request->tag=='Day Use'||$request->tag=='Pesca Pantanal'||
            $request->tag=='Bonito Tour'||$request->tag=='Receitas'||$request->tag=='Trilhas')){
                $error[] = 'Insira uma categoria válida!';
            }
        }

        if(!$request->titulo){
            $error[] = 'Insira o título!';
        }
        else{
            if(strlen($request->titulo)>30){
                $error[] = 'Insira título com no máximo 30 caracteres!';
            }
        }

        if(!$request->previa){
            $error[] = 'Insira a prévia!';
        }
        else{
            if(strlen($request->previa)>120){
                $error[] = 'Insira previa com no máximo 120 caracteres!';
            }
        }
        if(isset($error)){
            return redirect()->back()->with('error', $error);
        }
        $post = Post::findOrFail($id);
        $post->titulo = $request->titulo;
        $post->tag = $request->tag;
        $post->previa = $request->previa;
        $post->texto = $request->texto;
        $post->save();
        return redirect()->back()->with('message', 'Sucesso ao atualizar post!');
    }
    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
