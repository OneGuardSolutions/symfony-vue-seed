import Vue from 'vue'
import Router from 'vue-router'

import Homepage from '@/components/Homepage'

Vue.use(Router);

const router = new Router({
  routes: [
    {
      path: '/login',
      name: 'login',
      component: Homepage
    }
  ]
});

export default router
