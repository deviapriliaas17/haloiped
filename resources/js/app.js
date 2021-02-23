/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
import App from './components/App.vue';
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(VueSweetalert2);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import AdminBlogCreate from './components/Admin/Blog/create.vue';
import AdminBlog from './components/Admin/Blog/index.vue';
import AdminBlogCategoryCreate from './components/Admin/Blog/CreateCategory.vue';
import AdminBlogCategory from './components/Admin/Blog/IndexCategory.vue';
import AdminBlogCategoryEdit from './components/Admin/Blog/EditCategory.vue';
import AdminBlogDetail from './components/Admin/Blog/Show.vue';
import AdminLayoutHome from './components/Admin/Layout/Home.vue';
import AdminLayoutAbout from './components/Admin/Layout/About.vue';
import AdminLayoutContact from './components/Admin/Layout/Contact.vue';
import AdminLayoutBlog from './components/Admin/Layout/Blog.vue';
import AdminLayoutPortfolio from './components/Admin/Layout/Portfolio.vue';
import AdminPortfolio from './components/Admin/Portfolio/Index.vue';
import AdminPortfolioCreate from './components/Admin/Portfolio/Create.vue';
import AdminPortfolioEdit from './components/Admin/Portfolio/Edit.vue';
import AdminProfile from './components/Admin/MyProfile.vue';
import AdminSkillCreate from './components/Admin/Skill/Create.vue';
import AdminSkillIndex from './components/Admin/Skill/Index.vue';
import AdminSkillEdit from './components/Admin/Skill/Edit.vue';

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);

const routes = [{
        name: 'admin-profile',
        path: '/admin/profile/edit',
        component: AdminProfile
    },
    {
        name: 'admin-blog-create',
        path: '/admin/blog/create',
        component: AdminBlogCreate,
    },
    {
        name: 'admin-blog',
        path: '/admin/blog',
        component: AdminBlog,
    },
    {
        name: 'admin-blog-detail',
        path: '/admin/blog/:id',
        component: AdminBlogDetail,
    },
    {
        name: 'admin-blog-category-create',
        path: '/admin/blog/category/create',
        component: AdminBlogCategoryCreate
    },
    {
        name: 'admin-blog-category',
        path: '/admin/blog/category',
        component: AdminBlogCategory
    },
    {
        name: 'admin-blog-category-edit',
        path: '/admin/blog/category/edit/:id',
        component: AdminBlogCategoryEdit
    },
    {
        name: 'admin-layout-home',
        path: '/admin/layout/home',
        component: AdminLayoutHome
    },
    {
        name: 'admin-layout-about',
        path: '/admin/layout/about',
        component: AdminLayoutAbout
    },
    {
        name: 'admin-layout-contact',
        path: '/admin/layout/contact',
        component: AdminLayoutContact,
    },
    {
        name: 'admin-layout-blog',
        path: '/admin/layout/blog',
        component: AdminLayoutBlog,
    },
    {
        name: 'admin-layout-portfolio',
        path: '/admin/layout/portfolio',
        component: AdminLayoutPortfolio,
    },
    {
        name: 'admin-portfolio',
        path: '/admin/portfolio',
        component: AdminPortfolio,
    },
    {
        name: 'admin-portfolio-create',
        path: '/admin/portfolio/create',
        component: AdminPortfolioCreate,
    },
    {
        name: 'admin-portfolio-edit',
        path: '/admin/portfolio/edit/:id',
        component: AdminPortfolioEdit,
    },
    {
        name: 'admin-skill-create',
        path: '/admin/skill/create',
        component: AdminSkillCreate,
    },
    {
        name: 'admin-skill',
        path: '/admin/skill',
        component: AdminSkillIndex,
    },
    {
        name: 'admin-skill-edit',
        path: '/admin/skill/edit/:id',
        component: AdminSkillEdit,
    },
];

const router = new VueRouter({
    mode: 'history',
    routes: routes
})
const app = new Vue(
    Vue.util.extend({ router }, App)).$mount('#content');