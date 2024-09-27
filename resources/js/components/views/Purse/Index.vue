<script setup>

import Header from "@/components/layouts/Purse/header.vue";
import {onMounted, ref} from "vue";
import axios from "axios";
import router from "@/router.js";

const purses = ref([])

const props = defineProps({
    purses: Array
})

onMounted(() => getPurses())

function getPurses() {
    axios.get('/api/purses')
        .then(res => {
            console.log(res)
            purses.value = res.data
            console.log('Loaded!')
        })
}

function deletePurse(id) {
    axios.delete(`/api/purses/${id}`)
        .then(
            res => {
                getPurses()
            }
        )
}

</script>

<template>
    <header>
        <component :is="Header"></component>
    </header>

    <div class="ps-5 pb-3 pt-3">
        <h2>All Purses</h2>
    </div>

    <div class="w-75 ps-5 pe-5">
        <table class="table table-striped ">
            <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col"></th>
                <th scope="col"></th>

            </tr>
            </thead>
            <tbody>
            <tr v-for="(purse) in purses" class="w-100 m-3">

                <th scope="row">{{ purse.id }}</th>
                <td>{{ purse.name }}</td>
                <td>
                    <a href="#" class="btn btn-success" @click.prevent="router.push(`/purses/${purse.id}/edit`)">
                        Edit
                    </a>
                </td>

                <td>
                    <a href="#" class="btn btn-danger" @click.prevent="deletePurse(purse.id)">
                        Delete
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>


</template>

<style scoped>

</style>
