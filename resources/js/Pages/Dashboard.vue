<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";
import { defineProps } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    posts: Array,
});

const destroy = (id) => {
  if(confirm('Tem certeza que deseja excluir?')) {
    Inertia.delete(route('dashboard.destroy', id))
  }

  return {
    destroy
  }
}

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Últimas postagens
                </h2>
                <Link :href="route('dashboard.create')">
                    <button
                        class="bg-blue-500 py-2 px-3 rounded-md shadow-sm hover:bg-blue-700 text-white font-bold mt-5"
                    >
                        Criar postagem
                    </button>

                    <div v-if="$page.props.flash.message" class="text-sm text-blue-600">
                      {{ $page.props }}
                    </div>
                </Link>
            </div>
        </template>

        <div
            v-for="post in posts"
            :key="post.id"
            class="bg-white rounded-md shadow-xl max-w-7xl mx-auto mt-4 p-5 flex gap-4"
        >
            <div class="flex-none">
                <h1 class="text-gray-600 text-sm italic break-words">
                    {{ post.title }}
                </h1>
                <p class="text-sm text-gray-400">{{ post.created_at }}</p>
            </div>
            <div class="flex-grow max-w-full break-words">
                <p>{{ post.content }}</p>
            </div>
            <div class="flex flex-col items-end justify-between">
                <Link :href="route('dashboard.edit', { id: post.id })" class="text-blue-500 hover:underline mb-2">
                    Editar
                </Link>
                <Link 
                @click="detroy(post.id)"
                class="text-red-700 hover:underline"
                >
                    Apagar
                </Link>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
/* Adicione quaisquer estilos adicionais aqui, se necessário */
</style>
