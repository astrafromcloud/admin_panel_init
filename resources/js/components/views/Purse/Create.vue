<template>
    <header>
        <component :is="Header"></component>
    </header>

    <div class="p-5">
        <h3>Create Purse</h3>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" v-model="form.name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="description" placeholder="Description" v-model="form.description"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" placeholder="Price" v-model="form.price">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" placeholder="Quantity" v-model="form.quantity">
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <input type="text" class="form-control" id="color" placeholder="Color" v-model="form.color">
        </div>
        <div class="mb-3">
            <label for="material" class="form-label">Material</label>
            <input type="text" class="form-control" id="material" placeholder="Material" v-model="form.material">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" id="brand" placeholder="Brand" v-model="form.brand">
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">Size</label>
            <input type="number" class="form-control" id="size" placeholder="Size" v-model="form.size">
        </div>
        <div class="mb-3">
            <label for="image_url" class="form-label">Image Source</label>
            <input type="text" class="form-control" id="image_url" placeholder="Image Source" v-model="form.image_url">
        </div>
        <div :class="form.isCreatedSuccessfully ? '' : 'd-none'" style="color: green">
            Purse created successfully
        </div>
        <div>
            <input @click.prevent="addPurse" type="submit" class="btn btn-primary" value="Add">
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import Header from "@/components/layouts/Purse/header.vue";

const form = ref({
    name: '',
    description: '',
    price: '',
    quantity: '',
    color: '',
    material: '',
    brand: '',
    size: '',
    image_url: '',
    isCreatedSuccessfully: false
});

function addPurse() {
    axios.post('/api/purses', form.value)
        .then(res => {
            form.value.name = '';
            form.value.description = '';
            form.value.price = '';
            form.value.size = '';
            form.value.material = '';
            form.value.color = '';
            form.value.brand = '';
            form.value.quantity = '';
            form.value.isCreatedSuccessfully = true
            console.log(res);
            sleep(2000).then(() => { form.value.isCreatedSuccessfully = false });

        })
        .catch(error => {
            console.error('There was an error!', error.response.data);
        });
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

</script>
