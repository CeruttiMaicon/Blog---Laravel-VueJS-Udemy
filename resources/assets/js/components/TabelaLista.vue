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
                <tr v-for="item in itens" :key="item">
                    <td v-for="i in item" :key="i">{{i}}</td>
                    <td v-if="detalhe || editar || deletar">
                        <form v-if="token && deletar" action="" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" v-bind:value="token">


                            <a v-if="detalhe" v-bind:href="detalhe">Detalhes |</a> 
                            <a v-if="editar"  v-bind:href="editar" > Editar |</a>
                            <button type="submit">Delete</button>
                        </form>
                    </td>   
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props:['titulos', 'itens', 'criar', 'detalhe', 'deletar', 'editar', 'token']

    }
</script>