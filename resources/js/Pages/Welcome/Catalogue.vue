<template>
  <div class="p-2">
    <section
      class="pt-12 rounded-2xl bg-[radial-gradient(ellipse_at_bottom,_var(--tw-gradient-stops))] from-[#6eba95] via-[#b8e8d1] to-[#fcfcfc]"
    >
      <div class="px-12 mx-auto max-w-7xl">
        <div
          class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center min-h-[35rem]"
        >
          <Heading
            title="The most in demand"
            description="products is what we sell as hotcakes here at useCase."
          />
          <div class="flex items-center justify-center relative h-4 drop-shadow-2xl mt-1">
            <img
              class="block h-52 w-auto m-auto"
              :src="'/images/humane-pin.png'"
              alt="Apple Vision Pro"
            />
          </div>
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
