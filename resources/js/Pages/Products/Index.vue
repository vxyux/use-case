<template>
  <Head title="Profile" />

  <DefaultLayout>
    <template #header>
      <h2 v-if="category" class="font-semibold text-xl text-gray-800 leading-tight">
        {{ category }}
      </h2>
      <h2 v-else class="font-semibold text-xl text-gray-800 leading-tight">Products</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
          <div class="grid grid-cols-3 gap-6 place-items-center w-full">
            <ProductCard
              v-for="product in products"
              :src="'/placeholders/' + product['image']"
              :name="product['title']"
              :price="product['price']"
              :category="product.category['title']"
              :id="product['id']"
              :rating="product.avg_rating[0]['aggregate']"
            >
            </ProductCard>
          </div>
        </div>
      </div>
    </div>
  </DefaultLayout>
</template>

<script setup lang="ts">
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import ProductCard from "@/Components/Product/ProductCard.vue";
import { Head } from "@inertiajs/vue3";

interface Product {
  title: string;
  price: string;
  stock: number;
  description: string;
  category_id: number;
  category: Array<string>;
  avg_rating: string;
}

defineProps({
  products: {
    type: Array<Product>,
  },
  category: {
    type: String
  }
});
</script>

<style scoped></style>
