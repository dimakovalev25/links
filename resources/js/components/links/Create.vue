<template>
    <div class="container">
        <div class="w-50">
            <input class="form-control" v-model="title" type="text" placeholder="title">
        </div>
        <div class="w-50">
            <textarea class="form-control" v-model="content" type="text" placeholder="content"/>
        </div>
        <div class="w-50">
            <button @click.prevent="addLink" type="submit" class="btn btn-success">add</button>
        </div>
    </div>
</template>

<script>

import router from "@/router.js";
export default {
    name: "CreatePostComponent",

    data() {
        return {
            link_name: null,
        }
    },



    methods: {
        addLink(){
            axios.post('/api/link', {link_name: this.link_name})
                .then(res => {
                    router.push({name: 'links'})
          
                })
        }
    }


}
</script>

<style scoped>

</style>
