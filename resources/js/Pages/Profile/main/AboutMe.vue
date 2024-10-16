<template>
    <div class="text-gray-200 font-sans bg-gray-900 min-h-screen">

        <section class="container mx-auto py-16">

            <div class="max-w-2xl mx-auto space-y-12 text-gray-800">
                <!-- About Me Section -->
                <Transition appear @before-enter="beforeEnter" @enter="enter" @after-enter="afterEnter">
                    <h2 v-if="showTitle" class="text-4xl font-bold text-center mb-6 text-gray-100 tracking-wider">About Me</h2>
                </Transition>

                <div class="bg-gray-800 rounded-lg p-8 shadow-xl transition-transform transform hover:scale-105">
                    <p class="text-lg leading-relaxed text-justify text-gray-100">
                        Hi, I am Sahet from Turkmenistan, passionate about frontend and backend development. I care about writing clean code and I
                        enjoy learning about web development. I am currently seeking opportunities to work in a dynamic environment that fosters my growth
                        into a full-fledged web developer.
                    </p>
                </div>

                <!-- Skills and Expertise Section -->
                <div class="animated-element">
                    <h2 class="text-3xl font-bold mb-6 text-center text-gray-100 tracking-widest">Skills & Expertise</h2>
                    <p class="text-lg mb-6 text-gray-300 text-center">
                        I am proficient in technologies such as HTML, CSS, JavaScript, Vue.js, PHP, and Laravel. I specialize in crafting intuitive and aesthetically pleasing web applications.
                    </p>

                    <div class="flex justify-center space-x-6">
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
                    <h2 class="text-3xl font-bold text-center mb-6 text-gray-100 tracking-wider">Certifications & Achievements</h2>
                    <ul class="list-disc list-inside space-y-2 text-gray-300">
                        <li><a href="https://symfonycasts.com/certificates/9B3AB07FC146" class="hover:underline hover:text-blue-400">Doctrine, Symfony & the Database</a></li>
                        <li><a href="https://symfonycasts.com/certificates/507536ACC139" class="hover:underline hover:text-blue-400">Symfony 5 Security: Authenticators</a></li>
                        <li><a href="https://symfonycasts.com/certificates/7F544974C149" class="hover:underline hover:text-blue-400">API Platform 3</a></li>
                        <li><a href="https://symfonycasts.com/certificates/C9F320DBC150" class="hover:underline hover:text-blue-400">API Platform: Secure your Treasures</a></li>
                        <li><a href="https://www.freecodecamp.org/certification/Sahet/front-end-development-libraries" class="hover:underline hover:text-blue-400">FreeCodeCamp Certification</a></li>
                    </ul>
                </div>

                <!-- Education Section -->
                <div class="animated-element">
                    <h2 class="text-3xl font-bold text-center mb-6 text-gray-100 tracking-widest">Education</h2>
                    <div class="bg-gray-800 rounded-lg p-8 shadow-lg transition-transform transform hover:scale-105">
                        <h3 class="text-xl font-bold mb-2 text-gray-100">
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
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export default {
    data() {
        return {
            imagePath: "public/img/img.png",
        };
    },
    setup() {
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

        elements.forEach((element) => {
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
                    },
                },
            });
        });
    },
};
</script>

<style scoped>
.text-gray-100 {
    color: #E5E7EB;
}

.bg-gray-800 {
    background-color: #2D3748;
}

.container {
    padding: 2rem;
}

.shadow-xl {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25);
}

.hover\:scale-105:hover {
    transform: scale(1.05);
}

.hover\:underline:hover {
    text-decoration: underline;
}

.flex {
    display: flex;
}

.justify-center {
    justify-content: center;
}

.space-x-6 > * + * {
    margin-left: 1.5rem;
}

.tracking-wider {
    letter-spacing: 0.05em;
}

.tracking-widest {
    letter-spacing: 0.1em;
}
</style>
