<script setup>

const props = defineProps({
    name: String,
    curso: String
})

</script>

<template>
    <div>
        <h1>Olá {{ name }} !</h1>
        <p>Este e seu curso de  {{ curso }}</p>
    </div>
</template>
