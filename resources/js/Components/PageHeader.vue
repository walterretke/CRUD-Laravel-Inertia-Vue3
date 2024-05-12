<script setup>

const props = defineProps({
    PageTitle: String
})

</script>

<template>
    <div class="inline-block w-full py-4 px-3 rounded-ll">
        <h1> {{ props.PageTitle }}</h1>
    </div>
</template>