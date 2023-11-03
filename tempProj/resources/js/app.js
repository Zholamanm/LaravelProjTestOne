import { createApp } from 'vue';
import ExampleComponent from './ExampleComponent.vue';

const app = createApp({});
app.component('example-component', ExampleComponent);
app.mount('#app');
console.log('HEllo');
