<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Pacote;
use Illuminate\Support\Facades\Validator;

class PacotesController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(), PacotesController::rulesPacotes(), PacotesController::messagesPacotes());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $pacote = new Pacote;
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
       
        $files = $request->file('fotos');
        foreach($files as $file){
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $without_extension = basename($filename, ".$extension");

            $filename = $file->store('fotos');
            Foto::create([
                'pacote_id' => $pacote->id,
                'nome' => $without_extension,
                'url' => $filename
            ]);
            
        }
        
        return redirect()->back()->with('message', 'Sucesso ao cadastrar pacote!');

    }

    public function index (){
        $pacotes = Pacote::orderBy('created_at', 'desc')->paginate(6);
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
        $validator = Validator::make($request->all(), PacotesController::rulesPacotesUpdate(), PacotesController::messagesPacotes());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $pacote = Pacote::findOrFail($id);
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

        return redirect()->back()->with('message', 'Sucesso ao atualizar pacote!');
    }
    public function destroy($id){
        $pacote = Pacote::findOrFail($id);
        $pacote->delete();
        return redirect()->route('pacotes.index');
    }

    public function rulesPacotes(){
        return [
            'nome' => 'required|max:30',
            'condicoes' => 'required|max:600',
            'inclui' => 'required|max:600',
            'n_inclui' => 'required|max:600',
            'maisinformacoes' => 'required|max:600',
            'preco' => 'required|numeric|max:1000000|min:0.01',
            'parcelas' => 'required|numeric|max:1000000|integer|min:1',
            'pagamento' => 'max:150',
            'data' => 'max:50',
            'caracteristica1' => 'max:30',
            'caracteristica2' => 'max:30',
            'caracteristica' => 'max:30',
            'fotos' => 'required',
            'fotos.*' => 'image'
        ];
    }

    public function rulesPacotesUpdate(){
        $rules = PacotesController::rulesPacotes();
        unset($rules['fotos'], $rules['fotos.*']);
        return $rules;
    }

    public function messagesPacotes(){
        return [
            'nome.required' => 'O campo Nome é obrigatório.',
            'nome.max' => 'O campo Nome deve ter no máximo 30 caracteres.',
            'condicoes.required' => 'O campo Condições é obrigatório.',
            'condicoes.max' => 'O campo Condições deve ter no máximo 600 caracteres.',
            'inclui.required' => 'O campo Inclui é obrigatório.',
            'inclui.max' => 'O campo Inclui deve ter no máximo 600 caracteres.',
            'n_inclui.required' => 'O campo Não Inclui é obrigatório.',
            'n_inclui.max' => 'O campo Não Inclui deve ter no máximo 600 caracteres.',
            'maisinformacoes.required' => 'O campo Mais Informações é obrigatório.',
            'maisinformacoes.max' => 'O campo Mais Informações deve ter no máximo 600 caracteres.',
            'preco.required' => 'O campo Preço é obrigatório.',
            'preco.numeric' => 'O campo Preço deve ter apenas números.',
            'preco.max' => 'O campo Preço deve ter valor de no máximo 1 Milhão.',
            'preco.min' => 'O campo Preço deve ter valor de no mínimo 0.01.',
            'parcelas.required' => 'O campo Parcelas é obrigatório.',
            'parcelas.numeric' => 'O campo Parcelas deve ter apenas números.',
            'parcelas.max' => 'O campo Parcelas deve ter valor de no máximo 1 Milhão.',
            'parcelas.integer' => 'O campo Parcelas deve ter apenas número inteiro.',
            'parcelas.min' => 'O campo Parcelas deve ter valor de no mínimo 0.01.',
            'pagamento.max' => 'O campo Pagamento deve ter no máximo 150 caracteres.',
            'data.max' => 'O campo Data deve ter no máximo 50 caracteres.',
            'caracteristica1.max' => 'O campo Característica1 deve ter no máximo 30 caracteres.',
            'caracteristica2.max' => 'O campo Característica2 deve ter no máximo 30 caracteres.',
            'caracteristica3.max' => 'O campo Característica3 deve ter no máximo 30 caracteres.',
            'fotos.required' => 'O campo Fotos é obrigatório.',
            'fotos.*.image' => 'O campo Fotos deve conter apenas imagens.'
        ];
    }
    
}
