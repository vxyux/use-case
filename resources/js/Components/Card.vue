<template>
  <div
    class="relative mb-4 overflow-hidden min-h-96 max-w-sm p-6 bg-white border-gray-300 border-2 rounded-2xl shadow"
  >
    <h5 class="mb-2 text-2xl xl:text-3xl font-bold tracking-tight text-gray-900">
      {{ props.title }}
    </h5>
    <p class="font-normal text-gray-700 dark:text-gray-400 mb-10">
      {{ props.desc }}
    </p>
    <slot></slot>
  </div>
</template>

<script setup lang="ts">
interface Props {
  title: string;
  desc?: string;
}

const props = withDefaults(defineProps<Props>(), {
  title: "Title",
});
</script>

<style scoped></style>
