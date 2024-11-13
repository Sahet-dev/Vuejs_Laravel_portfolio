import '../css/app.css';
import './bootstrap';
// Supports weights 100-900
import '@fontsource-variable/inter';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import router from './router';
import { MotionPlugin } from '@vueuse/motion'



const appName = import.meta.env.VITE_APP_NAME || 'Kakajanov';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(MotionPlugin)
            .use(ZiggyVue)
            .use(router)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
