<script setup>
    import Stylesheet from './Stylesheet.vue';
    import Favicons from './Favicons.vue';
    import Social from './Social.vue';
</script>

<template>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ .Page.Params.description | default .Site.Params.description | markdownify }}">
    <meta name="author" content="{{ .Site.Params.authors }}">
    <meta name="generator" content="Hugo {{ hugo.Version }}">

    <link rel="canonical" href="{{ .Permalink }}">

    <Stylesheet />
    <Favicons />
    <Social />

</template>

<script>
    export default {
        name: "Header",
    }

    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }

    
</script>