<?php

namespace App\Http\Controllers;

use App\Models\funcionarioModel;
use Illuminate\Http\Request;

class funcionarioController extends Controller
{
    public function paginaInicial(){
        return view ('paginas.funcionario.index');
    }//Fim da página inicial.

    public function cad(){
        return view('paginas.funcionario.cadastrarF');
    }//Direcionamento para página cadastrar funcionário.

    public function inserir(Request $request){
        $nomeUsuario = $request->input('nomeUsuario');//Coleta do nome de usuário do funcionário.
        $emailFuncionario = $request->input('emailFuncionario');//Coleta do email do funcionário.
        $senha = $request->input('senha');//Coleta da senha do funcionário.
        $senhaConfirmada = $request->input('senhaConfirmada');//Coleta da confirmação de senha do funcionário.
        //Inserção dos dados.
        $model = new funcionarioModel();
        $model->nomeUsuario = $nomeUsuario;
        $model->emailFuncionario = $emailFuncionario;
        $model->senha = $senha;
        $model->senhaConfirmada = $senhaConfirmada;
        //Efetivar a inserção.
        $model->save();
        //Depois de cadastrar volta para tela de login.
        return redirect('index');
    }//Fim do Inserir.

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
