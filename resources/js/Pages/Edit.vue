<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";
import { defineProps } from "vue";
import { Link, useForm } from "@inertiajs/vue3";

const props = defineProps({
    post: Object,  // Alterado de Array para Object
});

const form = useForm({
    title: props.post.title,
    content: props.post.content,
});
</script>

<template>
    <AppLayout title="Novo Post">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Editar Post
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3"
                >
                    <form @submit.prevent="form.put(route('dashboard.update', {id: props.post.id}))">
                        <div class="mb-6">
                            <label
                                for="title"
                                class="block mb-2 text-sm font-medium text-gray-900"
                                >Título</label
                            >
                            <input
                                type="text"
                                id="title"
                                v-model="form.title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required
                            />
                        </div>
                        <div class="mb-6">
                            <label
                                for="content"
                                class="block mb-2 text-sm font-medium text-gray-900"
                                >Conteúdo</label
                            >
                            <textarea
                                id="content"
                                v-model="form.content"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                required
                            />
                        </div>
                        <button
                            class="bg-blue-500 py-2 px-3 rounded-md shadow-sm hover:bg-blue-700 text-white font-bold mt-5"
                        >
                            Editar postagem
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

