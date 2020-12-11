

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)



const routes = [
    { path: '/profile', component: require('./components/ExampleComponent.vue').default},
    { path: '/active', component: require('./components/active.vue').default }
  ]

  const router = new VueRouter({
    routes // short for `routes: routes`
  })


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('footer-component', require('./components/widgets/FooterComponent.vue').default);
Vue.component('header-component', require('./components/widgets/HeaderComponent.vue').default);
Vue.component('side-nav', require('./components/widgets/SideNav.vue').default);

const app = new Vue({
    el: '#app',
    router
});
