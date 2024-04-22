<template>
  <div class="w-full max-w-sm bg-slate-100 border border-gray-200 rounded-lg shadow">
    <a :href="route('products.show', props.id)">
      <img class="block h-52 w-auto m-auto mb-4" :src="props.src" alt="Product image" />
    </a>
    <div class="px-5 pb-5">
      <a :href="route('products.show', props.id)">
        <h5 class="text-xl font-semibold tracking-tight text-gray-900">
          {{ props.name }}
        </h5>
        <h5 class="text-md font-semibold tracking-tight text-gray-500">
          {{ props.category }}
        </h5>
      </a>
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
          >{{ props.rating }}</span
        >
      </div>
      <div class="flex flex-col items-center lg:flex-row justify-between">
        <span class="text-3xl font-bold text-gray-900">€{{ props.price }}</span>
        <a
          :href="'/product/' + props.id"
          class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
          >Add to cart</a
        >
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { computed } from "vue";

interface Props {
  src: string;
  name: string;
  category: string;
  price: string;
  id: number;
  rating: string;
}

const props = withDefaults(defineProps<Props>(), {
  src: "/images/placeholder.png",
  name: "Product",
  category: "Category",
  price: "0",
  id: 0,
  rating: "5",
});

const starRating = computed(() => {
  let number = parseFloat(props.rating);
  return Math.round(number);
});
</script>

<style scoped></style>
