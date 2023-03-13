<template>
    <AppLayout>
    </AppLayout>
</template>

<script>
import axios from 'axios'
import AppLayout from '@/Layouts/AppLayout.vue';
export default {
    components: {
        AppLayout
    },
    data() {
        return { characters: null }
    },
    mounted() {
        this.getCharacters();
    },
    methods: {
        getCharacters() {
            axios.get('https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=4a7e850dadd895c0107bec30d0b02fd8&hash=5d08fff1c1eafed31bd779e857334dd7').then(
                response => (
                    this.characters = response.data
                )
            );
        }
    }
}
</script>

<style></style>