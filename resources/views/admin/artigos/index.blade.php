@extends('layouts.app')

@section('content')

<pagina tamanho="10">
    <painel titulo="Lista de Artigos">
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>

        
        
       

        </modal-link>

        <tabela-lista 
        v-bind:titulos="['#', 'Titulo', 'Descricao']" 
        v-bind:itens="{{$listaArtigos}}"
        ordem="desc" ordemcol="1"
        criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="083u0fuhfsdpsg"
        modal="sim"
        ></tabela-lista>
        
        
       
    </painel>
    
</pagina>
<modal nome="adicionar">
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
<modal nome="editar">
    <painel titulo="Editar">
        <formulario css="" action="#" method="put" enctype="multipart/form-data" token="123456">
            <div class="form-group">
                <label for="titulo"> Titulo </label>
                <input type="text" class="form-control" id="titulo" v-model="$store.state.item.titulo" name="titulo" placeholder="Titulo">
            </div>
            <div class="form-group">
                <label for="descricao"> Descricao </label>
                <input type="text" class="form-control" id="descricao" v-model="$store.state.item.descricao" name="descricao" placeholder="Descricao">
            </div>
            <button class="btn btn-info">Atualizar</button>

        </formulario>
    </painel>
</modal>



@endsection