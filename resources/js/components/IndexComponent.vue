<template>

    <ul>
        <li><a :href="url.yangzhi" ><img src="images/icons/white/home.png" alt="" title="" /><span>养殖技能</span></a></li>
        <li v-on:click="test"><a ><img src="images/icons/white/user.png" alt="" title="" /><span>病理诊断</span></a></li>
        <li><a href="features.html"><img src="images/icons/white/settings.png" alt="" title="" /><span>通风技巧</span></a></li>

        <li><a href="blog.html"><img src="images/icons/white/blog.png" alt="" title="" /><span>拍照诊断</span></a></li>
        <li><a href="photos.html"><img src="images/icons/white/photos.png" alt="" title="" /><span>化学实验室</span></a></li>
        <li><a href="videos.html"><img src="images/icons/white/video.png" alt="" title="" /><span>综合信息</span></a></li>
    </ul>
</template>

<script>
    export default {
        name: "IndexComponent",
        data: function() {
            return{
                url:{
                    yangzhi:'/yangzhi',
                }
            }
        },
        methods:{
            test:function () {
                alert(1111);
            }

        }
    }
</script>

<style scoped>

</style>
