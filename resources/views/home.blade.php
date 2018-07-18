@extends('layouts.app')

@section('content')

<pagina tamanho="9">
    <painel titulo="Dashboard">

        Teste de conteudo...
        <div class="row">
            <div class="col-md-4">
            <caixa qtd="80" titulo="Artigos" url="{{route('artigos.index')}}" cor="#e534e5" icone="ion-social-tux">

                </caixa>
            </div>
            <div class="col-md-4">
                <caixa qtd="80" titulo="Artigos" url="#" cor="blue" icone="ion-social-tux">

                </caixa>
            </div>
            <div class="col-md-4">
                <caixa qtd="80" titulo="Artigos" url="#" cor="red" icone="ion-social-tux">

                </caixa>
            </div>
    </painel>
</pagina>


@endsection
