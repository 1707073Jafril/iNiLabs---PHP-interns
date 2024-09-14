import './bootstrap';
import { createApp } from 'vue';
import ToDo from './components/ToDoApp.vue';

const app = createApp({});
app.component('todo-app', ToDo);
app.mount('#app');

