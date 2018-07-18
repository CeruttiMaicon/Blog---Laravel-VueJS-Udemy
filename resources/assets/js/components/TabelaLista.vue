<template>
    <div>
        <a v-if="criar" v-bind:href="criar">Criar</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th v-for="titulo in titulos" :key="titulo">{{titulo}}</th>
                    <th v-if="detalhe || editar || deletar">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in itens" :key="index">
                    <!-- Aqui é feito o formulario onde o Vue faz um for pegando os itens passados no array -->
                    <td v-for="i in item" :key="i">{{i}}</td>
                    <!-- Ṣe um desses campos vier ele mostrara em tela -->
                    <td v-if="detalhe || editar || deletar">
                        <form v-bind:id="index" v-if="token && deletar" v-bind:action="deletar" method="post">
                            <!-- Campos ocultos para mandar o metodo e o token -->
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" v-bind:value="token">
                            <a v-if="detalhe" v-bind:href="detalhe">Detalhes |</a> 
                            <a v-if="editar"  v-bind:href="editar" > Editar |</a>
                            <!-- Funcao do botao delete -->
                            <a href="#" v-on:click="executaForm(index)"> Deletar </a>
                        </form>
                        <!-- Caso nao seja passado o token -->
                        <span v-if="!token">
                            <a v-if="detalhe" v-bind:href="detalhe">Detalhes |</a> 
                            <a v-if="editar"  v-bind:href="editar" > Editar |</a>
                            <a v-if="deletar"  v-bind:href="deletar" > Deletar</a>
                        </span>
                        <!-- Caso o token seja passado mas a rota de deletar nao -->
                        <span v-if="token && !deletar">
                            <a v-if="detalhe" v-bind:href="detalhe">Detalhes |</a> 
                            <a v-if="editar"  v-bind:href="editar" > Editar</a>
                        </span>
                    </td>   
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props:['titulos', 'itens', 'criar', 'detalhe', 'deletar', 'editar', 'token'],
        /*      
         *  Existem dois tipos de metodos para criar funções no Vue o computed e o methods
         *
         *          METHODS
         *      Os methos são execuados varias vezes enquanto se utiliza uma função e vai modificar alguma
         *  informação de uma listagem. Não é interessante utilizar o method para funções de listagem, mas
         *  você o utiliza-ra sempre que a ação for dada por parte do usuario.
         *      Ex: um botão onde o usuario terá a função do click para realizar a função, assim esse metodo não
         *  será utilizado toda a vez quando a pagina for atualizada e/ou estiver carregando uma lista
         *      
         *          COMPUTED
         *      O computed quando a função será repetida varias vezes e não tera uma interação do usuario
         *
         *      Abaixo a funcao de deletar que é utilizada acima
         */
        methods:{
            executaForm: function(index){
                document.getElementById('id').submit();
            }
        }

    }
</script>