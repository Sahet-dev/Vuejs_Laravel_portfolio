<template>
    <main class="min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-gray-100 ">
        <!-- Hero Section -->
        <section class="container mx-auto px-6 pt-32 pb-24 ">
            <div class="space-y-16 min-h-6">
                <!-- Name -->
                <Transition appear @before-enter="beforeEnter" @enter="enter" :css="false">
                    <h1
                        v-show="showElements.title"
                        class="text-center text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-bold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-violet-400"
                    >
                        KAKAJANOV SAHETMYRAT
                    </h1>

                </Transition>

                <!-- Profile Image -->
                <Transition appear @before-enter="beforeEnter" @enter="enter" :css="false">
                    <div v-show="showElements.image" class="relative mx-auto w-48 h-48">
                        <img
                            :src="imagePath"
                            alt="Profile"
                            class="absolute inset-0 w-full h-full rounded-full object-cover shadow-2xl ring-4 ring-blue-400/30"
                        />
                        <div class="absolute -inset-4 rounded-full bg-gradient-to-r from-blue-400 to-violet-400 opacity-20 blur-lg -z-10"></div>
                    </div>
                </Transition>

                <!-- Intro Text -->
                <Transition appear @before-enter="beforeEnter" @enter="enter" :css="false">
                    <p
                        v-show="showElements.intro"
                        class="max-w-3xl mx-auto text-center text-3xl font-light leading-relaxed text-gray-300"
                    >
                        I'm passionate about creating innovative solutions and bringing ideas to life through code and design.
                        <span class="text-gradient">Explore my projects</span> to see what I've been working on!
                    </p>
                </Transition>
            </div>
        </section>

        <!-- Skills Section -->
        <Transition appear @before-enter="beforeEnter" @enter="enter" :css="false">
            <section ref="skillsSection" class="py-24 relative overflow-hidden"
                     v-show="showElements.intro">
                <div class="absolute inset-0 bg-blue-500/5 backdrop-blur-3xl"></div>
                <div class="container mx-auto px-2 relative">
                    <div class="max-w-4xl mx-auto bg-white/5 backdrop-blur-lg rounded-2xl p-12 shadow-xl">
                        <p class="text-3xl font-light leading-relaxed">
                            With a strong foundation in web development and design, my skills include proficiency in
                            <span class="font-semibold text-blue-400">HTML</span>,
                            <span class="font-semibold text-blue-400">CSS</span>,
                            <span class="font-semibold text-blue-400">JavaScript</span>,
                            <span class="font-semibold text-blue-400">PHP</span>
                            and frameworks like
                            <span class="font-semibold text-blue-400">Vue.js</span> and
                            <span class="font-semibold text-blue-400">Laravel</span>.
                        </p>
                    </div>
                </div>
            </section>
        </Transition>

        <!-- Projects Section -->
        <Transition appear @before-enter="beforeEnter" @enter="enter" :css="false">
            <section class="py-24 container mx-auto px-6"
                     v-show="showElements.intro">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="group">
                        <div class="relative bg-white/5 backdrop-blur-lg p-8 rounded-2xl transition-all duration-500 hover:bg-white/10">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-violet-400/20 opacity-0 group-hover:opacity-100 rounded-2xl transition-opacity duration-500"></div>
                            <h3 class="text-2xl font-bold mb-4 relative">Social Media Website</h3>
                            <p class="text-gray-300 mb-6 relative">
                                A social media website is an online platform that allows users to create profiles,
                                share content, connect with others, and engage in various forms of interaction
                                within a digital community.
                            </p>
                            <a
                                href="https://laravel-postify.com/"
                                class="inline-flex items-center text-blue-400 hover:text-blue-300 transition-colors relative"
                            >
                                View Project
                                <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="group">
                        <div class="relative bg-white/5 backdrop-blur-lg p-8 rounded-2xl transition-all duration-500 hover:bg-white/10">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-violet-400/20 opacity-0 group-hover:opacity-100 rounded-2xl transition-opacity duration-500"></div>
                            <h3 class="text-2xl font-bold mb-4 relative">Knowledge selling app</h3>
                            <p class="text-gray-300 mb-6 relative">
                                This RESTful API streamlines online course management, supporting user registration, enrollment, progress tracking,
                                and interactions with secure, scalable access for educational platforms.
                            </p>
                            <a
                                href="https://course.sahet-dev.com/"
                                class="inline-flex items-center text-blue-400 hover:text-blue-300 transition-colors relative"
                            >
                                View Project
                                <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 12H20M20 12L14 6M20 12L14 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </Transition>

        <!-- CTA Section -->
        <Transition appear @before-enter="beforeEnter" @enter="enter" :css="false">
            <section class="py-24 text-center container mx-auto px-6"
                     v-show="showElements.intro">
            <p class="text-3xl font-light text-gray-300 mb-12">
                Ready to explore more? Dive into my portfolio and discover a collection of projects that
                highlight my technical skills and creative solutions.
            </p>
        </section>
        </Transition>
    </main>
</template>

<script setup>
import {ref, onMounted} from 'vue';
import {gsap} from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';
import {IMAGE_PROFILE} from "@/urlConfig.js";

gsap.registerPlugin(ScrollTrigger);

const imagePath = IMAGE_PROFILE;

const showElements = ref({
    title: false,
    image: false,
    intro: false
});

const beforeEnter = (el) => {
    gsap.set(el, {
        opacity: 0,
        y: 30
    });
};

const enter = (el, done) => {
    gsap.to(el, {
        opacity: 1,
        y: 0,
        duration: 1,
        ease: 'expo.out',
        onComplete: done
    });
};

onMounted(() => {
    // Sequence the entrance animations
    const tl = gsap.timeline({delay: 0.5});

    showElements.value.title = true;
    tl.add(() => showElements.value.image = true, 0.5);
    tl.add(() => showElements.value.intro = true, 1);

    // Add scroll animations
    gsap.utils.toArray('.group').forEach((element) => {
        gsap.from(element, {
            opacity: 0,
            y: 50,
            duration: 1,
            ease: 'expo.out',
            scrollTrigger: {
                trigger: element,
                start: 'top 80%',
                end: 'top 50%',
                scrub: false
            }
        });
    });
});
</script>

<style scoped>
.text-gradient {
    @apply bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-violet-400;
}

::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    @apply bg-gray-800;
}

::-webkit-scrollbar-thumb {
    @apply bg-blue-500/30 rounded-full hover:bg-blue-500/50 transition-colors;
}
</style>
