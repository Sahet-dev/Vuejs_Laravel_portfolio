<template>
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-xl animated-element">
      <!-- Project Link or Title -->
      <a :href="projectUrl || githubUrl" class="block hover:underline">
        <h3 class="text-xl font-semibold mb-2">{{ title }}</h3>
      </a>

      <!-- Project Description -->
      <p class="text-gray-700 mb-4">{{ description }}</p>

      <!-- Project Image (if exists) -->
      <div v-if="image" class="flex justify-center mb-4">
        <img :src="image" :alt="title" :width="imageWidth" :height="imageHeight" class="rounded-lg" />
      </div>

      <!-- View Details Link -->
      <div class="text-center">
        <a v-if="projectUrl" :href="projectUrl" class="text-teal-500 hover:underline font-semibold">Visit Project →</a>
        <a :href="githubUrl" class="ml-4 text-teal-500 hover:underline font-semibold">View Code →</a>
      </div>
    </div>
  </template>

  <script>
  export default {
    props: {
      title: {
        type: String,
        required: true,
      },
      description: {
        type: String,
        required: true,
      },
      projectUrl: {
        type: String,
        default: null,
      },
      githubUrl: {
        type: String,
        required: true,
      },
      image: {
        type: String,
        default: null,
      },
      imageWidth: {
        type: String,
        default: "300px",
      },
      imageHeight: {
        type: String,
        default: "auto",
      },
    },
  };
  </script>

  <style scoped>
  .animated-element {
    opacity: 0;
    transform: scale(0.9);
    transition: all 0.5s ease;
  }
  </style>
