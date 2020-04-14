<template>
    <form @submit.prevent="onsubmit">
        <span><input class="input" type="text" name="name" v-model="user.id"></span>
        <button> 提交 </button>

    </form>
</template>

<script>
    export default {
        name: "FormComponent",
        data:function () {
            return {
                user:{
                    id:1
                }
            }
        },
        methods:{
            onsubmit : function() {
                console.log(this.user);
                axios.post('/api/UserDetail', this.user)
                    .then(result => {
                        console.log(result);
                    })
            }
        }
    }
</script>

<style scoped>

</style>
