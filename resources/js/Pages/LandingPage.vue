<script setup>
import { Head } from '@inertiajs/vue3'
import nasaImage from '../Images/nasa.jpg';
import codeImage from '../Images/code.png';
</script>

<template>
    <Head title="Welcome" />
    <header class="bg-white bg-opacity-60 backdrop-blur-sm shadow-md inset-x-0 top-10 mr-[22px] ml-[22px] rounded-[30px] flex items-center z-[9999] fixed
    lg:mx-[100px]">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4 ml-[20px]">
                    <a href="" class="font-mono font-bold text-lg text-primary block py-6">JavaLearn</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white bg-opacity-95 backdrop-blur-3xl shadow-lg rounded-lg max-w-[500px] w-full right-0 top-20 lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none lg:bg-opacity-0 lg:backdrop-blur-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#skills"
                                    class="nav-link text-base font-mono font-semibold text-dark py-3.5 flex mb-2 relative
                                    lg:mx-8 lg:mb-0 lg:py-2
                                    group-hover:text-primary">
                                    <span class="
                                    absolute right-0 inset-y-0
                                    lg:relative lg:mx-0
                                    mx-8">Registrasi</span>
                                </a>
                            </li>
                            <li class="group">
                                <span class="text-base font-mono font-semibold text-dark mt-2 flex">|</span>
                            </li>
                            <li class="group">
                                <a href="#portofolio"
                                    class="nav-link text-base font-mono font-semibold text-dark py-3.5 flex mb-2 relative
                                    lg:mx-8 lg:mb-0 lg:py-2
                                    group-hover:text-primary">
                                    <span class="
                                    absolute right-0 inset-y-0
                                    lg:relative lg:mx-0
                                    mx-8">Login</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="top-0">
                <div class="flex flex-wrap">
                    <div class="absolute font-mono text-white mt-[230px] ml-[100px]">
                        <h1 class="font-semibold text-[56px]">Selamat Datang</h1>
                        <p class="font-light">di <span class="font-semibold text-[26px]">Aplikasi JavaLearn</span></p>
                        <p class="font-light text-[14px] mt-3">Aplikasi untuk tes bahasa pemrograman java dengan level pemula hingga menengah</p>
                    </div>
                    <div class="absolute  mt-[100px] ml-[700px]">
                        <img :src="codeImage" alt="Code Image" class="w-[520px] h-[480px]">
                    </div>
                </div>
                <div class="bg-gray-900 opacity-30 w-full h-[700px] relative -z-10"></div>
                <img :src="nasaImage" alt="NASA Image" class="w-full h-[700px] relative -mt-[700px] -z-20">
            </div>
        </div>
    </section>
</template>