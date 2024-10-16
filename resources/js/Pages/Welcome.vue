<template>
    <div class="w">
        <TabGroup v-model="selectedTab" as="div">
            <TabList  class="flex justify-center items-center mt-4 w-full fixed navbar z-10 backdrop-filter orange backdrop-blur-md rounded-full text-lg text-bold">
                <Tab v-slot="{ selected }" as="button" class="">
                    <span class="hidden md:block ml-2" :class="[selected ? 'selected-tab' : 'orange']">Home</span>
                </Tab>
                <Tab v-slot="{ selected }" as="button" class="">
                    <span class="hidden md:block ml-2" :class="[selected ? 'selected-tab' : 'orange']">Projects</span>
                </Tab>
                <Tab v-slot="{ selected }" as="button" class="">
                    <span @click="selectedTab = 1"
                          :class="[selected ? 'selected-tab' : 'orange']"
                          class="hidden md:block ml-2"  >About</span>
                </Tab>
                <Tab v-slot="{ selected }" as="button" class=" ">
                    <span class="hidden md:block ml-2" :class="[selected ? 'selected-tab' : 'orange']">Contact</span>
                </Tab>
            </TabList>

            <TabPanels class="">
                <TabPanel class="">
                    <transition name="tab" @before-enter="beforeEnter" @enter="enter" @leave="leave">
                        <Home  @handleGoToProjects="goToProjects"/>
                    </transition>
                </TabPanel>
                <TabPanel class="">
                    <transition name="tab" @before-enter="beforeEnter" @enter="enter" @leave="leave">
                        <Projects />
                    </transition>
                </TabPanel>
                <TabPanel class="">
                    <transition name="tab" @before-enter="beforeEnter" @enter="enter" @leave="leave">
                        <AboutMe />
                    </transition>
                </TabPanel>
                <TabPanel class="">
                    <transition name="tab" @before-enter="beforeEnter" @enter="enter" @leave="leave">
                        <Contact />
                    </transition>
                </TabPanel>
            </TabPanels>
        </TabGroup>
    </div>
</template>

<script setup>
import {RouterLink, RouterView} from 'vue-router';
import Lenis from 'lenis';
import {onMounted, ref} from 'vue';
import {TabGroup, TabList, Tab, TabPanels, TabPanel} from '@headlessui/vue';
import Home from "@/Pages/Profile/main/Home.vue";
import Projects from "@/Pages/Profile/main/Projects.vue";
import AboutMe from "@/Pages/Profile/main/AboutMe.vue";
import Contact from "@/Pages/Profile/main/Contact.vue";

const lenis = new Lenis();

lenis.on('scroll', (e) => {
    // console.log(e);
});

function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}

onMounted(() => {
    requestAnimationFrame(raf);
});

const showFirst = ref(true);
const showSecond = ref(false);


const selectedTab = ref(0); // Make sure this is shared and referenced correctly

const goToProjects = () => {
    console.log('clicked');
    selectedTab.value = 3; // Change to Projects tab
    console.log('selectedTab:', selectedTab.value);
};



// Show the first element for 4 seconds
setTimeout(() => {
    showFirst.value = false;
    showSecond.value = true;
}, 5000);

// Hide the second element after 4 seconds
setTimeout(() => {
    showSecond.value = false;
}, 8000);

const beforeEnter = (el) => {
    el.style.opacity = 0;
    el.style.transform = 'translateX(100px)';
};

const enter = (el, done) => {
    el.offsetHeight; // trigger reflow
    el.style.transition = 'all 0.3s ease-out';
    el.style.opacity = 1;
    el.style.transform = 'translateX(0)';
    done();
};

const leave = (el, done) => {
    el.style.transition = 'all 0.3s ease-out';
    el.style.opacity = 0;
    el.style.transform = 'translateX(-100px)';
    done();
};
</script>

<style>
#navbar {
    padding: 10px;
}

.orange {
    font-weight: bold;
    color: #e49e58;
}

#navbar a.router-link-exact-active {
    color: #5daeec;
    text-decoration-line: underline;
}

.selected-tab {
    color: #5daeec;
    text-decoration-line: underline;
}

.tab-enter-from {
    opacity: 0;
    transform: translateX(100px);
}

.tab-enter-active {
    transition: all 0.3s ease-out;
}

.tab-leave-to {
    opacity: 0;
    transform: translateX(-100px);
}

.tab-leave-active {
    transition: all 0.3s ease-out;
}
</style>
