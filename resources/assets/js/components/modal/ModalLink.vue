<template>
    <span>
        <!-- Faz a verificacao se o item foi passado como atributo no metodo de chamada do modallink -->
        <span v-if="item">
            <button v-on:click="preencheFormulario()" v-if="!tipo || (tipo != 'button' && tipo != 'link' )" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
            <button v-on:click="preencheFormulario()" v-if="tipo == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
            <a v-on:click="preencheFormulario()" v-if="tipo == 'link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</a>
        </span>

        <!-- Caso a variavel "item" nao seja passada -->
        <span v-if="!item">
            <button v-if="!tipo || (tipo != 'button' && tipo != 'link' )" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
            <button v-if="tipo == 'button'" type="button" v-bind:class="css || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</button>
            <a v-if="tipo == 'link'" href="#" v-bind:class="css || ''" data-toggle="modal" v-bind:data-target="'#' + nome">{{titulo}}</a>
        </span>
       
    </span>
</template>

<script>
    export default {
        props:['tipo', 'nome', 'titulo', 'css', 'item'],
        // criando os metodos para fazer a passagem da variavel "item"
        methods:{
            preencheFormulario: function(){
                //Isto é utilizado para atualizar os itens da loja
                this.$store.commit('setItem', this.item);

            }
        }
    }
</script>