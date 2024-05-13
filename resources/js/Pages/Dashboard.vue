<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';


const props = defineProps({
    posts: Array
})


</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Últimas postagens
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- <Welcome /> -->
                    <!-- Tabela -->
                    <div class="px-4 sm:px-6 lg:px-8 w-full">
      <div class="sm:flex sm:items-center">
        
        <div class="flex w-full items-center justify-between">
          <LayoutMenu :header="'Post+'"/>
          <Link :href="route('dashboard.create')">
            <button class="bg-blue-500 py-2 px-3 rounded-md shadow-sm hover:bg-blue-700 text-white font-bold mt-5">
                  Criar postagem
              </button>
        </Link>
        </div>
        <hr />
        <!-- links -->

        <!-- <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
          <button
            type="button"
            class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
          >
            Add user
          </button>
        </div> -->
      </div>
      <PageHeader :PageTitle="'Últimas postagens'" />
      <div class="mt-8 flow-root border border-gray-200 p-4 rounded-xl shadow-md">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <table class="min-w-full divide-y divide-gray-300">
              <thead>
                <tr>
                  <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                    Id
                  </th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                    Título
                  </th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                    Conteúdo
                  </th>
                  <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
                  <tr v-for="post in posts" :key="post.id">
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                      {{ post.id }}
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ post.title }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ post.content }}</td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
                    <!-- Fim Tabela -->
                </div>
            </div>
        </div>
    </AppLayout>
</template>
