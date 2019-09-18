<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Pacote;

class PacotesController extends Controller
{
    public function store(Request $request){
        $pacote = new Pacote;
        $allowedfileExtension=['jpg','png','gif','jpeg'];
        if(!$request->nome){
            $error[] = 'Insira o nome!';//pensar num jeito do texto voltar em caso de erro
        }
        else{
            if(strlen($request->nome)>30){
                $error[] = 'Insira nome do pacote com no máximo 30 caracteres!';
            }
        }

        if(!$request->condicoes){
            $error[] = 'Insira as condições!';
        }
        else{
            if(strlen($request->condicoes)>600){
                $error[] = 'Insira as condições do pacote com no máximo 600 caracteres!';
            }
        }

        if(!$request->inclui){
            $error[] = 'Insira o que o pacote inclui!';
        }
        else{
            if(strlen($request->inclui)>600){
                $error[] = 'Insira o que o pacote inclui com no máximo 600 caracteres!';
            }
        }

        if(!$request->n_inclui){
            $error[] = 'Insira o que o pacote não inclui!';
        }
        else{
            if(strlen($request->n_inclui)>600){
                $error[] = 'Insira o que o pacote não inclui com no máximo 600 caracteres!';
            }
        }

        if(!$request->maisinformacoes){
            $error[] = 'Insira mais informações!';
        }
        else{
            if(strlen($request->maisinformacoes)>600){
                $error[] = 'Insira mais informações do pacote com no máximo 600 caracteres!';
            }
        }

        if(!$request->preco){
            $error[] = 'Insira o preço!';
        }
        else{
            if(is_numeric($request->preco)){
                if($request->preco < 0){
                    $error[] = 'Insira apenas números positivos ou zero no preço!';
                }
            }
            else{
                $error[] = 'Insira apenas números no preço!';
            }
        }
        
        if(!$request->parcelas){
            $error[] = 'Insira a quantidade de parcelas!';
        }
        else{
            if(is_numeric($request->parcelas)){
                if($request->preco < 0){
                    $error[] = 'Insira apenas números positivos ou zero nas parcelas!';
                }
            }
            else{
                $error[] = 'Insira apenas números no preço!';
            }
        }
        if($request->pagamento){
            if(strlen($request->pagamento)>150){
                $error[] = 'Insira pagamento do pacote com no máximo 150 caracteres!';
            }
        }

        if($request->data){
            if(strlen($request->data)>50){
                $error[] = 'Insira data do pacote com no máximo 50 caracteres!';
            }
        }

        if($request->caracteristica1){
            if(strlen($request->caracteristica1)>30){
                $error[] = 'Insira característica 1 do pacote com no máximo 30 caracteres!';
            }
        }

        if($request->caracteristica2){
            if(strlen($request->caracteristica2)>30){
                $error[] = 'Insira característica 2 do pacote com no máximo 30 caracteres!';
            }
        }

        if($request->caracteristica3){
            if(strlen($request->caracteristica3)>30){
                $error[] = 'Insira característica 3 do pacote com no máximo 30 caracteres!';
            }
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
        $pacote->nome = $request->nome;
        $pacote->condicoes = $request->condicoes;
        $pacote->inclui = $request->inclui;
        $pacote->n_inclui = $request->n_inclui;
        $pacote->maisinformacoes = $request->maisinformacoes;
        $pacote->pagamento = $request->pagamento;
        $pacote->preco = $request->preco;
        $pacote->parcelas = $request->parcelas;
        $pacote->data = $request->data;
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
        $pacotes = Pacote::orderBy('created_at', 'desc')->paginate(12);
        return view('pacote.index', compact('pacotes'));
    }
    public function indexAdm (){
        $pacotes = Pacote::orderBy('created_at', 'desc')->paginate(20);
        return view('pacote.indexAdm', compact('pacotes'));
    }

    public function show ($id){
        $pacote = Pacote::findOrFail($id);
        return view('pacote.show', compact('pacote'));
    }

    public function edit ($id){
        $pacote = Pacote::findOrFail($id);
        $fotos = Foto::where('pacote_id', $id)->get();
        return view('pacote.edit', compact('pacote', 'fotos'));
    }
    public function update (Request $request, $id){
        if(!$request->nome){
            $error[] = 'Insira o nome!';//pensar num jeito do texto voltar em caso de erro
        }
        else{
            if(strlen($request->nome)>30){
                $error[] = 'Insira nome do pacote com no máximo 30 caracteres!';
            }
        }

        if(!$request->condicoes){
            $error[] = 'Insira as condições!';
        }
        else{
            if(strlen($request->condicoes)>600){
                $error[] = 'Insira as condições do pacote com no máximo 600 caracteres!';
            }
        }

        if(!$request->inclui){
            $error[] = 'Insira o que o pacote inclui!';
        }
        else{
            if(strlen($request->inclui)>600){
                $error[] = 'Insira o que o pacote inclui com no máximo 600 caracteres!';
            }
        }

        if(!$request->n_inclui){
            $error[] = 'Insira o que o pacote não inclui!';
        }
        else{
            if(strlen($request->n_inclui)>600){
                $error[] = 'Insira o que o pacote não inclui com no máximo 600 caracteres!';
            }
        }

        if(!$request->maisinformacoes){
            $error[] = 'Insira mais informações!';
        }
        else{
            if(strlen($request->maisinformacoes)>600){
                $error[] = 'Insira mais informações do pacote com no máximo 600 caracteres!';
            }
        }

        if(!$request->preco){
            $error[] = 'Insira o preço!';
        }
        else{
            if(is_numeric($request->preco)){
                if($request->preco < 0){
                    $error[] = 'Insira apenas números positivos ou zero no preço!';
                }
            }
            else{
                $error[] = 'Insira apenas números no preço!';
            }
        }
        
        if(!$request->parcelas){
            $error[] = 'Insira a quantidade de parcelas!';
        }
        else{
            if(is_numeric($request->parcelas)){
                if($request->preco < 0){
                    $error[] = 'Insira apenas números positivos ou zero nas parcelas!';
                }
            }
            else{
                $error[] = 'Insira apenas números no preço!';
            }
        }
        if($request->pagamento){
            if(strlen($request->pagamento)>150){
                $error[] = 'Insira pagamento do pacote com no máximo 150 caracteres!';
            }
        }

        if($request->data){
            if(strlen($request->data)>50){
                $error[] = 'Insira data do pacote com no máximo 50 caracteres!';
            }
        }

        if($request->caracteristica1){
            if(strlen($request->caracteristica1)>30){
                $error[] = 'Insira característica 1 do pacote com no máximo 30 caracteres!';
            }
        }

        if($request->caracteristica2){
            if(strlen($request->caracteristica2)>30){
                $error[] = 'Insira característica 2 do pacote com no máximo 30 caracteres!';
            }
        }

        if($request->caracteristica3){
            if(strlen($request->caracteristica3)>30){
                $error[] = 'Insira característica 3 do pacote com no máximo 30 caracteres!';
            }
        }
       
        if(isset($error)){
            return redirect()->back()->with('error', $error);
        }
        $pacote = Pacote::findOrFail($id);
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

        return redirect()->back()->with('message', 'Sucesso ao atualizar pacote!');
    }
    public function destroy($id){
        $pacote = Pacote::findOrFail($id);
        $pacote->delete();
        return redirect()->route('pacotes.index');
    }
    
}
