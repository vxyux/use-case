<template>
  <DefaultLayout>
    <Head title="useCase - Pricing" />
    <Prices />
  </DefaultLayout>
</template>

<script setup lang="ts">
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, useForm } from "@inertiajs/vue3";

import Prices from "@/Pages/Pricing/Prices.vue";
</script>

<style scoped></style>
