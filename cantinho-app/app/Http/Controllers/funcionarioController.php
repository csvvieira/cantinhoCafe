<?php

namespace App\Http\Controllers;

use App\Models\funcionarioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class funcionarioController extends Controller
{
    public function paginaInicial(){
        return view ('paginas.funcionario.index');
    }//Fim da página inicial.

    public function login(Request $request){
        $request->validate([
        'nomeUsuario' => 'required',
        'senha' => 'required'
    ]);

    $funcionario = funcionarioModel::where('nomeUsuario', $request->nomeUsuario)->first();

    if ($funcionario && Hash::check($request->senha, $funcionario->senha)) {
        session([
            'funcionario_id' => $funcionario->id,
            'funcionario_nome' => $funcionario->nome
        ]);
        //Definir rota
        return redirect('');
    }

        return back()->with('erro', 'Usuário ou senha inválidos');
    }

    public function cad(){
        return view('paginas.funcionario.cadastrarF');
    }//Direcionamento para página cadastrar funcionário.

    public function store(Request $request){
        $request->validate([
        'email' => 'required|email|unique:funcionarios,email',
        'nomeUsuario' => 'required|unique:funcionarios,nomeUsuario',
        'senha' => 'required|min:6',
        'senhaConfirmada' => 'required|same:senha'
    ], [
        'senhaConfirmada.same' => 'As senhas não conferem'
    ]);

    funcionarioModel::create([
        'email' => $request->email,
        'nomeUsuario' => $request->nomeUsuario,
        'senha' => Hash::make($request->senha)
    ]);

    // Redirecionamento (rota em branco para definir depois)
    return redirect('paginas.funcionario.index');
}

    public function editar($id){
        $dado = funcionarioModel::findOrFail($id);
        return view('paginas.funcionario.editarF', compact('dado'));
    }//Fim do Editar.

    public function atualizar(Request $request, $id){
        funcionarioModel::where('id', $id)->update($request->all());
        return redirect('/consultarTelaLogin');
    }//Fim do Atualizar.

    public function consultarTelaLogin(){
        $ids = funcionarioModel::all();
        return view('paginas.funcionario.index', compact('ids'));
    }//Fim do consultarPaginaInicialC.
}//Fim da classe model.
