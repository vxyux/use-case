<script setup>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
  name: "",
  email: "",
  password: "",
  password_confirmation: "",
});

const submit = () => {
  form.post(route("register"), {
    onFinish: () => form.reset("password", "password_confirmation"),
  });
};
</script>

<template>
  <DefaultLayout>
    <div class="p-2">
      <section class="pt-24 rounded-2xl bg-white">
        <div class="px-12 mx-auto max-w-7xl">
          <div class="w-full mx-auto text-left md:w-10/12 min-h-[35rem]">
            <Head title="Register" />

            <h1 class="mb-10 text-4xl text-black font-semibold">Register</h1>

            <form @submit.prevent="submit">
              <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                  id="name"
                  type="text"
                  class="mt-1 block w-full"
                  v-model="form.name"
                  required
                  autofocus
                  autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
              </div>

              <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                  id="email"
                  type="email"
                  class="mt-1 block w-full"
                  v-model="form.email"
                  required
                  autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
              </div>

              <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                  id="password"
                  type="password"
                  class="mt-1 block w-full"
                  v-model="form.password"
                  required
                  autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
              </div>

              <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput
                  id="password_confirmation"
                  type="password"
                  class="mt-1 block w-full"
                  v-model="form.password_confirmation"
                  required
                  autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
              </div>

              <div class="flex items-center justify-end mt-4">
                <Link
                  :href="route('login')"
                  class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                  Already registered?
                </Link>

                <PrimaryButton
                  href=""
                  class="ms-4"
                  :class="{ 'opacity-25': form.processing }"
                  :disabled="form.processing"
                >
                  Register
                </PrimaryButton>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </DefaultLayout>
</template>
