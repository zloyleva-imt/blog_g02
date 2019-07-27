<template>

    <div class="w-100">

        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(user,i) in users.data">
                    <th scope="row">{{ i + 1 }}</th>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.role }}</td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-12">
            <div class="overflow-auto">
                <b-pagination-nav :link-gen="linkGen" :number-of-pages="users.last_page" use-router></b-pagination-nav>
            </div>
        </div>

    </div>

</template>

<script>
    export default {
        name: "Index",
        props:{
            users:{
                type: Object,
                required: true
            },
            request:{
                type:[Object,Array],
                required: true
            }
        },
        methods: {
            linkGen(pageNum) {
                return pageNum === 1 ?
                    {
                        path: this.getFirstPageUrl(),
                        query: {...this.request}
                    }
                    :
                    {
                        path: location.pathname,
                        query: { page: pageNum, ...this.request}
                    }
            },
            getFirstPageUrl(){
                return location.pathname.length > 3 && location.pathname[location.pathname.length-1] === '/'?
                    location.pathname.slice(0,-1)
                    :
                    location.pathname
            }
        }
    }
</script>

<style scoped>

</style>