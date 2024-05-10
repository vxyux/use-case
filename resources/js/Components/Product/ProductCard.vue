<template>
  <div class="w-full bg-white border border-gray-200 rounded-2xl shadow">
    <a :href="route('products.show', props.id)" class="mb-0">
      <img class="block h-52 w-auto m-auto" :src="props.src" alt="Product image" />
      <hr class="mb-2" />
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
          class="bg-[#FDEA8A] text-gray-900 text-xs font-semibold px-2.5 py-0.5 rounded ms-3"
          >{{ props.rating }}</span
        >
      </div>
      <div class="flex flex-col items-center lg:flex-row justify-between">
        <span class="text-3xl font-bold text-gray-900">€{{ props.price }}</span>
        <a
          :href="'/product/' + props.id"
          class="text-white flex-row flex gap-2 bg-green-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2.5 text-center"
        >
          <svg
            width="20px"
            height="20px"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            color="#fff"
            stroke-width="2.6"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM7.53044 11.9697C7.23755 11.6768 6.76268 11.6768 6.46978 11.9697C6.17689 12.2626 6.17689 12.7374 6.46978 13.0303L9.46978 16.0303C9.76268 16.3232 10.2376 16.3232 10.5304 16.0303L17.5304 9.03033C17.8233 8.73744 17.8233 8.26256 17.5304 7.96967C17.2375 7.67678 16.7627 7.67678 16.4698 7.96967L10.0001 14.4393L7.53044 11.9697Z"
              fill="#fff"
            ></path></svg
          >Add</a
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
