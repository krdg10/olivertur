<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class PostsController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(), PostsController::rulesPosts(), PostsController::messagesPosts());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        
        $post = new Post;
        $post->titulo = $request->titulo;
        $post->tag = $request->tag;
        $post->previa = $request->previa;
        $post->texto = $request->texto;
        $post->data = date('Y-m-d H:i:s');
        $post->user_id = Auth::id();

        $post->save();
        
        $files = $request->file('fotos');
        foreach($files as $file){
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $without_extension = basename($filename, ".$extension");
              
            $filename = $file->store('fotos');
            Foto::create([
                'post_id' => $post->id,
                'nome' => $without_extension,
                'url' => $filename
            ]);
            
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
        $validator = Validator::make($request->all(), PostsController::rulesPostsUpdate(), PostsController::messagesPosts());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
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

    public function rulesPosts(){
        return [
            'titulo' => 'required|max:30',
            'tag' => 'required|in:Turismo Ecológico,Excursão,City Tour,Fazenda Pantanal,Day Use,Pesca Pantanal,Bonito Tour,Receitas,Trilhas',
            'previa' => 'required|max:120',
            'texto' => 'required|max:60000',
            'fotos' => 'required',
            'fotos.*' => 'image'
        ];
    }

    public function messagesPosts(){
        return [
            'titulo.required' => 'O campo Titulo é obrigatório.',
            'titulo.max' => 'O campo título deve ter no máximo 30 caracteres.',
            'tag.required' => 'O campo Categoria é obrigatório.',
            'tag.in' => 'Categoria inserida é inválida.',
            'previa.required' => 'O campo Prévia é obrigatório.',
            'previa.max' => 'O campo Prévia deve ter no máximo 120 caracteres.',
            'texto.required' => 'O campo Texto é obrigatório.',
            'texto.max' => 'O campo Texto deve ter no máximo 60000 caracteres.',
            'fotos.required' => 'O campo Fotos é obrigatório.',
            'fotos.*.image' => 'O campo Fotos deve conter apenas imagens.'
        ];
    }

    public function rulesPostsUpdate(){
        $rules = PostsController::rulesPosts();
        unset($rules['fotos'], $rules['fotos.*']);
        return $rules;
    }
}
