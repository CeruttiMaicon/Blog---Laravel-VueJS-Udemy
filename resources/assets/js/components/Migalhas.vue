<template>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="#">Home</a> </li>
        <li class="breadcrumb-item active"><a href="#">Library</a> </li>
        <li class="breadcrumb-item active"> Data</li>
    </ol>
</nav>
</template>

<script>
    export default {
        props:['lista'],
        mounted:function() {
            console.log(this.lista);
        },
    }
</script>
