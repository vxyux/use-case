<template>
  <div class="p-2">
    <section
      class="pt-24 rounded-2xl bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-[#6eba95] via-[#b8e8d1] to-[#fcfcfc]"
    >
      <div class="px-12 mx-auto max-w-7xl">
        <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
          <h1
            class="uppercase drop-shadow-xl mb-8 text-4xl font-black leading-none tracking-normal text-gray-50 md:text-6xl md:tracking-tight"
          >
            Pricing
          </h1>
          <p class="px-16 mb-8 text-lg text-white md:text-xl lg:px-24">
            Know more about our plans that we provide with our service.
          </p>
        </div>
        <div class="w-full mx-auto mt-20 text-center md:w-10/12">
          <div class="relative z-0 w-full mt-8">
            <div class="grid grid-cols-3 gap-4">
              <Card title="useCase">
                <div class="text-left px-6 mb-10">
                  <h3 class="font-black text-5xl mb-8">
                    Free<span class="ml-4 text-lg font-semibold">/ month</span>
                  </h3>
                  <ul class="list-disc space-y-3">
                    <li>Basic access to our site</li>
                    <li>Basic access to our site</li>
                    <li>Basic access to our site</li>
                    <li>Basic access to our site</li>
                  </ul>
                </div>
                <PrimaryButton href="/payment" class="bg-slate-400"
                  >Choose Default</PrimaryButton
                >
              </Card>
              <Card title="useCase Plus" class="border-green-400 border-4">
                <div class="text-left px-6 mb-10">
                  <h3 class="font-black text-5xl mb-8">
                    €10<span class="ml-4 text-lg font-semibold">/ month</span>
                  </h3>
                  <ul class="list-disc space-y-3">
                    <li>Basic access to our site</li>
                    <li>Basic access to our site</li>
                    <li>Basic access to our site</li>
                    <li>Basic access to our site</li>
                  </ul>
                </div>
                <PrimaryButton href="/payment" class="bg-green-400"
                  >Choose Plus</PrimaryButton
                >
              </Card>
              <Card title="useCase Pro" class="border-red-500 border-4">
                <div class="text-left px-6 mb-10">
                  <h3 class="font-black text-5xl mb-8">
                    €20<span class="ml-4 text-lg font-semibold">/ month</span>
                  </h3>
                  <ul class="list-disc space-y-3">
                    <li>Basic access to our site</li>
                    <li>Basic access to our site</li>
                    <li>Basic access to our site</li>
                    <li>Basic access to our site</li>
                  </ul>
                </div>
                <PrimaryButton href="/payment" class="bg-red-500"
                  >Choose Pro</PrimaryButton
                >
              </Card>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import Card from "@/Components/Card.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
</script>

<style scoped></style>
