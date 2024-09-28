<template>
    <div class="text-gray-200 font-sans">

      <section class="container mx-auto py-16">

        <div class="max-w-2xl mx-auto space-y-12">
          <!-- About Me Section -->
          <Transition appear @before-enter="beforeEnter" @enter="enter" @after-enter="afterEnter">
            <h2 v-if="showTitle" class="text-4xl font-bold text-center mb-6">About Me</h2>
          </Transition>

          <div class="bg-gray-800 rounded-lg p-8 shadow-lg">
            <p class="text-lg leading-relaxed text-justify">
              Hi, I am Sahet from Turkmenistan, passionate about frontend and backend development. I care about writing clean code and I enjoy learning about web development. I am currently seeking opportunities to work in a dynamic environment that fosters my growth into a full-fledged web developer.
            </p>
          </div>

          <!-- Skills and Expertise Section -->
          <div class="animated-element">
            <h2 class="text-3xl font-bold mb-6 text-center">Skills & Expertise</h2>
            <p class="text-lg mb-6">
              I am proficient in technologies such as HTML, CSS, JavaScript, Vue.js, PHP, and Laravel. I specialize in crafting intuitive and aesthetically pleasing web applications.
            </p>

            <div class="flex justify-center space-x-4">
              <!-- Skill Icons -->
              <SkillIcon src="path-to-html-icon.svg" alt="HTML" />
              <SkillIcon src="path-to-css-icon.svg" alt="CSS" />
              <SkillIcon src="path-to-javascript-icon.svg" alt="JavaScript" />
              <SkillIcon src="path-to-vue-icon.svg" alt="Vue.js" />
              <SkillIcon src="path-to-laravel-icon.svg" alt="Laravel" />
            </div>
          </div>

          <!-- Certifications & Achievements Section -->
          <div class="animated-element">
            <h2 class="text-3xl font-bold text-center mb-6">Certifications & Achievements</h2>
            <ul class="list-disc list-inside">
              <li><a href="https://symfonycasts.com/certificates/9B3AB07FC146" class="hover:underline">Doctrine, Symfony & the Database</a></li>
              <li><a href="https://symfonycasts.com/certificates/507536ACC139" class="hover:underline">Symfony 5 Security: Authenticators</a></li>
              <li><a href="https://symfonycasts.com/certificates/7F544974C149" class="hover:underline">API Platform 3</a></li>
              <li><a href="https://symfonycasts.com/certificates/C9F320DBC150" class="hover:underline">API Platform: Secure your Treasures</a></li>
              <li><a href="https://www.freecodecamp.org/certification/Sahet/front-end-development-libraries" class="hover:underline">FreeCodeCamp Certification</a></li>
            </ul>
          </div>

          <!-- Education Section -->
          <div class="animated-element">
            <h2 class="text-3xl font-bold text-center mb-6">Education</h2>
            <div class="bg-gray-800 rounded-lg p-8 shadow-lg">
              <h3 class="text-xl font-bold mb-2">
                Bachelor's Degree - Technical University of Cluj-Napoca
              </h3>
              <p class="text-gray-300">
                Faculty of Industrial Engineering, Robotics, and Production Management.
              </p>
              <span class="text-sm text-gray-500">2021 - Present</span>
            </div>
          </div>

        </div>

      </section>

    </div>
  </template>

  <script>


  import { ref } from 'vue';
  import gsap from 'gsap';
  import {ScrollTrigger} from "gsap/ScrollTrigger";

  export default {
    data() {
      return {
        imagePath: "public/img/img.png",

      };
    },
    setup() {
      const showHello = ref(true);
      const showTitle = ref(true);

      const beforeEnter = (el) => {
        el.style.transform = 'translateY(-60px)';
        el.style.opacity = 0;
      };

      const enter = (el, done) => {
        gsap.to(el, {
          duration: 1,
          y: 0,
          opacity: 1,
          ease: 'bounce.out',
          onComplete: done,
        });
      };

      const afterEnter = () => {};

      return {
        showTitle,
        beforeEnter,
        enter,
        afterEnter,
      };
    },

    mounted() {
      gsap.registerPlugin(ScrollTrigger);

      const elements = this.$el.querySelectorAll('.animated-element');

      elements.forEach(element => {
        gsap.set(element, { opacity: 0, skewX: 20 });

        gsap.to(element, {
          opacity: 1,
          skewX: 0,
          duration: 1,
          scrollTrigger: {
            trigger: element,
            start: 'top 90%',
            end: 'bottom 70%',
            scrub: true,
            markers: false,
            onEnter: () => {
              element.classList.add('animate');
            },
            onLeaveBack: () => {
              element.classList.remove('animate');
            }
          }
        });
      });

    }


  };

  </script>

  <style scoped>





  .background-image {
    position: relative;
  }

  .background-image::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('public/img/Screenshot 2024-05-01 152859.png');
    background-size: cover; /* or contain, depending on your preference */
    background-repeat: no-repeat;
    background-position: center;
    opacity: 0.2;
  }

  .content {
    position: relative;
    z-index: 1;
    width: 100%;
    height: 100%;
  }





  </style>
