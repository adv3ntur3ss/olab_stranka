import Vue from 'vue'
import VueRouter from 'vue-router'
// import header from '../plugins/visivig/layout/layout-header.vue'
import pageHome from '../plugins/visivig/pages/page-home.vue'
import page2 from '../plugins/visivig/pages/page-2%.vue'
import nasTim from '../plugins/visivig/pages/page-nasTim.vue'
import openlaby from '../plugins/visivig/pages/page-openlaby.vue'
import preUcitelov from '../plugins/visivig/pages/page-preUcitelov.vue'
import pridajteSa from '../plugins/visivig/pages/page-pridajteSa.vue'
import novinky from '../plugins/visivig/pages/page-novinky.vue'
// import footer from '../plugins/visivig/layout/layout-footer.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'pageHome',
    component: pageHome
  }, 
  {
    path: '/',
    name: 'page-2',
    component: page2
  },
  {
    path: '/',
    name: 'nasTim',
    component: nasTim
  },
  {
    path: '/',
    name: 'novinky',
    component: novinky
  },
  {
    path: '/',
    name: 'openlaby',
    component: openlaby
  },
  {
    path: '/',
    name: 'preUcitelov',
    component: preUcitelov
  },
  {
    path: '/',
    name: 'pridajteSa',
    component: pridajteSa
  },
  // {
  //   path: '/',
  //   name: 'footer',
  //   component: footer
  // },
  // {
  //   path: "/", 
  //   name: 'header',
  //   component: header 
  // },
 

 
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
