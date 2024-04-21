<template>
  <div class="p-2 mb-10">
    <section
      class="py-24 rounded-2xl bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-[#6eba95] via-[#b8e8d1] to-[#fcfcfc]"
    >
      <div class="px-12 mx-auto max-w-7xl">
        <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
          <h1
            class="uppercase drop-shadow-xl mb-8 text-4xl font-black leading-none tracking-normal text-gray-50 md:text-6xl md:tracking-tight"
          >
            <span>Find every</span>
            <span
              class="block italic w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-green-400 to-black lg:inline"
            >
              useCase
            </span>
            <span>with the latest tech</span>
          </h1>
          <p class="px-16 mb-8 text-lg text-white md:text-xl lg:px-24">
            Find the latest in technology at prices that won't break the bank. Explore our
            collection and stay ahead of the curve without emptying your wallet!
          </p>
          <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
            <PrimaryButton href="/about" class="bg-green-400 hover:bg-green-500">
              Get Started
              <svg
                class="w-4 h-4 ml-1"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </PrimaryButton>
            <SecondaryButton href="/about">
              Learn More
              <svg
                class="w-4 h-4 ml-1"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"
                ></path></svg
            ></SecondaryButton>
          </div>
        </div>
        <div class="w-full mx-auto mt-20 text-center md:w-10/12">
          <div class="relative z-0 w-full mt-8">
            <img
              class="block h-52 w-auto m-auto"
              :src="'/images/apple-vpro.png'"
              alt="Apple Vision Pro"
            />
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
</script>

<style lang="scss" scoped></style>
