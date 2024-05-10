<template>
  <div>
    <div
      class="flex flex-col p-6 mx-auto max-w-lg text-left text-gray-900 rounded-xl border border-gray-100 shadow hover:scale-[105%] hover:bg-white transition-all"
      :class="[
        componentKey != 1 ? 'bg-slate-50' : 'bg-white',
        componentKey == 1 ? 'gradientPlus' : '',
        componentKey == 2 ? 'gradientPro' : '',
      ]"
    >
      <h3 class="mb-4 text-2xl font-semibold">{{ props.name }}</h3>
      <p class="font-semibold text-gray-600 sm:text-lg">
        {{ props.desc }}
      </p>
      <div class="flex items-baseline my-8">
        <span class="mr-2 text-5xl font-extrabold">€{{ props.price }}</span>
        <span v-if="props.price != 0" class="text-gray-500 dark:text-gray-400"
          >per user/month</span
        >
      </div>
      <!-- List -->
      <ul role="list" class="mb-8 space-y-4 text-left">
        <li v-for="feature in props.features" class="flex items-center space-x-3">
          <!-- Icon -->
          <svg
            class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
              clip-rule="evenodd"
            ></path>
          </svg>
          <span>{{ feature }}</span>
        </li>
      </ul>
      <a
        v-if="props.price != 0"
        href="#"
        class="text-white font-bold bg-black rounded-xl py-4 bg-primary-600 hover:bg-primary-700 text-center"
        >Get {{ props.name }}</a
      >
      <a
        v-else
        href="#"
        class="text-white font-bold bg-black rounded-xl py-4 bg-primary-600 hover:bg-primary-700 text-center"
        >Get started</a
      >
    </div>
  </div>
</template>

<script setup lang="ts">
import { getCurrentInstance } from "vue";

interface Props {
  name: string;
  desc: string;
  price: number;
  features: string[];
}

const componentKey = getCurrentInstance().vnode.key;

const props = withDefaults(defineProps<Props>(), {
  name: "Subscription",
  desc: "To support indie-developers",
  price: 0,
});
</script>

<style scoped>
.gradientPlus {
  box-shadow: 0 0 0.75rem rgba(0, 255, 76, 0.785);
}

.gradientPro {
  box-shadow: 0 0 0.75rem rgba(0, 149, 255, 0.785);
}
</style>
