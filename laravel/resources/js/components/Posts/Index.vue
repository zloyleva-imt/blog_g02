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
                            <p class="card-text"><small class="text-muted">author <a href="">{{ post.user.name }}</a></small></p>
                            <p class="card-text">{{ post.body }}</p>
                            <p class="card-text"><small class="text-muted">published at {{ post.created_at | moment("dddd, MMMM Do YYYY") }}</small></p>
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
            },
            routes:{
                type: Object,
                required: true
            }

        }
    }
</script>

<style scoped>

</style>