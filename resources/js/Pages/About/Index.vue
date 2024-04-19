<template>
  <DefaultLayout>
    <Head title="Forgot Password" />
    <Header />
    <Info/>
  </DefaultLayout>
</template>

<script setup lang="ts">
import DefaultLayout from '@/Layouts/DefaultLayout.vue'
import Header from './Partials/Header.vue'
import Info from './Partials/Info.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import { Head, useForm } from '@inertiajs/vue3'
</script>

<style scoped></style>
