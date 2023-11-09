<template>
    <div>
        show link component
        <br>
        <router-link :to="{name: 'link.create'}">create new link</router-link>
        <br>
        <hr>
        <h1> your links:</h1>
<!--        <div v-for="link in links">
            <h4>{{ link.name }}</h4>
            <hr>
        </div>-->
    </div>
</template>

<script>
import router from "@/router.js";
import store from "@/store/index.js";

export default {
    name: "ShowLinkComponent",

    mounted() {
        this.$store.dispatch('getLinks')
    },

    computed: {
        links() {
            return this.$store.getters.links
        }
    },

    methods: {
        store() {
            return store
        },

    }


}
</script>

<style scoped>

</style>
