<?php

namespace App\Http\Controllers;

use App\Models\produtoModel;
use Illuminate\Http\Request;

class produtoController extends Controller
{
    public function cad(){
        return view('paginas.produto.cadastrarP');
    }//Direcionamento para página cadastrar produto.
    public function inserir(Request $request){
        $nomeProduto = $request->input('nomeProduto');//Coleta do nome do produto.
        $valor = $request->input('valor');//Coleta do valor do produto.
        $valorDesconto = $request->input('valorDesconto');//Coleta do valor com desconto do produto.
        $estoque = $request->input('estoque');//Coleta de produto em estoque
        //Inserção dos dados.
        $model = new produtoModel();
        $model->nomeProduto = $nomeProduto;
        $model->valor = $valor;
        $model->valorDesconto = $valorDesconto;
        $model->estoque = $estoque;
        //Efetivar a inserção.
        $model->save();
        //Depois de cadastrar volta para consultar.
        return redirect('consultarPaginaInicialP');
    }//Fim do Inserir.

    public function consultar(){
        $ids = produtoModel::all();
        return view('paginas.produto,consultarP', compact('ids'));
    }//Fim do Consultar.

    public function editar($id){
        $dado = produtoModel::findOrFail($id);
        return view('paginas.produto.editarP', compact('dado'));
    }//Fim do Editar.

    public function atualizar(Request $request, $id){
        produtoModel::where('id', $id)->update($request->all());
        return redirect('/consultarPaginaInicialP');
    }//Fim do Atualizar.

    public function excluir(Request $request, $id){
        produtoModel::where('id', $id)->delete($request->all());
        return redirect('/consultarPaginaInicialP');
    }//Fim do Excluir.

    public function consultarPaginaInicialP(){
        $ids = produtoModel::all();
        return view('paginas.produto.ConsultarP', compact('ids'));
    }//Fim do consultarPaginaInicialP.
}//Fim da classe model.
