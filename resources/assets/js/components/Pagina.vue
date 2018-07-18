<template>
    <div class="container">
        <div class="row">
            <div v-bind:class="defineTamanho">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        /*
        *  criando um layout que fica semtralizado com a tela independente do tamanho que
        *  for passado
        */
        props:['tamanho'],
        computed:{
            defineTamanho: function(){
                if(this.tamanho >= 12){
                    return "col-md-12";
                }
                if(this.tamanho <= 2){
                    return "col-md-2 col-md-offset-5";
                }
                if (this.tamanho % 2 == 0){
                    //Numero par
                    return "col-md-"+ parseInt(this.tamanho) + " col-md-offset-" + ((12 - parseInt(this.tamanho)) / 2);
                }else{
                    //Numero impar
                    return "col-md-"+ ((parseInt(this.tamanho) +1) + " col-md-offset-" + (12 -(parseInt(this.tamanho) + 1)) / 2);
                }

                return "col-md-6 col-md-offset-3"
            }
        }
    }
</script>