<script setup>
import { RouterLink, RouterView } from 'vue-router';
import Lenis from 'lenis'
import {onMounted, ref } from 'vue'


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

// Show the first element for 4 seconds
setTimeout(() => {
  showFirst.value = false;
  showSecond.value = true;
}, 5000);

// Hide the second element after 4 seconds
setTimeout(() => {
  showSecond.value = false;
}, 8000);




</script>
<template>

  <div class="second-element">
    <div class="flex justify-center items-center mt-4 w-full">

      <div id="navbar" class="fixed z-10 backdrop-filter backdrop-blur-md rounded-full">
        <router-link to="/"> Home </router-link> |
        <router-link to="/projects"> Projects </router-link> |
        <router-link to="/about"> About </router-link>    |
        <router-link to="contact"> Contact </router-link> |
      </div>
    </div>
    <div class="">
      <router-view v-slot="{ Component }">
        <transition name="route" mode="out-in">
          <component :is="Component"></component>
        </transition>
      </router-view>
    </div>
  </div>


</template>

<style>

#navbar {
  padding: 10px;
}
#navbar a {
  font-weight: bold;
  color: #e49e58;
}
#navbar a.router-link-exact-active {
  color: #5daeec;
  text-decoration-line: underline
}

.route-enter-from{
  opacity: 0;
  transform: translateX(100px);
}
.route-enter-active{
  transition: all 0.3s ease-out;
}
.route-leave-to{
  opacity: 0;
  transform: translateX(-100px);
}
.route-leave-active{
  transition: all 0.3s ease-out;
}

</style>
