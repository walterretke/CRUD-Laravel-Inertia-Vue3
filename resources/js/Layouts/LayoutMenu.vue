<template>
    <div class="flex sticky justify-between py-5 w-full border-b border-gray-300">
        <div class="text-xl font-semibold leading-6 text-gray-900">
            <h1>Post+</h1>
        </div>
                
        <div class="flex justify-left gap-4">
          <Link :href="route('home')" :class="{ 'font-bold': $page.url === '/home' }">Home</Link>
          <Link :href="route('about')" :class="{ 'font-bold': $page.url === '/about' }">Sobre</Link>
        </div>
    </div>
  </template>
  
  <script setup>
    import { Link } from '@inertiajs/vue3';

  </script>
  