<script setup lang="ts">

import Carts from '@/Components/Carts.vue';
import Product from '@/Components/Product.vue';
import CustomLayout from '@/Layouts/CustomLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
defineProps({ products: Array })

const carts = ref<Array<object>>([]);

function add(product:object) {
    carts.value.push(product);
}

</script>

<template>

    <Head title="Cashier Display Screen" />
    <CustomLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight">Order Page</h2>
                <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight">{{ Date() }}</h2>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="">
                    <div class="flex flex-wrap gap-4">
                        <template v-for="product in products" :key="product.id">
                            <Product :title="product.title" :price="product.price" @click="add(product)" />
                        </template>
                    </div>
                    <div class="">
                        <Carts :carts="carts" />
                    </div>
                </div>
            </div>
        </div>
    </CustomLayout>
</template>
