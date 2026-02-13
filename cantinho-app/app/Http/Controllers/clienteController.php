<?php

namespace App\Http\Controllers;

use App\Models\clienteModel;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function paginaInicialCliente(){
        return view('paginas.cliente.consultarC');
    }//Fim da paginaInicialProduto

    public function cadastrar(){
        return view('paginas.cliente.cadastrarC');
    }//Fim do cadastrar

    public function inserir(Request $request){
        $nomeCliente = $request->input('nomeCliente');
        $cpf = $request->input('cpf');
        $email = $request->input('email');
        $telefone = $request->input('telefone');
        $divida = $request->input('divida');
        //Inserir os dados no banco
        $model = new clienteModel();
        $model->nomeCliente = $nomeCliente;
        $model->cpf = $cpf;
        $model->email = $email;
        $model->telefone = $telefone;
        $model->divida = $divida;
        //Efetivar a inserção no banco
        $model->save();
        return redirect('paginaInicialCliente');
    }//Fim do Inserir

    public function consultar(){
        $ids = clienteModel::all();
        return view('paginas.cliente,consultarC', compact('ids'));
    }//Fim do Consultar

    public function editar($id){
        $dado = clienteModel::findOrFail($id);
        return view('paginas.cliente.editarC', compact('dado'));
    }//Fim do editar

    public function atualizar(Request $request, $id){
        clienteModel::where('id', $id)->update($request->all());
        return redirect('paginaInicialCliente');
    }//Fim do atualizar

    public function excluir(Request $request, $id){
        clienteModel::where('id', $id)->delete($request->all());
        return redirect('paginaInicialCliente');
    }//Fim do excluir
}//Fim da classe model