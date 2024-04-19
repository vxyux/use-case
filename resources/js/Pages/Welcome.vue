<template>
  <DefaultLayout>
    <Head title="useCase - Home" />
    <Hero />
    <Testimonials />
    <Features />
    <Cta />
    <Catalogue />
  </DefaultLayout>
</template>

<script setup lang="ts">
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, useForm } from "@inertiajs/vue3";

import { Hero, Testimonials, Features, Cta, Catalogue } from "@/Pages/Welcome/index.js";
</script>

<style scoped></style>
