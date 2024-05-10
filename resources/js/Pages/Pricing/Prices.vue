<template>
  <div class="p-2">
    <section
      class="pt-12 pb-24 rounded-2xl bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-[#6eba95] via-[#b8e8d1] to-[#fcfcfc]"
    >
      <div class="px-12 mx-auto max-w-7xl">
        <div class="w-full mx-auto text-left md:w-11/12 xl:w-10/12 md:text-center">
          <h1
            class="uppercase drop-shadow-xl mb-8 text-4xl font-black leading-none tracking-normal text-gray-100 md:text-6xl md:tracking-tight"
          >
            Pricing
          </h1>
          <p class="mb-10 text-xl text-gray-50 md:text-xl lg:px-24">
            Get the plan that fits your needs
          </p>
          <div class="pt-10 grid grid-cols-3 gap-6">
            <PriceCard
              v-for="(card, index) in cards"
              :key="index"
              :name="card.name"
              :desc="card.desc"
              :price="card.price"
              :features="card.features"
            />
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import PriceCard from "@/Components/Pricing/PriceCard.vue";

const cards = [
  {
    name: "useCase",
    desc:
      "Stay updated on the latest gadget trends and receive occasional special offers.",
    price: 0,
    features: [
      "Individual configuration",
      "No setup, or hidden fees",
      "Premium support: 6 months",
    ],
  },
  {
    name: "useCase Plus",
    desc:
      "Get priority access to new arrivals, special discounts, and members-only deals.",
    price: 8,
    features: [
      "Individual configuration",
      "No setup, or hidden fees",
      "Premium support: 6 months",
    ],
  },
  {
    name: "useCase Pro",
    desc:
      "Gain exclusive access to new arrivals, exclusive discounts, and pro-member deals.",
    price: 20,
    features: [
      "Individual configuration",
      "No setup, or hidden fees",
      "Premium support: 6 months",
    ],
  },
];
</script>

<style scoped></style>
