<template>
  <div class="p-2">
    <section class="pt-24 pb-24 rounded-2xl bg-white">
      <div class="px-12 mx-auto max-w-7xl">
        <div class="w-full mx-auto text-left md:w-10/12 md:text-center min-h-[35rem]">
          <Heading
            title="Our special features"
            description="that shine us through greatness."
          />
          <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-2">
            <Card title="AI-powered suggestions"> </Card>
            <Card title="Delivery at lightspeed"> </Card>
            <Card title="Access to the internet's hottest sh*t">
              <div class="px-auto relative">
                <img class="z-10 w-56 relative left-16" :src="'/images/rabbit-r1.png'" />
                <img class="absolute top-[-20px]" :src="'/images/fire.png'" />
              </div>
            </Card>
            <Card title="Save up Coins for rewards">
              <div class="flex pt-2 relative">
                <subcard
                  class="overflow-hidden w-screen p-6 bg-black text-white border-2 rounded-2xl shadow"
                >
                  <p class="font-semibold text-left">September</p>
                  <div class="flex flex-row justify-between">
                    <h1 class="text-3xl font-black text-left">6.900x</h1>
                    <div class="flex flex-row text-green-400">
                      <h1 class="text-3xl font-black text-right">5%</h1>
                      <svg
                        width="30px"
                        height="30px"
                        viewBox="0 0 24 24"
                        stroke-width="2.6"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        color="#49DE80"
                      >
                        <path
                          d="M6.00005 19L19 5.99996M19 5.99996V18.48M19 5.99996H6.52005"
                          stroke="#49DE80"
                          stroke-width="2.6"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </subcard>
              </div>
              <img
                class="absolute bottom-10 drop-shadow left-24 justify-center h-44"
                :src="'/images/coin.png'"
              />
            </Card>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup lang="ts">
import Heading from "@/Components/Heading.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Card from "@/Components/Card.vue";
</script>

<style scoped></style>
