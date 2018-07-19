@extends('layouts.app')

@section('content')

<pagina tamanho="10">
    <painel titulo="Lista de Artigos">
    <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
        <tabela-lista 
        v-bind:titulos="['#', 'Titulo', 'Descricao']" 
        v-bind:itens="[[1, 'PHP OO', 'Curso de PHP'], [2, 'Vue JS', 'Curso de Vue JS']]"
        ordem="desc" ordemcol="1"
        criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="083u0fuhfsdpsg"
        ></tabela-lista>
       
    </painel>
</pagina>


@endsection