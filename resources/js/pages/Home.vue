<template>
    <div id="home">
        <li v-on:click="jump">Home</li>
        <li><router-link to="First">Home</router-link></li>
        <li v-on:click="show">Home</li>
        <li>Home</li>

        <ul>
            <li v-for="test in tests">{{ test.name }}</li>
        </ul>

        <span v-show="testsLoadStatus == 1">Loading</span>
        <span v-show="testsLoadStatus == 2">Cafes loaded successfully!</span>
        <span v-show="testsLoadStatus == 3">Cafes loaded unsuccessfully!</span>
    </div>
</template>

<script>
    export default {
        created() {
            this.$store.dispatch('loadTests');
        },
        computed : {
            testsLoadStatus(){
                return this.$store.getters.getTestsLoadStatus;
            },

            tests(){
                return this.$store.getters.getTests;
            }
        },
        methods:{
            jump(){
                this.$router.push('/first');
            },
            show(){
                axios.get('/api/showall');
            }
        },
    }
</script>

<style scoped>

</style>
