<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CustomLayout from '@/Layouts/CustomLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="POS System" />

    <CustomLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Point of Sale</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">Developed by Quantmis. Using Laravel, VueJs and InertiaJs!</div>
                    <div class="text-start px-6 py-5 text-gray-900 dark:text-gray-100">August 2024!</div>
                </div>
            </div>
        </div>
    </CustomLayout>
</template>
