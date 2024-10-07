<script setup>
import { Head } from '@inertiajs/vue3'

defineProps({ user: Object })
</script>

<template>
    <Head title="Detail" />
    <h1>Detail</h1>
    <p>Hello {{ user }}, welcome to your first Inertia app!</p>
</template>