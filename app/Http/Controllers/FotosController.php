<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Post;
use Illuminate\Support\Facades\Validator;

class FotosController extends Controller
{
    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), FotosController::rulesNomeFoto(), FotosController::messagesNomeFoto());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

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
    
    public function store(Request $request, $categoria, $id){
        $validator = Validator::make($request->all(), FotosController::rulesFotos(), FotosController::messagesFotos());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        
        $files = $request->file('fotos');
        FotosController::saveFotosInDatabase($files, $categoria, $id);
        
        
        return redirect()->back()->with('message', 'Sucesso ao adicionar foto!');
    }

    public function saveFotosInDatabase($files, $categoria, $id){
        foreach($files as $file){
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $without_extension = basename($filename, ".$extension");

            
            $filename = $file->store('fotos');
            Foto::create([
                $categoria => $id,
                'nome' => $without_extension,
                'url' => $filename
            ]);
                
        }
        return;
    }
     /* no server:  foreach($files as $file){
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $without_extension = basename($filename, ".$extension");
            $newFileName = uniqid('', true).'.'.$extension;
            $url = 'fotos/'.$newFileName;

       
            Foto::create([
                $categoria => $id,
                'nome' => $without_extension,
                'url' => $url
            ]);
            $file->move(
                base_path() . '/../public_html/storage/fotos/', $newFileName
            );
                
        }*/

    public function rulesNomeFoto(){
        return [
            'nomeFoto' => 'required|max:50',
        ];
    }

    public function messagesNomeFoto(){
        return [
            'nomeFoto.required' => 'O campo Nome da Foto é obrigatório.',
            'nomeFoto.max' => 'O campo Nome da Foto deve ter no máximo 50 caracteres.'
        ];
    }

    public function rulesFotos(){
        return [
            'fotos' => 'required',
            'fotos.*' => 'image'
        ];
    }

    public function messagesFotos(){
        return [
            'fotos.required' => 'O campo Fotos é obrigatório.',
            'fotos.*.image' => 'O campo Fotos deve conter apenas imagens.'
        ];
    }
}
