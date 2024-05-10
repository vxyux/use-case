<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/vue3";
import NavBar from "@/Components/NavBar.vue";

const showingNavigationDropdown = ref(false);
</script>

<template>
  <div>
    <div class="min-h-screen bg-gray-100">
      <NavBar />
      <!-- Page Heading -->
      <header class="bg-white shadow" v-if="$slots.header">
        <div class="max-w-7xl mx-auto py-6 px-2 sm:px-4 lg:px-8">
          <slot name="header" />
        </div>
      </header>
      <!-- Page Content -->
      <main>
        <slot />
      </main>

      <!-- Footer -->
      <div class="p-2">
        <section class="pt-24 rounded-2xl bg-black text-white">
          <div class="px-12 mx-auto max-w-7xl">
            <div class="flex flex-col w-full mx-auto text-left min-h-[20rem]">
              <div class="flex-1 flex flex-row">
                <h1 class="text-4xl pt-2 italic w-2/3">"Less is the new more"</h1>
                <div class="flex-row flex flex-1 justify-end gap-[50%]">
                  <ul>
                    <li>Login</li>
                    <li>Register</li>
                  </ul>
                  <ul>
                    <li>Index</li>
                    <li>Products</li>
                    <li>Blog</li>
                    <li>useCase Pro</li>
                    <li>About</li>
                  </ul>
                </div>
              </div>
              <div class="flex-grow-0 items-end align-bottom mb-10">
                <h1 class="text-xl font-semibold">
                  A non-existing tech resell company under the name:
                </h1>
                <h1 class="text-8xl font-black tracking-tight">USECASE INC.</h1>
                <h1 class="text-lg font-semibold">2024 © All Rights Reserved</h1>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</template>
