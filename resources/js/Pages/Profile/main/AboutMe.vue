<template>
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white py-20 px-4 font-roboto-mono">
        <div class="max-w-3xl mx-auto space-y-12">
            <!-- About Me Section -->
            <div class="text-center space-y-4" v-motion-slide-top>
                <h1 class="text-5xl font-bold bg-gradient-to-r from-teal-400 to-blue-500 bg-clip-text text-transparent">
                    About Me
                </h1>
                <p class="text-slate-300 text-lg">
                    Hi, I'm Sahet from Turkmenistan, passionate about frontend and backend development. I like and care about writing reusable code and am constantly seeking new challenges to improve my skills.
                </p>
            </div>

            <!-- Biography Card -->
            <div class="relative bg-white/5 backdrop-blur-lg border-0 shadow-2xl rounded-lg overflow-hidden p-8" >
                <div class="space-y-6">
                    <p class="text-lg text-slate-300">
                        I enjoy exploring web technologies and building projects that have a real-world impact. My journey started with simple websites and has now grown into complex RESTful WEB applications.
                    </p>
                    <p class="text-lg text-slate-300">
                        In my free time, I love learning new frameworks, improving my UI/UX design skills, and I am ready contribute to projects.
                    </p>
                    <p class="text-lg text-slate-300">
                        I'm looking forward to working in a dynamic environment that values creativity, teamwork, and continuous growth.
                    </p>
                </div>
            </div>

            <!-- Skills Section -->
            <div class="text-center space-y-4" >
                <h2 class="text-2xl font-semibold text-white">My Skills</h2>
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4 text-slate-300">
                    <div v-for="skill in skills" :key="skill" class="transform hover:scale-105 transition-transform duration-300">
                        <span class="inline-block px-4 py-2 bg-slate-700 rounded-full">{{ skill }}</span>
                    </div>
                </div>
            </div>

            <div class="text-center space-y-4">
                <h2 class="text-2xl font-semibold text-white">Education</h2>

                <p>Bachelor’s Degree, Technical University of Cluj-Napoca. Faculty of Industrial Engineering, Robotics and Production
                    Management
                </p>
                <p class="text-gray-500 ">2021 - current</p>


            </div>
        </div>

    </div>
</template>

<script setup>
import { ref } from 'vue'

const skills = ref([
    'HTML', 'CSS', 'JavaScript ES6', 'Vue.js', 'Java', 'Spring / Spring-boot', 'PHP',  'SQL', 'MySQL', 'PostgreSQL',  'Laravel', 'Git', 'REST API', 'Ubuntu', 'Docker', 'GitHub',
])
</script>

<style scoped>
</style>
