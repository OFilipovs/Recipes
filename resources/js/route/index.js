import { createRouter, createWebHistory } from "vue-router"
import RecipesIndex from '../components/Recipes/Index.vue'
import RecipesSingle from '../components/Recipes/Single.vue'
import RecipesCreate from '../components/Recipes/Create.vue'

const routes = [
    {
        path: '/',
        name: 'recipes.index',
        component: RecipesIndex,
    },
    {
        path: '/recipes/:id',
        name: 'recipes.single',
        component: RecipesSingle,
    },
    {
        path: '/recipes/create',
        name: 'recipes.create',
        component: RecipesCreate,
    }
]

export default createRouter({
    history: createWebHistory(),
    routes,
})
