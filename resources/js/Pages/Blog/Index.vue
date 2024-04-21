<template>
  <Head title="Profile" />

  <DefaultLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Blog</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 h-screen">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
          <h1 class="text-2xl">Coming Soon</h1>
        </div>
      </div>
    </div>
  </DefaultLayout>
</template>

<script setup lang="ts">
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<style scoped></style>
