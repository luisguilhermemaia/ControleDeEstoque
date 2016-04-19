@extends('layout.layout')

@section('content')

@if(empty($produtos))

    <div class="alert alert-danger">
        Você não tem nenhum produto cadastrado.
    </div>

@else
    <h1>Listagem de produtos</h1>

    @if(old('nome'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado.
        </div>
    @endif

    <table class="table table-striped table-bordered text-left">
        <tr>
            <td>Nome</td>
            <td>Valor</td>
            <td>Descricao</td>
            <td>Quantidade</td>
            <td>Detalhes</td>
            <td>Excluir</td>
        </tr>
    @foreach($produtos as $p)
        <tr class="{{$p->quantidade <= 1 ? 'danger' : '' }}">
            <td>{{$p->nome}}</td>
            <td>{{$p->valor}}</td>
            <td>{{$p->descricao}}</td>
            <td>{{$p->quantidade}}</td>
            <td><a href="/produtos/mostra/{{$p->id}}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
            <td><a href="/produtos/deleta/{{$p->id}}"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span></a></td>
        </tr>
    @endforeach
    </table>

@endif
@stop