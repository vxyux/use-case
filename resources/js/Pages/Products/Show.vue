<template>
  <Head :title="product['title']" />

  <DefaultLayout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
          <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ product["title"] }}
          </h2>
          <div class="flex items-center mt-2.5 mb-5">
            <div class="flex items-center space-x-1 rtl:space-x-reverse">
              <svg
                v-for="index in starRating"
                class="w-6 h-6 text-yellow-300"
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
              class="bg-blue-100 text-blue-800 text-sm font-semibold px-2.5 py-0.5 rounded ms-3"
              >{{ rating }}</span
            >
          </div>

          <div class="flex flex-row gap-6">
            <div>
              <img :src="'/placeholders/' + product['image']" alt="" />
              <figcaption
                class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400"
              >
                An image of {{ product["title"] }}
              </figcaption>
            </div>
            <div class="w-1/2">
              <h1 class="text-5xl font-black text-red-500 mb-6">
                €{{ product["price"] }}
              </h1>
              <h4 class="text-black font-semibold">
                Price includes VAT (€{{ priceVat }})
              </h4>
              <Option />
              <form @submit.prevent="submit">
                <PrimaryButton class="bg-green-400 hover:bg-green-500 text-black">
                  Add to cart
                  <svg
                    class="ml-2"
                    width="20px"
                    height="20px"
                    stroke-width="2.6"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    color="#000000"
                  >
                    <path
                      d="M19.5 22C20.3284 22 21 21.3284 21 20.5C21 19.6716 20.3284 19 19.5 19C18.6716 19 18 19.6716 18 20.5C18 21.3284 18.6716 22 19.5 22Z"
                      fill="#000000"
                      stroke="#000000"
                      stroke-width="2.6"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                    <path
                      d="M9.5 22C10.3284 22 11 21.3284 11 20.5C11 19.6716 10.3284 19 9.5 19C8.67157 19 8 19.6716 8 20.5C8 21.3284 8.67157 22 9.5 22Z"
                      fill="#000000"
                      stroke="#000000"
                      stroke-width="2.6"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                    <path
                      d="M5 4H22L20 15H7L5 4ZM5 4C4.83333 3.33333 4 2 2 2"
                      stroke="#000000"
                      stroke-width="2.6"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                    <path
                      d="M20 15H7H5.23077C3.44646 15 2.5 15.7812 2.5 17C2.5 18.2188 3.44646 19 5.23077 19H19.5"
                      stroke="#000000"
                      stroke-width="2.6"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </svg>
                </PrimaryButton>
              </form>
              <ul class="mb-4 mt-4 list-disc px-4 text-black">
                <li v-for="list in lists">{{ list }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </DefaultLayout>
</template>

<script setup lang="ts">
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { Head } from "@inertiajs/vue3";
import { computed } from "vue";
import { useForm, Link } from "@inertiajs/vue3";
import Option from "./Option.vue";

interface Product {
  id: number;
  title: string;
  price: string;
  stock: number;
  description: string;
  category_id: number;
  category: Array<string>;
  avg_rating: string;
}

const lists = ["Free delivery", "Return available", "2 year warranty"];

const props = defineProps({
  product: {
    type: Object as () => Product,
  },
  rating: {
    type: String,
  },
});

const starRating = computed(() => {
  if (!props.rating) return 0;
  let number = parseFloat(props.rating);
  return Math.round(number);
});

const priceVat = computed(() => {
  let price = props.product.price;
  return Math.round(Number(price) * 0.21).toFixed(2);
});

const form = useForm({
  id: props.product.id,
});

const submit = () => {
  form.post("/cart");
};
</script>

<style scoped></style>
