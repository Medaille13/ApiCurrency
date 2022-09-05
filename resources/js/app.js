import './bootstrap';

import { createApp} from 'vue';
import router from '';
import Login from '';
import Dashboard from '';


createApp({
        components: {
            Login,
            Dashboard,
        }
}).use(router).mount('#app')