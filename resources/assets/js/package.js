require('./bootstrap');

window.Vue = require('vue');

Vue.component('dropzone', require('./dropzone.vue'));

const app = new Vue({
	el: '#app'
});