<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/vue3";

const showingNavigationDropdown = ref(false);
</script>

<template>
  <div>
    <div class="min-h-screen bg-gray-100">
      <nav class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between h-16">
            <div class="flex">
              <!-- Logo -->
              <div class="shrink-0 flex items-center">
                <Link :href="route('dashboard')">
                  <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
                </Link>
              </div>

              <!-- Navigation Links -->
              <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <NavLink :href="route('index')" :active="route().current('index')">
                  Index
                </NavLink>
                <NavLink :href="route('products')" :active="route().current('products')">
                  Products
                </NavLink>
                <NavLink :href="route('blog')" :active="route().current('blog')">
                  Blog
                </NavLink>
                <NavLink :href="route('pricing')" :active="route().current('pricing')">
                  useCase Pro
                </NavLink>
                <NavLink :href="route('about')" :active="route().current('about')">
                  About
                </NavLink>
              </div>
            </div>

            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
              <NavLink :href="route('dashboard')" :active="route().current('login')">
                Login
              </NavLink>
              <NavLink :href="route('register')" :active="route().current('register')">
                Register
              </NavLink>
            </div>
          </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div
          :class="{
            block: showingNavigationDropdown,
            hidden: !showingNavigationDropdown,
          }"
          class="sm:hidden"
        >
          <div class="pt-2 pb-3 space-y-1">
            <ResponsiveNavLink
              :href="route('dashboard')"
              :active="route().current('dashboard')"
            >
              Dashboard
            </ResponsiveNavLink>
          </div>

          <!-- Responsive Settings Options -->
          <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
              <div class="font-medium text-base text-gray-800"></div>
            </div>

            <div class="mt-3 space-y-1">
              <ResponsiveNavLink :href="route('profile.edit')">
                Profile
              </ResponsiveNavLink>
              <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                Log Out
              </ResponsiveNavLink>
            </div>
          </div>
        </div>
      </nav>

      <!-- Page Heading -->
      <header class="bg-white shadow" v-if="$slots.header">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
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
