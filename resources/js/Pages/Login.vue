<script setup>
import { Head } from '@inertiajs/vue3'
import nasaImage from '../Images/nasa.jpg';
</script>

<template>
    <Head title="Login" />
    <div class="container">
        <div class="justify-center items-center">
            <div class="justify-center items-center absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <form @submit.prevent="submitForm" class="flex flex-col justify-center items-center bg-white bg-opacity-30 backdrop-blur-sm shadow-lg shadow-primary px-10 py-6 pb-9 rounded-xl w-[420px]">
                    <p class="font-mono text-white font-bold text-2xl mb-6">Login</p>
                    <p class="font-mono text-white text-[14px] mb-6">Masukkan Email dan Password dengan Benar!</p>
                    <div class="w-full mb-4">
                        <label for="email" class="block text-white font-mono mb-1">Email:</label>
                        <input type="email" id="email" v-model="email" class="w-full font-mono py-2 px-3 rounded-lg bg-transparent border-b-2 outline-none hover:outline-primary text-primary">
                    </div>
                    <div class="w-full mb-8">
                        <label for="password" class="block text-white font-mono mb-1">Password:</label>
                        <input type="password" id="password" v-model="password" class="w-full font-mono py-2 px-3 rounded-lg bg-transparent border-b-2 outline-none hover:outline-primary text-primary">
                    </div>
                    <button type="submit" class="bg-primary text-white font-mono font-semibold py-3 rounded-lg w-full mb-6 hover:bg-white hover:text-primary hover:shadow-md hover:shadow-primary">Login</button>
                    <p class="font-mono text-white text-[14px]">Belum memiliki akun? <a :href="routeRegis" class="hover:text-primary hover:underline">Registrasi</a></p>
                </form>
            </div>
            <div class="bg-gray-900 opacity-30 w-full h-[700px] relative -z-10"></div>
            <img :src="nasaImage" alt="NASA Image" class="w-full h-[700px] relative -mt-[700px] -z-20">
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                routeRegis: '/registrasi'
            };
        }
    }
</script>