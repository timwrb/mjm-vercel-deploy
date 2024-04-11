import type { RouterConfig } from "nuxt/schema";

export default <RouterConfig>{

    routes: (_routes) => [
        {
        name: 'search',
        path: '/search/:searchTerm/:tags*?/:radius/:zipCode?',
        component: () => import('~/pages/search/index.vue').then(r => r.default || r)
        },
    ],
}