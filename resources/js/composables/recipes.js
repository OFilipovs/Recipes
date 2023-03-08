import { ref } from 'vue'
import { useRouter } from 'vue-router'

export default function useRecipes() {
    const recipes = ref({})
    const recipe = ref({})
    const router = useRouter()
    const validationErrors = ref([])

    const getRecipes = async () => {
        axios.get('/api/recipes')
            .then(response => {
                recipes.value = response.data
            })
    }

    const getSingleRecipe = async (id) => {
        axios.get('/api/recipes/' + id)
            .then(response => {
                recipe.value = response.data
            })
    }

    const storeRecipe = async (recipe) => {
        axios.post('/api/recipes', recipe)
            .then(response => {
                console.log(response)
                router.push({ name: 'recipes.index' })
            })
            .catch(
                error => {
                    console.log(error)
                    if (error.response?.data) {
                        validationErrors.value = error.response.data.errors
                    }
                }
            )
    }

    return {
        recipes,
        recipe,
        validationErrors,
        getRecipes,
        getSingleRecipe,
        storeRecipe
    }
}
