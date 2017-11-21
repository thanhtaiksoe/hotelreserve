
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

<<<<<<< HEAD
Vue.component('example', require('./components/Example.vue'));
=======
Vue.component('example-component', require('./components/ExampleComponent.vue'));
>>>>>>> 4027de2893bbe97aebd7dfa0c63894079e3623da

const app = new Vue({
    el: '#app'
});
