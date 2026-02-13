<?php

namespace App\Http\Controllers;

use App\Models\produtoModel;
use Illuminate\Http\Request;

class produtoController extends Controller
{
    public function paginaInicialProduto(){
        return view('paginas.produto.consultarP');
    }//Fim da paginaInicialProduto

    public function cadastrar(){
        return view('paginas.produto.cadastrarP');
    }//Fim do cadastrar

    public function inserir(Request $request){
        $nomeProduto = $request->input('nomeProduto');
        $valor = $request->input('valor');
        $valorDesconto = $request->input('valorDesconto');
        $estoque = $request->input('estoque');
        //Inserir os dados no banco
        $model = new produtoModel();
        $model->nomeProduto = $nomeProduto;
        $model->valor = $valor;
        $model->valorDesconto = $valorDesconto;
        $model->estoque = $estoque;
        //Efetivar a inserção no banco
        $model->save();
        return redirect('paginaInicialProduto');
    }//Fim do Inserir

    public function consultar(){
        $ids = produtoModel::all();
        return view('paginas.produto,consultarP', compact('ids'));
    }//Fim do Consultar

    public function editar($id){
        $dado = produtoModel::findOrFail($id);
        return view('paginas.produto.editarP', compact('dado'));
    }//Fim do editar

    public function atualizar(Request $request, $id){
        produtoModel::where('id', $id)->update($request->all());
        return redirect('paginaInicialProduto');
    }//Fim do atualizar

    public function excluir(Request $request, $id){
        produtoModel::where('id', $id)->delete($request->all());
        return redirect('paginaInicialProduto');
    }//Fim do excluir
}//Fim da classe model