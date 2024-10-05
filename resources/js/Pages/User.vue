<script setup>
import { Head } from '@inertiajs/vue3'

defineProps({ user: Object })
</script>

<template>
    <Head title="Coba" />
    <h1 class="text-red-500">Welcome</h1>
    <p class="text-blue-500">Hello {{ user }}, welcome to your first Inertia app!</p>
</template>