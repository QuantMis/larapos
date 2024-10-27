<script setup lang="ts">

import CustomLayout from '@/Layouts/CustomLayout.vue';
import { Head, router, usePage } from '@inertiajs/vue3';
import Button from 'primevue/button';
import Card from 'primevue/card';

defineProps({ session: String })
const { props } = usePage();

function newOrder() {
    router.get(route('cashier-display-screen.order', { session: props.session }))
}

</script>

<template>

    <Head title="Cashier Display Screen" />
    <CustomLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight">Cashier Display Screen
                </h2>
                <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight">{{ Date() }}</h2>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-start">
                <p class="text-3xl font-bold mb-2">Summary</p>
                <div class="flex gap-4">
                    <div class="flex-1">
                        <Card>
                            <template #title>Total Order</template>
                            <template #content>
                                <h1 class="m-0 font-bold text-5xl">
                                    20
                                </h1>
                            </template>
                        </Card>
                    </div>
                    <div class="flex-1">
                        <Card>
                            <template #title>Total Sales</template>
                            <template #content>
                                <h1 class="m-0 font-bold text-5xl">
                                    $20
                                </h1>
                            </template>
                        </Card>
                    </div>
                </div>
                <p class="text-3xl font-bold mt-4 mb-2">Actions</p>
                <div class="flex gap-4">
                    <Card @click="newOrder">
                        <template #title>New Order</template>
                        <template #content>
                            <h1 class="m-0 font-bold text-sm">
                               Create a new order
                            </h1>
                        </template>
                    </Card>
                    <Card>
                        <template #title>Sign Out</template>
                        <template #content>
                            <h1 class="m-0 font-bold text-sm">
                              Close cashier session
                            </h1>
                        </template>
                    </Card>
                </div>
            </div>
        </div>
    </CustomLayout>
</template>
