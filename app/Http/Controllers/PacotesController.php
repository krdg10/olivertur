<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Pacote;

class PacotesController extends Controller
{
    public function store(Request $request){
        $pacote = new Pacote;
        $allowedfileExtension=['jpg','png','gif'];
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
        $pacote->nome = $request->nome;
        $pacote->condicoes = $request->condicoes;
        $pacote->inclui = $request->inclui;
        $pacote->n_inclui = $request->n_inclui;
        $pacote->pagamento = $request->pagamento;
        $pacote->preco = $request->preco;
        $pacote->parcelas = $request->parcelas;
        $pacote->caracteristica1 = $request->caracteristica1;
        $pacote->caracteristica2 = $request->caracteristica2;
        $pacote->caracteristica3 = $request->caracteristica3;
       
        $pacote->save();
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
                        'pacote_id' => $pacote->id,
                        'nome' => $without_extension,
                        'url' => $filename
                    ]);
                }
            }
        }
        return redirect()->back()->with('message', 'Sucesso ao cadastrar pacote!');

    }

    public function index (){
        $pacotes = Pacote::orderBy('created_at', 'desc')->paginate(10);
        //$flag = 0; //indicar o primeiro
        return view('pacote.index', compact('pacotes'));
    }
    
}
