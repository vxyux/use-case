<template>
  <a
    :href="props.href"
    class="inline-flex font-medium items-center justify-center w-full gap-1 px-6 py-3 mb-2 text-lg bg-gray-100 hover:bg-gray-200 transition-all rounded-2xl sm:w-auto sm:mb-0"
  >
    <slot />
  </a>
</template>

<script setup lang="ts">
interface Props {
  href: String;
}

const props = withDefaults(defineProps<Props>(), {
  href: "#_",
});
</script>
