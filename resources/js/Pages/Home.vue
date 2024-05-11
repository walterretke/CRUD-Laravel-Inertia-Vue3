<template>
    <div>
     <div className="px-4 sm:px-6 lg:px-8 w-full">
      <div className="sm:flex sm:items-center">
        <div className="flex w-full items-center justify-between py-4">
          <h1 className="text-xl font-semibold leading-6 text-gray-900">Postagens</h1>
          <LayoutMenuVue/>
        </div>
        <hr />
        <!-- links -->

        <!-- <div className="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
          <button
            type="button"
            className="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
          >
            Add user
          </button>
        </div> -->
      </div>
      <div className="mt-8 flow-root border border-gray-200 p-4 rounded-xl shadow-md">
        <div className="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div className="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <table className="min-w-full divide-y divide-gray-300">
              <thead>
                <tr>
                  <th scope="col" className="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                    Id
                  </th>
                  <th scope="col" className="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                    Título
                  </th>
                  <th scope="col" className="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                    Conteúdo
                  </th>
                  <th scope="col" className="relative py-3.5 pl-3 pr-4 sm:pr-0">
                    <span className="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody className="divide-y divide-gray-200">
                  <tr v-for="post in posts" :key="post.id">
                    <td className="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                      {{ post.id }}
                    </td>
                    <td className="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ post.title }}</td>
                    <td className="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ post.content }}</td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import LayoutMenuVue from '@/Layouts/LayoutMenu.vue';

const props = defineProps({
    posts: Array
})
</script>
