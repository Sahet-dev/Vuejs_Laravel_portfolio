<template>
    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white py-20 px-4">
        <div class="max-w-3xl mx-auto space-y-12">
            <!-- Header Section -->
            <div class="text-center space-y-4" v-motion-slide-top>
                <h1 class="text-5xl font-bold bg-gradient-to-r from-teal-400 to-blue-500 bg-clip-text text-transparent">
                    Get in Touch
                </h1>
                <p class="text-slate-300 text-lg">
                    Let's create something amazing together
                </p>
            </div>

            <!-- Contact Form -->
            <div class="relative bg-white/5 backdrop-blur-lg border-0 shadow-2xl rounded-lg overflow-hidden"
                  >
                <div class="p-8">
                    <form @submit.prevent="submitForm" class="space-y-8">
                        <div class="space-y-6">
                            <!-- Name Input -->
                            <div class="relative">
                                <input
                                    type="text"
                                    v-model="form.name"
                                    @focus="focusedField = 'name'"
                                    @blur="focusedField = ''"
                                    class="w-full bg-transparent border rounded-md border-slate-600 text-white placeholder-slate-400 h-12 px-4 transition-all duration-300 focus:outline-none"
                                    :class="{ 'border-teal-400 ring-1 ring-teal-400': focusedField === 'name' }"
                                    placeholder="Your Name"
                                    required
                                >
                                <div
                                    class="absolute bottom-0 left-0 h-0.5 bg-gradient-to-r from-teal-400 to-blue-500 transition-all duration-300"
                                    :class="{ 'w-full': focusedField === 'name', 'w-0': focusedField !== 'name' }"
                                />
                            </div>

                            <!-- Email Input -->
                            <div class="relative">
                                <input
                                    type="email"
                                    v-model="form.email"
                                    @focus="focusedField = 'email'"
                                    @blur="focusedField = ''"
                                    class="w-full bg-transparent border rounded-md border-slate-600 text-white placeholder-slate-400 h-12 px-4 transition-all duration-300 focus:outline-none"
                                    :class="{ 'border-teal-400 ring-1 ring-teal-400': focusedField === 'email' }"
                                    placeholder="Your Email"
                                    required
                                >
                                <div
                                    class="absolute bottom-0 left-0 h-0.5 bg-gradient-to-r from-teal-400 to-blue-500 transition-all duration-300"
                                    :class="{ 'w-full': focusedField === 'email', 'w-0': focusedField !== 'email' }"
                                />
                            </div>

                            <!-- Message Input -->
                            <div class="relative">
                <textarea
                    v-model="form.message"
                    @focus="focusedField = 'message'"
                    @blur="focusedField = ''"
                    class="w-full bg-transparent border rounded-md border-slate-600 text-white placeholder-slate-400 p-4 h-32 resize-none transition-all duration-300 focus:outline-none"
                    :class="{ 'border-teal-400 ring-1 ring-teal-400': focusedField === 'message' }"
                    placeholder="Your Message"
                    required
                />
                                <div
                                    class="absolute bottom-0 left-0 h-0.5 bg-gradient-to-r from-teal-400 to-blue-500 transition-all duration-300"
                                    :class="{ 'w-full': focusedField === 'message', 'w-0': focusedField !== 'message' }"
                                />
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button
                            type="submit"
                            class="w-full h-12 bg-gradient-to-r from-teal-400 to-blue-500 text-white rounded-md font-medium transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg"
                            :class="{ 'bg-green-500': isSubmitted }"
                        >
                            {{ isSubmitted ? 'Message Sent!' : 'Send Message' }}
                        </button>
                    </form>
                </div>
            </div>

            <!-- Social Links -->
            <div class="text-center space-y-6"  >
                <h2 class="text-2xl font-semibold text-white">Connect With Me</h2>

                <ContactLinks />
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref} from 'vue'
import ContactLinks from "@/Pages/Profile/main/ContactLinks.vue";
import axios from 'axios'




const focusedField = ref('')

const form = ref({
    name: '',
    email: '',
    message: ''
})
const successMessage = ref('')
const errorMessage = ref('')
const isSubmitted = ref(false)

const submitForm = async () => {
    try {
        const response = await axios.post('/api/contact', form.value)
        if (response.status === 200) {
            successMessage.value = 'Message sent successfully!'
            form.value = { name: '', email: '', message: '' }
            isSubmitted.value = true
        }
    } catch (error) {
        if (error.response && error.response.status === 409) {
            errorMessage.value = 'Conflict error. Please try again.'
        } else {
            errorMessage.value = 'Failed to send message. Please try again.'
        }
    }
}



</script>

<style scoped>
/* Add any additional custom styles here */
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus {
    -webkit-text-fill-color: white;
    -webkit-box-shadow: 0 0 0px 1000px transparent inset;
    transition: background-color 5000s ease-in-out 0s;
}
</style>
