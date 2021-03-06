import Vue from "vue"
import Router from "vue-router"
import routes from '../app/routes'
import beforeEach from './beforeEach'

Vue.use(Router);

 const router = new Router({
    routes: routes,
    mode: "history",
    linkActiveClass: 'active',
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }
    }
});

router.beforeEach(beforeEach);

export default router;