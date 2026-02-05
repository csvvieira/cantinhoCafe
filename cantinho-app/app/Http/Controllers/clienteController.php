<?php

namespace App\Http\Controllers;

use App\Models\clienteModel;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function cad(){
        return view('paginas.cliente.cadastrarC');
    }//Direcionamento para página cadastrar cliente.
    public function inserir(Request $request){
        $nomeCliente = $request->input('nomeCliente');//Coleta do nome do cliente.
        $cpf = $request->input('cpf');//Coleta do CPF do cliente.
        $emailCliente = $request->input('emailCliente');//Coleta do email do cliente.
        $telefone = $request->input('telefone');//Coleta do telefone do cliente.
        $divida = $request->input('divida');//Coleta da dívida do cliente.
        //Inserção dos dados.
        $model = new clienteModel();
        $model->nomeCliente = $nomeCliente;
        $model->cpf = $cpf;
        $model->emailCliente = $emailCliente;
        $model->telefone = $telefone;
        $model->divida = $divida;
        //Efetivar a inserção.
        $model->save();
        //Depois de cadastrar volta para consultar.
        return redirect('consultarPaginaInicialC');
    }//Fim do Inserir.

    public function consultar(){
        $ids = clienteModel::all();
        return view('paginas.cliente,consultarC', compact('ids'));
    }//Fim do Consultar.

    public function editar($id){
        $dado = clienteModel::findOrFail($id);
        return view('paginas.cliente.editarC', compact('dado'));
    }//Fim do Editar.

    public function atualizar(Request $request, $id){
        clienteModel::where('id', $id)->update($request->all());
        return redirect('/consultarPaginaInicialC');
    }//Fim do Atualizar.

    public function excluir(Request $request, $id){
        clienteModel::where('id', $id)->delete($request->all());
        return redirect('/consultarPaginaInicialC');
    }//Fim do Excluir.

    public function consultarPaginaInicialC(){
        $ids = clienteModel::all();
        return view('paginas.cliente.ConsultarC', compact('ids'));
    }//Fim do consultarPaginaInicialC.
}//Fim da classe model.