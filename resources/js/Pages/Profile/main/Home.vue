<template>
    <div class="min-h-screen text-gray-100">
        <!-- Header Section -->
        <div class="py-16"><br><br><br><br><br><br><br>
            <Transition @before-enter="beforeEnterTitle" @enter="enterTitle">
                <p  v-show="showTitle" class="text-center text-6xl font-bold mb-8 mt-4">
                     KAKAJANOV SAHETMYRAT

                </p>
            </Transition>
            <Transition @before-enter="beforeEnterSubtitle" @enter="enterSubtitle">
                <img  v-show="showSubtitle" :src="imagePath" alt="Profile Image" class="mx-auto w-48 h-48 rounded-full shadow-lg animated-element" />

            </Transition>
            <Transition @before-enter="beforeEnterDescription" @enter="enterDescription">
                <section  v-show="showDescription" class="text-center max-w-4xl mx-auto px-6 py-12">
                    <p class="text-4xl font-light mb-6 reveal-types">
                        I'm passionate about creating innovative solutions and bringing ideas to life through code and design. Explore my projects to see what I've been working on!
                    </p>
                </section>
            </Transition>
        </div>

        <!-- About Section -->


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
                    <p class="mb-6 text-gray-800">
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
            <div class="animated-element p-8 m-8"> ...  </div>

        </section>
    </div>
</template>

<script setup>
import {ref, onMounted, watch} from 'vue';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import {IMAGE_PROFILE} from "@/urlConfig";

gsap.registerPlugin(ScrollTrigger);


const imagePath = IMAGE_PROFILE;
// const totalTransitions = 3;
const transitionsCompleted = ref(0);
const showTitle = ref(false);
const showSubtitle = ref(false);
const showDescription = ref(false);
const showButtons = ref(false);

const goToProjects = () => {
    console.log('clicked');
    showTitle.value = false;
};



const beforeEnterTitle = (el) => {
    el.style.opacity = 0;
    el.style.transform = "translateY(-30px)";
};

const enterTitle = (el, done) => {
    gsap.to(el, {
        opacity: 1,
        y: 0,
        duration: 2,
        ease: "power3.out",
        onComplete: done,
    });
};

const beforeEnterSubtitle = (el) => {
    el.style.opacity = 0;
    el.style.transform = "translateY(-20px)";
};

const enterSubtitle = (el, done) => {
    gsap.to(el, {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: 1,
        ease: "power3.out",
        onComplete: done,
    });
};

const beforeEnterDescription = (el) => {
    el.style.opacity = 0;
    el.style.transform = "translateY(-50px)";
};

const enterDescription = (el, done) => {
    gsap.to(el, {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: 1,
        ease: "power3.out",
        onComplete: done,
    });
};

const beforeEnterButtons = (el) => {
    el.style.opacity = 0;
    el.style.transform = "translateY(0px)";
};

const enterButtons = (el, done) => {
    gsap.to(el, {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: 1.5,
        ease: "power3.out",
        onComplete: done,
    });
};

const onTransitionComplete = () => {
    transitionsCompleted.value += 1;
};

watch(transitionsCompleted, (newVal) => {
    if (newVal === totalTransitions) {
        ScrollTrigger.refresh();
    }
});


onMounted(() => {
    showTitle.value = true;
    showSubtitle.value = true;
    showDescription.value = true;
    showButtons.value = true;
    gsap.utils.toArray('.animated-element').forEach(element => {
        gsap.set(element, { opacity: 0, scale: 0.9 });

        gsap.to(element, {
            opacity: 1,
            scale: 1,
            duration: 0.6,
            scrollTrigger: {
                trigger: element,
                start: 'top 80%',
                end: 'bottom 60%',
                scrub: true,
            },
        });
    });
});
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

@keyframes textColorChange {
    0% {
        color: #df9fb0; /* Start with red */
    }
    100% {
        color: #fcfcfa; /* End with blue */
    }
}

.reveal-types {
    animation: textColorChange 5s ease-in-out;
}
</style>
