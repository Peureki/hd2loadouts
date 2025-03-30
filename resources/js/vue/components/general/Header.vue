<template>
    <header><h1>{{ title }}</h1></header>
</template>

<script setup>

const props = defineProps({
    title: String,
})

</script>