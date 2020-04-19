<template>
    <div id="first">
        <ul>
            <li v-for="test in tests">{{ test.name }}</li>
        </ul>
        <Form></Form>
    </div>
</template>

<script>
    import Form from '../components/FormComponent'
    export default {
        name: "First",
        component: {
            Form
        },
        created() {
            this.$store.dispatch('loadTests');
        },
        computed:{
            tests(){
                return this.$store.getters.getTests;
            }
        }
    }
</script>

<style scoped>

</style>
