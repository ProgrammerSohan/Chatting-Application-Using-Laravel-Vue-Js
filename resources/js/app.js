import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js';
import Notification from './components/Notification.vue';

const app = createApp({});

app.component('notification-component', Notification);

app.mount("#app");
