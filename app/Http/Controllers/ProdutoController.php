<?php

namespace estoque\Http\Controllers;

//use Illuminate\Http\Request;

use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\DB;

use estoque\Http\Requests;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = DB::select('select * from produtos');
        return view('produto.listagem')->with('produtos', $produtos);
    }
    public function mostra()
    {
        $id = Request::route('id');
        $produto = DB::select('select * from produtos where id = ?',[$id]);

        if(empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto[0]);
    }
    public function novo()
    {
        return view('formulario');
    }
    public function adiciona()
    {
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $descricao = Request::input('descricao');
        $quantidade = Request::input('quantidade');
        DB::insert('INSERT INTO `produtos` (`nome`, `valor`, `descricao`, `quantidade`) VALUES (?, ?, ?, ?)', array($nome, $valor, $descricao, $quantidade));
        return redirect('/produtos')->withInput();
    }
    public function deleta()
    {
        //pegar o id
        $id = Request::route('id');
        // query do banco de dados
        DB::select('DELETE FROM `produtos` WHERE `produtos`.`id`= ?',[$id]);
        //retornar  e dar um redirect
        return redirect('/produtos');
    }


}
