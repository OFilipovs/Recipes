<template>
    <section class="container">
        <div class="grid cards ">
            <div v-for="recipe in recipes">
                <router-link :to="{ name: 'recipes.single', params: {id: recipe.id} }" class="router-link">
                    <div class="relative-container">
                        <div class="recipe">
                            <div class="tag-cointainer">
                                <span class="tag">{{ recipe.category.name }}</span>
                            </div>
                            <div>
                                <img src="@/assets/images/placeholder.png" class="recipe-img" alt="meal">
                                <div class="recipe-data">
                                    <p class="recipe-title">{{ recipe.title }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </router-link>
            </div>
        </div>
    </section>
</template>

<script>
    import { onMounted } from "vue";
    import useRecipes from "../../composables/recipes";

    export default {
        setup () {
            const { recipes, getRecipes } = useRecipes()
            onMounted(
                () => {
                    getRecipes()
                }
            )
            return {
                recipes,
            }
        }
    }
</script>

<style>
    .grid {
        display: grid;
        gap: 9.6rem;
        grid-template-columns: repeat(3, 1fr);
    }

    .container {
        background-color: #E3F6FF;
    }

    .cards {
        margin: 0 auto;
        padding: 0 3.2rem;
        padding-top: 5.2rem;
        font-size: 2.5rem;
        max-width: 120rem;
    }

    .tag-cointainer {
        position: absolute;
        top: -20px;
        left: 0.5fr;
    }

    .recipe-container {

    }

    .recipe {
        display: flex;
        flex-direction: column;
        gap: 0;
        position: relative;
        align-items: center;
        border-radius: 11px;
        transition: all .2s ease;
        background-color: whitesmoke;
    }

    .recipe:hover {
        background-position: left;
        transform: scale(1.05);
        box-shadow: 1rem 10px #8DCBE6;
    }

    .recipe-img {
        width: 100%;
        border-bottom: 2px solid #FFEA20;
    }

    .recipe-title {
        font-size: 2rem;
        font-weight: 600;
    }

    .recipe-data {
        padding: 0 4.8rem 4.8rem 4.8rem;
    }

    .tag {
        display: inline-block;
        padding: 0.4rem 0.8rem;
        font-size: 1.2rem;
        text-transform: uppercase;
        background-color: #9DF1DF;
        border-radius: 100px;
    }

    .router-link:link {
        text-decoration: none;
        color: #333;
    }
    .router-link:visited {
        text-decoration: none;
        color: #333;
    }

    .router-link {

    }

    .router-link:hover {

    }

    @media (max-width: 660px) {
        .grid {
            gap: 4.6rem;
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
