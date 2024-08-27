<script setup lang="ts">

import CustomLayout from '@/Layouts/CustomLayout.vue';
import { Head, router, usePage } from '@inertiajs/vue3';
import Button from 'primevue/button';

defineProps({ session: String })
const {props}  = usePage();

function newOrder() {
    // session is from the query param
    router.get(route('cashier-display-screen.order', { session: props.session }))
}

</script>

<template>
      <Head title="Cashier Display Screen" />
      <CustomLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight">Cashier Display Screen</h2>
                <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight">{{ Date() }}</h2>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
                <Button label="New Order " @click="newOrder" />
            </div>
        </div>
    </CustomLayout>
</template>
