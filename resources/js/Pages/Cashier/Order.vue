<script setup lang="ts">

import CustomLayout from '@/Layouts/CustomLayout.vue';
import { Head } from '@inertiajs/vue3';




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
            <div class="mx-auto sm:px-6 lg:px-8 text-center">
                <div class="flex">
                    <div class="flex-1 overflow-auto">
                        <!-- Content for the scrollable div -->
                         Products here
                    </div>
                    <div class="fixed right-0 px-12">
                        <!-- Content for the fixed div -->
                         Summary here
                    </div>
                </div>
            </div>
        </div>
    </CustomLayout>
</template>
