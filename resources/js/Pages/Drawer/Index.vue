<script setup lang="ts">
import CustomLayout from '@/Layouts/CustomLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import Button from 'primevue/button';
import Tag from 'primevue/tag';
import 'primeicons/primeicons.css'

defineProps({ sessions: Array })

function createNewSession() {
    router.post(route('session.index'))
}
const getSeverity = (val: string) => val == "Open" ? "success" : "danger";

</script>

<template>

    <Head title="Drawer Session" />
    <CustomLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight">Session</h2>
                <h2 class="font-semibold text-md text-gray-800 dark:text-gray-200 leading-tight">{{ Date() }}</h2>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <DataTable :value="sessions" tableStyle="min-width: 50rem">
                    <template #header>
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <span class="text-xl font-bold">Sessions</span>
                            <Button @click="createNewSession" label="New" icon="pi pi-plus" iconPos="right"
                                severity="secondary" />
                        </div>
                    </template>
                    <Column field="session_start" header="Session Start"></Column>
                    <Column field="session_end" header="Session End"></Column>
                    <Column header="Status">
                        <template #body="slotProps">
                            <Tag :severity="getSeverity(slotProps.data.open)" :value="slotProps.data.open"></Tag>
                        </template>
                    </Column>
                </DataTable>
            </div>
        </div>
    </CustomLayout>
</template>
