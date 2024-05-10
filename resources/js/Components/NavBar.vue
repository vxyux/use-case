<template>
  <div>
    <nav class="hidden md:flex flex-row px-12 bg-gray-100 rounded-xl">
      <ul class="flex flex-wrap items-center font-medium text-md py-2">
        <div class="w-max">
          <Link :href="route('index')">
            <ApplicationLogo class="block h-8 w-auto fill-current text-gray-800" />
          </Link>
        </div>
        <li
          class="p-4 lg:px-8 relative flex items-center space-x-1"
          @mouseover="onHover"
          @mouseleave="leaveHover"
        >
          <p class="text-slate-800 hover:text-slate-900">Products</p>
          <button class="shrink-0 p-1">
            <svg
              class="w-3 h-3 fill-slate-500"
              xmlns="http://www.w3.org/2000/svg"
              width="12"
              height="12"
            >
              <path d="M10 2.586 11.414 4 6 9.414.586 4 2 2.586l4 4z" />
            </svg>
          </button>
          <!-- 2nd level menu -->
          <Transition name="slide-fade" mode="in-out">
            <ul
              v-if="hover"
              class="z-50 origin-top absolute top-full min-w-[240px] left-[-20%] bg-white border border-slate-200 p-2 rounded-lg shadow-xl"
            >
              <li>
                <a
                  class="text-slate-800 hover:bg-slate-50 flex items-center p-2"
                  :href="route('products.index')"
                >
                  <span class="whitespace-nowrap">All products</span>
                </a>
              </li>
              <p class="text-gray-500 px-2 pt-4 pb-2">Categories</p>
              <li v-for="category in categories">
                <a
                  class="text-slate-800 hover:bg-slate-50 flex items-center p-2"
                  :href="route('products.filter', category.id)"
                >
                  <span class="whitespace-nowrap">{{ category.title }}</span>
                </a>
              </li>
            </ul>
          </Transition>
        </li>
        <li class="p-4 lg:px-8">
          <a class="text-slate-800 hover:text-black" :href="route('pricing')"
            >useCase Pro</a
          >
        </li>
        <li class="p-4 lg:px-8">
          <a class="text-slate-800 hover:text-black" :href="route('about')">About</a>
        </li>
      </ul>

      <ul class="flex flex-wrap items-center mr-0 ml-auto font-medium text-sm py-2">
        <li class="p-4 lg:px-8">
          <a class="text-slate-800 hover:text-black" :href="route('dashboard')">Login</a>
        </li>
        <li class="p-4 lg:px-8">
          <a class="text-white" :href="route('register')"
            ><button
              class="bg-green-400 rounded-full hover:bg-green-500 px-6 py-3 hover:scale-105 transition-all duration-200"
            >
              Register
            </button></a
          >
        </li>
      </ul>
    </nav>

    <nav class="block md:hidden px-12 bg-gray-100 rounded-xl">
      <div class="flex items-center justify-center">
        <ul class="items-center font-medium text-sm py-2">
          <Link :href="route('index')">
            <ApplicationLogo class="block h-8 w-auto fill-current text-gray-800" />
          </Link>
        </ul>
      </div>
    </nav>
  </div>
</template>

<script setup lang="ts">
import { Link, usePage } from "@inertiajs/vue3";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import NavLink from "@/Components/NavLink.vue";
import { ref, onMounted } from "vue";
import axios from "axios";

const hover = ref(false);

const categories = ref([]);

const fetchCategories = () => {
  axios
    .get("/api/categories")
    .then((response) => {
      categories.value = response.data;
      console.log(categories.value); // Move the console.log here
    })
    .catch((error) => console.log(error));
};

onMounted(() => {
  fetchCategories();
});

const onHover = () => {
  hover.value = true;
};

const leaveHover = () => {
  hover.value = false;
};
</script>

<style scoped>
.slide-fade-enter-active {
  transition: all 0.2s ease-out;
}

.slide-fade-leave-active {
  transition: all 0.2s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
  transform: translateY(-10px);
  opacity: 0;
}
</style>
