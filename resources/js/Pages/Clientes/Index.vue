<script>
export default{
    mounted(){
        console.log(this.$props.clientes)
    },
    props: ['clientes']
}
</script>

<template>
    <div>
        <h1>Index</h1>
    </div>
    <div v-for="cliente in clientes" v-bind:key="cliente.nit">
        {{ cliente.nombre }}
    </div>
    <div>
        <p v-if="$matches.mobile.only">
            mobile
        </p>
        <p v-if="$matches.tablet.only">
            tablet
        </p>
        <p v-if="$matches.laptop.only">
            laptop
        </p>
        <p v-if="$matches.desktop.only">
            desktop
        </p>
    </div>
</template>
