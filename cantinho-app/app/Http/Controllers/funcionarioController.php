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

    public function esquecerSenha(){
        return view('paginas.funcionario.recuperarF');
    }

    public function codigo(){
        return view('paginas.funcionario.codigoF');
    }

    public function cad(){
        return view('paginas.funcionario.cadastrarF');
    }//Direcionamento para página cadastrar funcionário.

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:funcionario,email',
            'nomeUsuario' => 'required|unique:funcionario,nomeUsuario',
            'senha' => 'required|min:6',
            'senhaConfirmada' => 'required|min:6',
        ]);

        if('senha' == 'senhaConfirmada'){ 
            // Criar funcionário
            funcionarioModel::create([
                'email' => $request->email,
                'nomeUsuario' => $request->nomeUsuario,
                'senha' => Hash::make($request->senha)
            ]);

            return redirect('/');
        }else{
        
        }       
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
