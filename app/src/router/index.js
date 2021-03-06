import Vue from 'vue'
import VueRouter from 'vue-router'
import pageHome from '../plugins/visivig/pages/page-home.vue'
import page2 from '../plugins/visivig/pages/page-2-percent.vue'
import nasTim from '../plugins/visivig/pages/page-nas-tim.vue'
import openlaby from '../plugins/visivig/pages/page-openlaby.vue'
import preUcitelov from '../plugins/visivig/pages/page-pre-ucitelov.vue'
import pridajteSa from '../plugins/visivig/pages/page-pridajte-sa.vue'
import novinky from '../plugins/visivig/pages/page-novinky.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'pageHome',
    component: pageHome
  },
  {
    path: '/home',
    name: 'pageHome',
    component: pageHome
  }, 
  {
    path: '/2percent',
    name: '2percent',
    component: page2
  },
  {
    path: '/nas-tim',
    name: 'nasTim',
    component: nasTim
  },
  {
    path: '/novinky',
    name: 'novinky',
    component: novinky
  },
  {
    path: '/openlaby',
    name: 'openlaby',
    component: openlaby
  },
  {
    path: '/pre-ucitelov',
    name: 'preUcitelov',
    component: preUcitelov
  },
  {
    path: '/pridaj-sa',
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
  routes,
  linkActiveClass: 'active'
})

export default router
