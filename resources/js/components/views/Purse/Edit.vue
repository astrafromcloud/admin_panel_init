<script setup>
import Header from "@/components/layouts/Purse/header.vue";
import {onMounted, ref} from "vue";
import axios from "axios";
import router from "@/router.js";
import {useRoute} from "vue-router";

const form = ref({
    name: '',
});
const isLoading = ref(true);

const route = useRoute();
let id = route.params['id'];

function updatePurse() {
    axios.patch(`/api/purses/${id}/edit`, {name: form.value.name})
        .then(res => {
            console.log('Updated!');
            router.push({name: 'purse.index'});
        })
}

onMounted(async () => {
    id = route.params['id'];
    await getPurse(id);
    isLoading.value = false;
});

async function getPurse(id) {
    try {
        const res = await axios.get(`/api/purses/${id}/edit`);
        form.value.name = res.data.name;
    } catch (error) {
        console.error('There was an error fetching the purse!', error);
    }
}
</script>

<template>
    <header>
        <component :is="Header"></component>
    </header>

    <div class="p-5">
        <h3>Edit Purse</h3>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                id="name"
                v-model="form.name"
                :disabled="isLoading"
                :placeholder="isLoading ? 'Loading...' : ''"
            >
        </div>
        <div>
            <input @click.prevent="updatePurse()" type="submit" class="btn btn-primary" :disabled="isLoading"
                   value="Update">
        </div>
    </div>
</template>

<style scoped>
</style>
