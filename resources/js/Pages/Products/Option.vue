<template>
  <div class="mb-6">
    <h3 class="mb-2 font-semibold text-gray-900">State</h3>
    <ul
      class="items-center w-full text-sm font-medium text-black bg-gray-100 border border-gray-200 rounded-lg sm:flex"
    >
      <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r">
        <div class="flex items-center ps-3">
          <input
            id="vue-checkbox-list"
            type="checkbox"
            value=""
            class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 rounded focus:ring-blue-500"
          />
          <label
            for="vue-checkbox-list"
            class="w-full py-3 ms-2 text-sm font-medium text-black"
            >Used</label
          >
        </div>
      </li>
      <li class="w-full dark:border-gray-600">
        <div class="flex items-center ps-3">
          <input
            id="laravel-checkbox-list"
            type="checkbox"
            value=""
            class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 rounded focus:ring-blue-500"
          />
          <label
            for="laravel-checkbox-list"
            class="w-full py-3 ms-2 text-sm font-medium text-black"
            >Brand new</label
          >
        </div>
      </li>
    </ul>
  </div>
</template>

<script setup lang="ts"></script>

<style scoped></style>
