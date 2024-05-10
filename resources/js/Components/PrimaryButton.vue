<template>
  <a
    v-if="props.href"
    :href="props.href"
    class="inline-flex text-white font-medium items-center justify-center w-full gap-1 px-6 py-3 mb-2 text-lg transition-all rounded-2xl sm:w-auto sm:mb-0"
  >
    <slot />
  </a>
  <button
    class="inline-flex text-white font-medium items-center justify-center w-full gap-1 px-6 py-3 mb-2 text-lg transition-all rounded-2xl sm:w-auto sm:mb-0"
    v-else
    type="submit"
  >
    <slot />
  </button>
</template>

<script setup lang="ts">
interface Props {
  href?: string;
}

const props = defineProps<Props>();
</script>
