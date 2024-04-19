<template>
  <div class="p-2">
    <section
      class="pt-12 rounded-2xl bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#E44B40] via-[#F5C0BA] to-[#FFFBF7]"
    >
      <div class="px-12 mx-auto max-w-7xl">
        <div
          class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center min-h-[35rem]"
        >
          <Heading
            title="Skip the f*cking queue"
            description="get notified, express shippping and much more with useCase Pro."
          />
          <div
            class="flex items-center justify-center relative h-4 drop-shadow-2xl mt-1"
            v-for="item in items"
            :key="item.id"
          >
            <div
              class="rounded-lg w-80 h-16 bg-gray-100 p-2 absolute text-left flex-row flex gap-2"
              :class="{
                'scale-[80%] top-0': item.id == 1,
                'scale-100 top-8': item.id == 2,
                'scale-[120%] top-20': item.id == 3,
              }"
            >
              <span class="bg-red-500 w-3 rounded-lg"></span>
              <div>
                <h1 class="font-black italic">{{ item.title }}</h1>
                <p>{{ item.status }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="mx-auto text-center mb-6">
          <PrimaryButton
            href="/pricing"
            class="bg-red-400 hover:bg-red-500 rounded-2xl flex-col sm:w-[24rem]"
          >
            <p>Start Free Trial</p>
            <p class="text-xs">then €9,99 monthly</p>
          </PrimaryButton>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import Heading from "@/Components/Heading.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const items = [
  {
    id: 1,
    title: "Rabbit R1",
    status: "Is available for drop",
  },
  {
    id: 2,
    title: "Apple Vision Pro",
    status: "Has restocked",
  },
  {
    id: 3,
    title: "Humane AI Pin",
    status: "Has been added to Early Access",
  },
];
</script>

<style scoped></style>
