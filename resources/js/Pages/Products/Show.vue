<template>
  <Head :title="product['title']" />

  <DefaultLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ product["title"] }}
      </h2>
      <div class="flex items-center mt-2.5 mb-5">
        <div class="flex items-center space-x-1 rtl:space-x-reverse">
          <svg
            v-for="index in starRating"
            class="w-4 h-4 text-yellow-300"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 22 20"
          >
            <path
              d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
            />
          </svg>
        </div>
        <span
          class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3"
          >{{ product.avg_rating[0]["aggregate"] }}</span
        >
      </div>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
          <div class="flex flex-row">
            <div>
              <img :src="'/placeholders/' + product['image']" alt="" />
              <figcaption
                class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400"
              >
                An image of {{ product["title"] }}
              </figcaption>
            </div>
          </div>
        </div>
      </div>
    </div>
  </DefaultLayout>
</template>

<script setup lang="ts">
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import { Head } from "@inertiajs/vue3";
import { computed } from "vue";

interface Product {
  title: string;
  price: string;
  stock: number;
  description: string;
  category_id: number;
  category: Array<string>;
  avg_rating: string;
}

const props = defineProps({
  product: {
    type: Object as () => Product,
  },
});

const starRating = computed(() => {
  if (!props.product) return 0;
  let number = parseFloat(props.product.avg_rating[0]["aggregate"]);
  return Math.round(number);
});

console.log(starRating.value);
</script>

<style scoped></style>
