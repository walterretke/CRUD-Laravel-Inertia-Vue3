<script setup>
import LayoutMenu from '@/Layouts/LayoutMenu.vue';
import PageHeader from '@/Components/PageHeader.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    name: String,
    curso: String
})

</script>

<template>
    <Head title="Sobre" />
    <div class="px-4 sm:px-6 lg:px-8 w-full">
        <LayoutMenu/>
        <PageHeader :PageTitle="'Sobre'" />
        <h1>Olá {{ name }} !</h1>
        <p>Este e seu curso de  {{ curso }}</p>
    </div>
</template>
