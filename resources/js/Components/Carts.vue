<script setup lang="ts">
import Card from 'primevue/card';

defineProps<{
    carts?: Array<object>;
}>()
</script>

<template>
    <Card>
        <template #title>My Items</template>
        <template #content>
            <div v-for="product in carts" :key="product.id">
                <div class="flex gap-2">
                    <p>{{ product.title }}</p>
                    <p>{{ product.price }}</p>
                </div>
            </div>
        </template>
    </Card>
</template>
