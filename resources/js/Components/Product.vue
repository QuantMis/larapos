
<script setup lang="ts">
import Card from 'primevue/card';

withDefaults(
    defineProps<{
        title?: string;
        price?: number;
        member_price?: number;
        have_discount?: boolean;

    }>(),
    {
        title: 'product-name',
        price: 0.00,
        member_price: 0.00,
        have_discount: false,
    }
);
</script>

<template>
  <Card>
    <template #title>{{ title }}</template>
    <template #content>
        <p class="m-0">
            RM {{ price }}
        </p>
    </template>
</Card>
</template>
