/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('question-form-component', require('./components/QuestionFormComponent.vue').default);
Vue.component('test-form-component', require('./components/TestFormComponent.vue').default);
Vue.component('side-menu-component', require('./components/SideMenuComponent.vue').default);
Vue.component('copy-to-clipboard-component', require('./components/CopyToClipboardComponent.vue').default);
Vue.component('landing-component', require('./components/LandingComponent.vue').default);
Vue.component('delete-component', require('./components/DeleteComponent.vue').default);
Vue.component('change-language-guest-component', require('./components/ChangeLanguageGuestComponent.vue').default);
Vue.component('change-language-user-component', require('./components/ChangeLanguageUserComponent.vue').default);
Vue.component('settings-form-component', require('./components/SettingsFormComponent.vue').default);
Vue.component('show-solution-results-component', require('./components/ShowSolutionResultsComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
