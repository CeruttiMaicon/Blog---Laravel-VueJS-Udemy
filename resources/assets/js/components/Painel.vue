<template>
    <div v-bind:class="defineCor">
        <div class="card-header">{{titulo}}</div>

        <div class="card-body">
            <slot> </slot>
        </div>
    </div>
</template>

<script>
    export default {
        props:['titulo', 'cor'],
        computed:{
            defineCor: function(){
                return "card " + (this.cor || "border-primary mb-3");
            }
        }
    }
</script>


// Dentro dessa tag de stylos podemos personalizar ainda mais o CSS da nossa aplicacao
<style media="screen">
.blue {
    border-color: #3A6CB8 !important;
}
.blue > .card-header:first-child {
    color:white;
    background-color:  #3A6CB8;
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.green {
    border-color: #2ec974 !important;
}
.green > .card-header:first-child {
    color:white;
    background-color:  #2ec974;
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.red {
    border-color: #f76f7a !important;
}
.red > .card-header:first-child {
    color:white;
    background-color:  #f76f7a;
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}
</style>
