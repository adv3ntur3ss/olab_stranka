import Vue from 'vue'
import VueRouter from 'vue-router'
import header from '../plugins/visivig/layout/layout-header.vue'
import pageHome from '../plugins/visivig/pages/page-home.vue'
import footer from '../plugins/visivig/layout/layout-footer.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: "/",
    name: 'header',
    component: header 
  },
  {
    path: '/',
    name: 'pageHome',
    component: pageHome
  },
  {
    path: '/',
    name: 'footer',
    component: footer
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
