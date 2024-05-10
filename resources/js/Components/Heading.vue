<template>
  <div>
    <section class="py-16">
      <div class="mx-auto max-w-2xl px-4 text-center sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="flex flex-col gap-4 sm:gap-6">
          <h1
            class="text-4xl text-black uppercase font-medium tracking-tighter sm:text-5xl lg:text-6xl"
          >
            {{ props.title }}
          </h1>
          <p class="text-black mx-auto max-w-xl text-lg sm:text-xl">
            {{ props.description }}
          </p>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
const props = defineProps({
  title: String,
  description: String,
});
</script>

<style lang="scss" scoped></style>
