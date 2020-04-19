<template>
    <iframe :src="indexurl" style="width: 100%; height: 100%"></iframe>
</template>
<script>
    export default{
        data:function () {
            return{
                indexurl:'public/html/index.html'
            }
        }
    }
</script>
