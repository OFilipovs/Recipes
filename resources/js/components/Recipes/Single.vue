<template>
    <section class="single-container">
        <div class="single-recipe">
            <h1>{{ recipe.title }}</h1>
            <h2>Description:</h2>
            <p>{{ recipe.description }}</p>
            <p><span>Time: </span>{{ recipe.prep_time }} min</p>
        </div>
    </section>
</template>

<script>
import { onMounted } from "vue";
import { useRoute } from "vue-router";
import useRecipes from "../../composables/recipes";

export default {
    setup() {
        const { recipe, getSingleRecipe } = useRecipes()
        const route = useRoute()

        onMounted(() => {
            getSingleRecipe(route.params.id)
        })

        return {
            recipe
        }
    }
}
</script>

<style>
.single-container {
    background-color: #E3F6FF;
}
.single-recipe {
    padding: 20px;
    max-width: 120rem;
    margin: 0 auto;
}

.single-recipe h1 {
    color: #FFEA20;
    text-align: center;
    font-size: 36px;
    margin-bottom: 20px;
}

.single-recipe p {
    color: black;
    font-size: 18px;
    margin-bottom: 10px;
}

@media (max-width: 767px) {
    .single {
        padding: 10px;
    }

    .single h1 {
        font-size: 28px;
    }

    .single p {
        font-size: 16px;
    }
}

</style>
