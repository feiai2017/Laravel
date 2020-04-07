<template>
    <ul>
        <li v-on:click="jump">Home</li>
        <li><router-link to="First">Home</router-link></li>
        <li>Home</li>
        <li>Home</li>
    </ul>
</template>

<script>
    export default {
        methods:{
            jump(){
                this.$router.push('/first');
            }
        }
    }
</script>

<style scoped>

</style>
