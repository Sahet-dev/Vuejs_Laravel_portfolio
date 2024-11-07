<template>
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white py-20 px-4">
        <!-- Header Section -->
        <div class="text-center space-y-4" v-motion-slide-top>
            <h1 class="text-5xl font-bold bg-gradient-to-r from-teal-400 to-blue-500 bg-clip-text text-transparent">
                My Projects
            </h1>
            <p class="text-slate-300 text-lg">
                A collection of applications showcasing different development skills
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
            <!-- Example Project Card -->
            <div v-for="(project, index) in projects" :key="index" class="relative bg-white/5 backdrop-blur-lg border border-slate-700 p-6 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 ease-in-out animated-element">
                <a :href="project.link" target="_blank" class="block">
                    <h3 class="text-xl font-semibold bg-gradient-to-r from-teal-400 to-blue-500 bg-clip-text text-transparent mb-4">
                        {{ project.title }}
                    </h3>
                </a>
                <p class="text-gray-300 mb-6">{{ project.description }}</p>
                <div class="flex justify-center mb-4">
                    <img :src="project.image" :width="desiredWidth" :height="desiredHeight" class="rounded-lg border border-teal-400 transition-all duration-300 hover:scale-105 hover:border-blue-500" />
                </div>
                <a :href="project.github" target="_blank" class="text-teal-400 hover:text-blue-500 transition-colors duration-300 hover:underline">View Details →</a>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import {
     DRUMMACHINE_IMAGE,
    CALCULATOR_IMAGE,
    SocialMediaApp_IMAGE,
    MarkdownPreviewer_IMAGE,
    Pomodoro_IMAGE,
    RandomQuote_IMAGE,
    EngTm_IMAGE,
    CourseApp_IMAGE,
    CourseAppAdmin_IMAGE
} from "@/urlConfig";

const projects = [
    {
        title: "Laravel Social Media App",
        description: "A social media platform featuring user profiles, posts, followers, and more.",
        link: "https://laravel-postify.com/",
        github: "https://github.com/Sahet-dev/Laravel_Social_Media_webApp",
        image: SocialMediaApp_IMAGE
    },
 {
        title: "Knowledge selling app",
        description: "A social media platform featuring user profiles, posts, followers, and more.",
        link: "https://course.sahet-dev.com/",
        github: "https://github.com/Sahet-dev/Laravel_Social_Media_webApp",
        image: CourseApp_IMAGE
    },
    {
        title: "Admin Page of Knowledge selling app",
        description: "A social media platform featuring user profiles, posts, followers, and more.",
        link: "https://course-admins.sahet-dev.com/admin-dashboard/",
        github: "https://github.com/Sahet-dev/Laravel_Social_Media_webApp",
        image: CourseAppAdmin_IMAGE
    },
 {
        title: "Blog App. PHP Symfony 6 app",
        description: "Create an account and start blogging.",
        link: "https://github.com/Sahet-dev/Symfony6BlogApp",
        github: "https://github.com/Sahet-dev/Laravel_Social_Media_webApp",
        image: null
    },
    {
        title: "Learn English & Take a Quiz",
        description: "English Grammar guide and workbook. Users fill in fields manually and view answers.",
        link: "https://github.com/Sahet-dev/English-grammar-app",
        github: "https://github.com/Sahet-dev/Laravel_Social_Media_webApp",
        image: EngTm_IMAGE
    },
 {
        title: "Random Quote Generator",
        description: "Get thought-provoking and inspiring quotes at random, ready to share on X.",
        link: "https://github.com/Sahet-dev/bootstrap_random_quote_generator",
        github: "https://github.com/Sahet-dev/Laravel_Social_Media_webApp",
        image: RandomQuote_IMAGE
    },
 {
        title: "Drum Machine",
        description: "Create rhythmic beats and music compositions with this interactive digital instrument.",
        link: "https://github.com/Sahet-dev/bootstrap_drum_machine",
        github: "https://github.com/Sahet-dev/Laravel_Social_Media_webApp",
        image: DRUMMACHINE_IMAGE
    },
 {
        title: "Markdown Previewer",
        description: "Visualize and format Markdown syntax in real-time with this web app.",
        link: "https://github.com/Sahet-dev/markdown_previewer_react_bootstrap",
        github: "https://github.com/Sahet-dev/Laravel_Social_Media_webApp",
        image: MarkdownPreviewer_IMAGE
    },
 {
        title: "JavaScript Calculator App",
        description: "Perform mathematical calculations with this browser-based JavaScript calculator app.",
        link: "https://github.com/Sahet-dev/JS_calculator",
        github: "https://github.com/Sahet-dev/Laravel_Social_Media_webApp",
        image: CALCULATOR_IMAGE
    },
 {
        title: "Pomodoro Clock App",
        description: "Manage your time effectively using the Pomodoro Technique with this app.",
        link: "https://github.com/Sahet-dev/Pomodoro_clock_react",
        github: "https://github.com/Sahet-dev/Laravel_Social_Media_webApp",
        image: Pomodoro_IMAGE
    },


];

const desiredWidth = ref('300px');
const desiredHeight = ref('auto');

onMounted(() => {
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray('.animated-element').forEach((element) => {
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
/* Add any additional styling here */
</style>
