@extends('layouts.app')

@section('content')

<pagina tamanho="10">
    <painel titulo="Lista de Artigos">
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>

        
        {{-- O momdal link chama a classe Vue que faz o botao do modal --}}
        <modal-link tipo="" nome="meuModalTeste" titulo="Criar" css="">

        </modal-link>

        <tabela-lista 
        v-bind:titulos="['#', 'Titulo', 'Descricao']" 
        v-bind:itens="{{$listaArtigos}}"
        ordem="desc" ordemcol="1"
        criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="083u0fuhfsdpsg"
        ></tabela-lista>
        
       
    </painel>
    
</pagina>
<modal nome="meuModalTeste">
    <painel titulo="Adicionar formulario aqui">
        <formulario css="" action="#" method="put" enctype="multipart/form-data" token="123456">
            <div class="form-group">
                <label for="titulo"> Titulo </label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
            </div>
            <div class="form-group">
                <label for="descricao"> Descricao </label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descricao">
            </div>
            <button class="btn btn-info">Adicionar</button>

        </formulario>
    </painel>
</modal>



@endsection