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
        $foto->thumbnail = $request->thumbnail;
        $foto->save();
        return redirect()->back()->with('message', 'Sucesso ao atualizar foto!');
    }

    public function destroy($id){
        $foto = Foto::findOrFail($id);
        $foto->delete();
        return redirect()->back()->with('message', 'Sucesso ao excluir foto!');
    }
}
