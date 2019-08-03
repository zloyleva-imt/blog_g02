<template>

    <div class="container">
        <div class="row">

            <div class="card mb-3 w-100" v-for="post in posts.data">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="http://lorempixel.com/" class="card-img" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ post.title }}</h5>
                            <p class="card-text">{{ post.body }}</p>
                            <p class="card-text"><small class="text-muted">{{ post.created_at }}</small></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</template>

<script>
    export default {
        name: "Index",
        props:{
            posts:{
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>