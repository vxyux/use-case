<template>
  <Head title="Cart" />

  <DefaultLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Cart</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
          <div class="grid grid-cols-3 gap-6">
            {{ cart }}
          </div>
        </div>
      </div>
    </div>
  </DefaultLayout>
</template>

<script setup lang="ts">
import DefaultLayout from '@/Layouts/DefaultLayout.vue';

interface Cart {
  product_id: number,
  amount: number,
}

defineProps({
  cart: {
    type: Array<Cart>,
  },
});
</script>

<style scoped></style>
