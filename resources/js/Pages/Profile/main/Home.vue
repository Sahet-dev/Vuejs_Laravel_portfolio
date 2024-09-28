<template>
    <div class="min-h-screen bg-gray-900 text-gray-100">
      <!-- Header Section -->
      <div class="py-16">
        <p class="text-center text-6xl font-bold mb-8">KAKAJANOV SAHETMYRAT</p>
        <img :src="imagePath" alt="Profile Image" class="mx-auto w-48 h-48 rounded-full shadow-lg animated-element" />
      </div>

      <!-- About Section -->
      <section class="text-center max-w-4xl mx-auto px-6 py-12">
        <p class="text-4xl font-light mb-6 reveal-types">
          I'm passionate about creating innovative solutions and bringing ideas to life through code and design. Explore my projects to see what I've been working on!
        </p>
      </section>

      <!-- Skills Section -->
      <section class="bg-white text-blue-900 p-8 sm:p-16 text-center animated-element">
        <p class="text-2xl lg:text-3xl xl:text-4xl font-medium leading-relaxed">
          With a strong foundation in web development and design, my skills include proficiency in
          <b>HTML, CSS, JavaScript, PHP</b> and frameworks like <b>Vue.js</b> and <b>Laravel</b>. I am dedicated to continuous learning and staying up-to-date with the latest industry trends, specializing in responsive and visually appealing websites.
        </p>
      </section>

      <!-- Featured Projects Section -->
      <section class="mt-12">
        <div class="max-w-screen-lg mx-auto grid grid-cols-1 sm:grid-cols-2 gap-8">
          <div class="bg-white p-6 rounded-lg shadow-md text-center animated-element">
            <h3 class="text-xl font-bold mb-4">Social Media Website</h3>
            <p class="mb-6">
              A social media website is an online platform that allows users to create profiles, share content, connect with others, and engage in various forms of interaction within a digital community.
            </p>
            <a href="https://laravel-postify.com/" class="text-teal-500 hover:underline">View Project →</a>
          </div>
          <!-- Additional project items can be added here -->
        </div>
      </section>

      <!-- Call to Action Section -->
      <section class="text-center py-16">
        <p class="text-xl lg:text-3xl text-gray-100 mb-8 animated-element">
          Ready to explore more? Dive into my portfolio and discover a collection of projects that highlight my technical skills and creative solutions.
        </p>
        <div class="flex justify-center space-x-6">
          <router-link to="/projects" class="bg-teal-500 text-white py-3 px-6 rounded-lg hover:bg-teal-600">Explore Projects</router-link>
          <router-link to="/contact" class="bg-gray-700 text-white py-3 px-6 rounded-lg hover:bg-gray-800">Contact</router-link>
        </div>
      </section>
    </div>
  </template>

  <script>
  import { gsap } from "gsap";
  import { ScrollTrigger } from "gsap/ScrollTrigger";
  import { ref } from "vue";

  export default {
    data() {
      return {
        imagePath: "./public/img/background.png", // Default image path
      };
    },
    setup() {
      const showTitle = ref(true);

      const beforeEnter = (el) => {
        el.style.transform = 'scale(0.1)'; // Start with smaller scale
        el.style.opacity = 0;
      };

      const enter = (el, done) => {
        gsap.to(el, {
          duration: 1.5,
          scale: 1, // Scale to full size
          opacity: 1,
          ease: 'bounce.out',
          onComplete: done,
        });
      };

      return {
        showTitle,
        beforeEnter,
        enter,
      };
    },
    mounted() {
      gsap.registerPlugin(ScrollTrigger);

      gsap.utils.toArray('.animated-element').forEach(element => {
        gsap.set(element, { opacity: 0, scale: 0.5 });

        gsap.to(element, {
          opacity: 1,
          scale: 1,
          duration: 0.5,
          scrollTrigger: {
            trigger: element,
            start: 'top 80%',
            end: 'bottom 60%',
            scrub: true,
          }
        });
      });
    },
  };
  </script>

  <style scoped>
  .fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s, transform 0.5s;
  }
  .fade-enter, .fade-leave-to {
    opacity: 0;
    transform: scale(0.8); /* Start with a smaller scale */
  }
  .fade-enter-active {
    transform: scale(1); /* Scale to full size */
  }

  .animated-element {
    transition: transform 0.5s, opacity 0.5s ease-in-out;
  }

  .bg-gray-900 {
    background-color: #1a1a1a;
  }

  h3 {
    color: #0d47a1;
  }
  </style>
