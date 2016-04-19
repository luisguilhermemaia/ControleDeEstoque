@extends('layout.layout')

@section('content')

        <form class="form-horizontal" action="/produtos/adiciona" method="post ">

            <input value=" {{csrf_token()}}" type="hidden" name="_token">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Valor</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="valor">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Quantidade</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control"  name="quantidade">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Descrição</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="descricao"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </div>
        </form>

@stop
