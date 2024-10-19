<template>
    <div class="container mx-auto px-4 py-12 pt-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 py-12">
            <!-- Project 1 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out animated-element">
                <a href="https://laravel-postify.com/" class="block">
                    <h3 class="text-xl font-semibold text-white mb-4 hover:text-teal-300 transition duration-300">Laravel Social Media App</h3>
                </a>
                <p class="text-gray-300 mb-6">Social Media Website featuring user registration with email verification, customizable profile pages with tabs for posts, followers, followings, photos, and personal information.</p>
                <div class="flex justify-center mb-4">
                    <img :src="socialApp" :width="desiredWidth" :height="desiredHeight" class="rounded-lg" />
                </div>
                <a href="https://github.com/Sahet-dev/Laravel_Social_Media_webApp" class="text-teal-300 hover:underline">View Details →</a>
            </div>

            <!-- Project 2 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out animated-element">
                <h3 class="text-xl font-semibold text-white mb-4">Blog App. PHP Symfony 6 app</h3>
                <p class="text-gray-300 mb-6">Create an account and start blogging.</p>
                <a href="https://github.com/Sahet-dev/Symfony6BlogApp" class="text-teal-300 hover:underline">View Details →</a>
            </div>

            <!-- Project 3 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out animated-element">
                <a href="#" class="block">
                    <h3 class="text-xl font-semibold text-white mb-4 hover:text-teal-300 transition duration-300">Learn English & Take a Quiz</h3>
                </a>
                <p class="text-gray-300 mb-6">English Grammar guide and workbook. Users fill in fields manually and view answers.</p>
                <div class="flex justify-center mb-4">
                    <img :src="en" :width="desiredWidth" :height="desiredHeight" class="rounded-lg" />
                </div>
                <a href="https://github.com/Sahet-dev/English-grammar-app" class="text-teal-300 hover:underline">View Details →</a>
            </div>

            <!-- Project 4 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out animated-element">
                <a href="https://sahet-dev.github.io/bootstrap_random_quote_generator/" class="block">
                    <h3 class="text-xl font-semibold text-white mb-4 hover:text-teal-300 transition duration-300">Random Quote Generator</h3>
                </a>
                <p class="text-gray-300 mb-6">Get thought-provoking and inspiring quotes at random, ready to share on X.</p>
                <div class="flex justify-center mb-4">
                    <img :src="randomQuote" :width="desiredWidth" :height="desiredHeight" class="rounded-lg" />
                </div>
                <a href="https://github.com/Sahet-dev/bootstrap_random_quote_generator" class="text-teal-300 hover:underline">View Details →</a>
            </div>

            <!-- Project 5 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out animated-element">
                <a href="https://sahet-dev.github.io/bootstrap_drum_machine/" class="block">
                    <h3 class="text-xl font-semibold text-white mb-4 hover:text-teal-300 transition duration-300">Drum Machine</h3>
                </a>
                <p class="text-gray-300 mb-6">Create rhythmic beats and music compositions with this interactive digital instrument.</p>
                <div class="flex justify-center mb-4">
                    <img :src="drumMachine" :width="desiredWidth" :height="desiredHeight" class="rounded-lg" />
                </div>
                <a href="https://github.com/Sahet-dev/bootstrap_drum_machine" class="text-teal-300 hover:underline">View Details →</a>
            </div>

            <!-- Project 6 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out animated-element">
                <a href="https://sahet-dev.github.io/markdown_previewer_react_bootstrap/" class="block">
                    <h3 class="text-xl font-semibold text-white mb-4 hover:text-teal-300 transition duration-300">Markdown Previewer</h3>
                </a>
                <p class="text-gray-300 mb-6">Visualize and format Markdown syntax in real-time with this web app.</p>
                <div class="flex justify-center mb-4">
                    <img :src="markdown" :width="desiredWidth" :height="desiredHeight" class="rounded-lg" />
                </div>
                <a href="https://github.com/Sahet-dev/markdown_previewer_react_bootstrap" class="text-teal-300 hover:underline">View Details →</a>
            </div>

            <!-- Project 7 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out animated-element">
                <a href="https://sahet-dev.github.io/JS_calculator/" class="block">
                    <h3 class="text-xl font-semibold text-white mb-4 hover:text-teal-300 transition duration-300">JavaScript Calculator App</h3>
                </a>
                <p class="text-gray-300 mb-6">Perform mathematical calculations with this browser-based JavaScript calculator app.</p>
                <div class="flex justify-center mb-4">
                    <img :src="calculator" :width="desiredWidth" :height="desiredHeight" class="rounded-lg" />
                </div>
                <a href="https://github.com/Sahet-dev/JS_calculator" class="text-teal-300 hover:underline">View Details →</a>
            </div>

            <!-- Project 8 -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out animated-element">
                <a href="https://sahet-dev.github.io/Pomodoro_clock_react/" class="block">
                    <h3 class="text-xl font-semibold text-white mb-4 hover:text-teal-300 transition duration-300">Pomodoro Clock App</h3>
                </a>
                <p class="text-gray-300 mb-6">Manage your time effectively using the Pomodoro Technique with this app.</p>
                <div class="flex justify-center mb-4">
                    <img :src="pomodoro" :width="desiredWidth" :height="desiredHeight" class="rounded-lg" />
                </div>
                <a href="https://github.com/Sahet-dev/Pomodoro_clock_react" class="text-teal-300 hover:underline">View Details →</a>
            </div>
        </div>
        <div class="fle text-center items-center">
            <div class="animated-element p-8 m-8"> ... </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import {DRUMMACHINE_IMAGE, CALCULATOR_IMAGE, SocialMediaApp_IMAGE, MarkdownPreviewer_IMAGE, Pomodoro_IMAGE, RandomQuote_IMAGE, EngTm_IMAGE } from "@/urlConfig";


const desiredWidth = ref('300px');
const desiredHeight = ref('auto');
const socialApp = SocialMediaApp_IMAGE;
const en = EngTm_IMAGE;
const randomQuote = RandomQuote_IMAGE;
const drumMachine = DRUMMACHINE_IMAGE;
const markdown = MarkdownPreviewer_IMAGE;
const calculator = CALCULATOR_IMAGE;
const pomodoro = Pomodoro_IMAGE;

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


</style>
