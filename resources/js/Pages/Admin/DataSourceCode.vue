<script setup>
import { Head } from '@inertiajs/vue3'
import Header from '../Layouts/Partials/Header.vue'
import Navbar from '../Layouts/Partials/Navbar.vue';
import Sidebar from '../Layouts/Partials/Sidebar.vue';
import Footer from '../Layouts/Partials/Footer.vue';
</script>

<template>
    <Head title="Data Source Code" />
    <Header />
    <Navbar @toggle-sidebar="toggleSidebar"/>
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <Sidebar :isOpen="isSidebarOpen"/>
        
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main> 
                <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-full mb-1">
                        <div class="mb-4">
                            <nav class="flex mb-5" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                                    <li class="inline-flex items-center">
                                        <a :href="dashboard" class="inline-flex items-center text-gray-700 hover:text-primary dark:text-gray-300 dark:hover:text-white">
                                        <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                                        Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                        <a :href="dataSourceCode" class="ml-1 text-gray-700 hover:text-primary md:ml-2 dark:text-gray-300 dark:hover:text-white">Data Source Code</a>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Data Source Code</h1>
                        </div>
                        <div class="items-center justify-between block sm:flex md:divide-x md:divide-gray-100 dark:divide-gray-700">
                            <div class="flex items-center mb-4 sm:mb-0">
                                <form class="sm:pr-3" action="#" method="GET">
                                    <label for="products-search" class="sr-only">Search</label>
                                    <div class="relative w-48 mt-1 sm:w-64 xl:w-96">
                                        <input type="text" name="email" id="products-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search for products">
                                    </div>
                                </form>
                                <div class="flex items-center w-full sm:justify-end">
                                    <div class="flex pl-2 space-x-1">
                                        <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                                        </a>
                                        <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                        </a>
                                        <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                        </a>
                                        <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-x-auto">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden shadow">
                                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                    <thead class="bg-gray-100 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col" class="p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-all" aria-describedby="checkbox-1" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary dark:focus:ring-primary dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-all" class="sr-only">checkbox</label>
                                                </div>
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Judul
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Bobot Nilai
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Status
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        <!-- {{< products.inline >}} -->
                                        <!-- {{- range (index $.Site.Data "products") }} -->
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700" v-for="item in items" :key="item.id">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-{{ .id }}" aria-describedby="checkbox-1" type="checkbox"
                                                        class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary dark:focus:ring-primary dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-{{ .id }}" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <div class="text-base font-semibold uppercase text-gray-900 dark:text-white">{{ item.pseudocode.judul }}</div>
                                                <div class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ item.level.nama }}</div>
                                            </td>
                                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ item.skor }} Poin</td>
                                            <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                                                <span v-if="item.status == 1" class="flex">
                                                    <svg class="w-6 h-6 mt-[6px] text-green-400 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="none" viewBox="0 0 48 48">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                    </svg>
                                                    Sudah Terisi
                                                </span>
                                                <span v-else class="flex">
                                                    <svg class="w-6 h-6 mt-[6px] text-red-800 dark:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="none" viewBox="0 0 48 48">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m6 6 12 12m3-6a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                    </svg>
                                                    Belum Terisi
                                                </span>
                                            </td>

                                            <td class="p-4 space-x-2 whitespace-nowrap">
                                                <button type="button" id="updateProductButton" :data-drawer-target="`drawer-update-${item.id}`" :data-drawer-show="`drawer-update-${item.id}`" :aria-controls="`drawer-update-${item.id}`" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary hover:bg-blue-600 focus:ring-4 focus:ring-blue-700 dark:bg-primary dark:hover:bg-blue-600 dark:focus:ring-blue-700" @click="fetchUrutData(item.id, item.id_pseudocode)">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                                    Update
                                                </button>
                                                <button type="button" id="deleteProductButton" data-drawer-target="drawer-delete-product-default" data-drawer-show="drawer-delete-product-default" aria-controls="drawer-delete-product-default" data-drawer-placement="right" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- {{ end -}}
                                        {{< /products.inline >}}                        -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-20</span> of <span class="font-semibold text-gray-900 dark:text-white">2290</span></span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <a href="#" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary hover:bg-blue-600 focus:ring-4 focus:ring-blue-700 dark:bg-primary dark:hover:bg-blue-600 dark:focus:ring-blue-700">
                            <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            Previous
                        </a>
                        <a href="#" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary hover:bg-blue-600 focus:ring-4 focus:ring-blue-700 dark:bg-primary dark:hover:bg-blue-600 dark:focus:ring-blue-700">
                            Next
                            <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Edit Product Drawer -->
                <div v-for="item in items" :key="item.id" :id="`drawer-update-${item.id}`" class="fixed top-0 right-0 z-[9999] w-full h-screen max-w-sm p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
                    <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Update Source Code</h5>
                    <button type="button" :data-drawer-dismiss="`drawer-update-${item.id}`" :aria-controls="`drawer-update-${item.id}`" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close menu</span>
                    </button>
                    <form action="#">
                        <div v-if="item.jenis_program == 0" class="space-y-4">
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">public class {{ item.pseudocode.judul }} {</p>
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white md:ml-6">public static void main(String[] args){</p>
                            <div v-if="item.pseudocode.variabel_1">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_1 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_1"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel1"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_2">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_2 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_2"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel2"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_3">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_3 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_3"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel3"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_4">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_4 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_4"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel4"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_5">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_5 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_5"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel5"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_6">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_6 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_6"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel6"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_7">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_7 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_7"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel7"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_8">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_8 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_8"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel8"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="urutResults.length">
                                <div v-for="(result, index) in urutResults" :key="index">
                                    <div v-for="number in angka" :key="number">
                                        <div v-if="result.pseudo[number] == null">
                                        </div>
                                        <div v-else>
                                            <label for="sourcecode" class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                {{ result.pseudo[number] }}
                                            </label>
                                            <input
                                                type="text"
                                                name="sourcecode"
                                                id="sourcecode"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                                :value="result.source[number]"
                                                placeholder="Masukkan Source Code"
                                                required
                                            />
                                            <input
                                                type="hidden"
                                                :name="`point_${number}`"
                                                id="point"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                                :value="5"
                                                placeholder="Masukkan Point"
                                                required
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white md:ml-6">}</p>
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">}</p>
                            <div>
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Output Program</label>
                                <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" :value="item.output" placeholder="Masukkan Output Program"></textarea>
                            </div>
                        </div>
                        <div v-else class="space-y-4">
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">public class {{ item.pseudocode.judul }} {</p>
                            <p class="block mb-2 text-sm font-medium md:ml-6 text-gray-900 dark:text-white">public static void main(String[] args){</p>
                            <p class="block mb-2 text-sm font-medium md:ml-12 text-gray-900 dark:text-white">Scanner input = new Scanner(System.in);</p>
                            <div v-if="item.pseudocode.variabel_1">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_1 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_1"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel1"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_2">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_2 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_2"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel2"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_3">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_3 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_3"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel3"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_4">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_4 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_4"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel4"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_5">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_5 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_5"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel5"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_6">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_6 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_6"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel6"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_7">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_7 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_7"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel7"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="item.pseudocode.variabel_8">
                                <label for="variabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Variabel {{ item.pseudocode.variabel_8 }}
                                </label>
                                <input
                                    type="text"
                                    name="title"
                                    id="variabel"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="item.variabel_8"
                                    placeholder="Masukkan Variabel"
                                    required
                                />
                                <input
                                    type="hidden"
                                    name="point_variabel8"
                                    id="point"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                    :value="5"
                                    placeholder="Masukkan Point"
                                    required
                                />
                            </div>
                            <div v-if="urutResults.length">
                                <div v-for="(result, index) in urutResults" :key="index">
                                    <div v-for="number in angka" :key="number">
                                        <div v-if="result.pseudo[number] == null && result.source[number] == null">
                                        </div>
                                        <div v-else>
                                            <label for="name" class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                {{ result.pseudo[number] }}
                                            </label>
                                            <input
                                                type="text"
                                                name="title"
                                                id="name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                                :value="result.source[number]"
                                                placeholder="Masukkan Source Code"
                                                required
                                            />
                                            <input
                                                type="hidden"
                                                :name="`point_${number}`"
                                                id="point"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-50 dark:focus:border-primary-500"
                                                :value="5"
                                                placeholder="Masukkan Point"
                                                required
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="block mb-2 text-sm font-medium md:ml-6 text-gray-900 dark:text-white">}</p>
                            <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">}</p>
                            <div>
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Output Program</label>
                                <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" :value="item.output" placeholder="Masukkan Output Program"></textarea>
                            </div>
                        </div>
                        <div class="bottom-0 left-0 flex justify-center w-full pb-4 mt-4 space-x-4 sm:px-4 sm:mt-4">
                            <button type="submit" class="w-full justify-center text-white rounded-lg border border-primary hover:bg-primary focus:ring-4 focus:ring-blue-700 dark:border-primary dark:hover:bg-primary dark:focus:ring-blue-700">
                                Update
                            </button>
                            <button type="button" class="w-full justify-center text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                <svg aria-hidden="true" class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                Delete
                            </button>
                        </div>
                    </form>
                </div>


                <!-- Delete Product Drawer -->
                <div id="drawer-delete-product-default" class="fixed top-0 right-0 z-40 w-full h-screen max-w-xs p-4 overflow-y-auto transition-transform translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
                    <h5 id="drawer-label" class="inline-flex items-center text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">Delete item</h5>
                    <button type="button" data-drawer-dismiss="drawer-delete-product-default" aria-controls="drawer-delete-product-default" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close menu</span>
                    </button>
                    <svg class="w-10 h-10 mt-8 mb-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="mb-6 text-lg text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                    <a href="#" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-900">
                        Yes, I'm sure
                    </a>
                    <a href="#" class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-sm px-3 py-2.5 text-center dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700" data-drawer-hide="drawer-delete-product-default">
                        No, cancel
                    </a>
                </div>
            </main>
            <Footer />
        </div>
    </div>
</template>

<script>
import axios from "axios";
    export default {
        data() {
            return {
                isSidebarOpen: false,
                dashboard: '/dashboard',
                dataSourceCode: '/data-source-code',
                items: [],
                urutResults: [],
                angka: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '93', '94', '95', '96', '97', '98', '99', '100'],
            };
        },
        async mounted() {
            import("../src/chart.js").then(() => {
            });
            await this.fetchData();
            
        },
        methods: {
            toggleSidebar() {
            this.isSidebarOpen = !this.isSidebarOpen;
            },

            async fetchData() {
                try {
                    const response = await axios.get('get-data-sourcecode');
                    this.items = response.data;
                } catch (error) {
                    console.error("Error fetching data:", error);
                }
            },

            fetchUrutData(id, urutKey) {
                const results = this.getUrut(id, urutKey);
                this.urutResults = results;
            },

            getUrut(id, urutKey) {
                try {
                    const abjad = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

                    const item = this.items.find(item => item.id == id);
                    const item2 = this.items.find(item => item.id_pseudocode == urutKey);
                    let results1 = [];
                    let results2 = [];
                    let results = [];
                    
                    let count = 1;
                    abjad.forEach(letter => {
                        const key = `urut_${letter}`;
                        const urut = item2.pseudocode ? item2.pseudocode[key] : '';
                        if (urut) {
                            const pcKey = `pc_${urut}`;
                            const value = item2.pseudocode[pcKey];

                            if (value != null && value !== 'START' && value !== 'END') {
                                results1.push(value);
                            }
                        }
                    });

                    let urut2 = '';
                    abjad.forEach(letter => {
                        const key = `sourcecode_${letter}`;
                        urut2 = item ? item[key] : '';
                        if (urut2 == null) {
                            
                        } else {
                            results2.push(urut2);
                        }
                    });
                    results.push({
                        pseudo: results1,
                        source: results2
                    });
                    
                    return results;
                } catch (error) {
                    console.log("Error fetching data:", error);
                }
            },
        },
    }
</script>