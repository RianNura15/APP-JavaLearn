<script setup>
import { Head } from '@inertiajs/vue3'
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
                    <div class="w-full mb-8 relative">
                        <label for="password" class="block text-white font-mono mb-1">Password:</label>
                        <input :type="passwordVisible ? 'text' : 'password'" id="password" v-model="password" class="w-full font-mono py-2 px-3 rounded-lg bg-transparent border-b-2 outline-none hover:outline-primary text-primary">
                        <span @click="togglePasswordVisibility" class="absolute right-2 top-[38px] cursor-pointer">
                            <svg v-if="passwordVisible" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-.342 1.104-.824 2.138-1.426 3.08M15.18 15.18A9.888 9.888 0 0112 17c-2.964 0-5.64-1.352-7.38-3.515M8.82 8.82A9.888 9.888 0 0112 7c2.964 0 5.64 1.352 7.38 3.515" />
                            </svg>
                            <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18M9.879 9.879A3 3 0 0112 9c1.657 0 3 1.343 3 3a2.993 2.993 0 01-.879 2.121M9.879 14.121A3 3 0 0112 15c1.657 0 3-1.343 3-3m4.242 2.879C18.25 16.597 15.25 19 12 19c-4.478 0-8.268-2.943-9.542-7a9.958 9.958 0 013.364-4.91" />
                            </svg>
                        </span>
                    </div>
                    <button type="submit" class="bg-primary text-white font-mono font-semibold py-3 rounded-lg w-full mb-6 hover:bg-white hover:text-primary hover:shadow-md hover:shadow-primary">Login</button>
                    <p class="font-mono text-white text-[14px]">Belum memiliki akun? <a :href="routeRegis" class="hover:text-primary hover:underline">Registrasi</a></p>
                </form>
            </div>
            <div class="bg-gray-900 opacity-30 w-full h-[700px] relative -z-10"></div>
            <img :src="'/Images/nasa.jpg'" alt="NASA Image" class="w-full h-[700px] relative -mt-[700px] -z-20">
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                text: '',
                email: '',
                password: '',
                passwordVisible: false,
                routeRegis: '/registrasi'
            };
        },
        methods: {
            togglePasswordVisibility() {
                this.passwordVisible = !this.passwordVisible;
            },
            submitForm() {
            // Handle form submission logic here
            },
        },
    }
</script>