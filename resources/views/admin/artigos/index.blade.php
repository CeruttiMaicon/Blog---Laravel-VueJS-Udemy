@extends('layouts.app')

@section('content')

<pagina tamanho="10">
    <painel titulo="Lista de Artigos">

        <tabela-lista 
        v-bind:titulos="['#', 'Titulo', 'Descricao']" 
        v-bind:itens="[[1, 'PHP OO', 'Curso de PHP'], [2, 'Vue JS', 'Curso de Vue JS']]"
        criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="8464351351384"
        ></tabela-lista>
       
    </painel>
</pagina>


@endsection