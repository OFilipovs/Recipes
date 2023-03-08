<template>
    <div class="form-container">
        <form @submit.prevent="storeRecipe(recipe)">

            <h2>Add your recipe</h2>
            <!-- Title -->
            <div class="input-container">
                <label for="recipe-title">
                </label>
                <input v-model="recipe.title" id="recipe-title" type="text" placeholder="recipe title">
                <div>
                <span class="error" v-for="message in validationErrors?.title">
                    {{ message }}
                </span>
                </div>
            </div>

            <!-- Content -->
            <div class="input-container">
                <label for="recipe-description" class="">

                </label>
                <textarea v-model="recipe.description" id="recipe-description" class="textarea" placeholder="recipe description"></textarea>
                <div>
                <span class="error" v-for="message in validationErrors?.description">
                    {{ message }}
                </span>
                </div>
            </div>

            <!-- Category -->
            <div class="input-container">
                <label for="recipe-category" class="">

                </label>
                <select v-model="recipe.category_id" id="recipe-category">
                    <option value="" class="" selected> Choose category </option>
                    <option v-for="category in categories" :value="category.id">
                        {{ category.name }}
                    </option>
                </select>
                <div>
                <span class="error" v-for="message in validationErrors?.category_id">
                    {{ message }}
                </span>
                </div>
            </div>

            <!-- Buttons -->
            <div class="button-container">
                <button class="save-button">Save</button>
            </div>
        </form>
    </div>

</template>

<script>
import { onMounted, reactive } from "vue";
import useCategories from "../../composables/categories";
import useRecipes from "../../composables/recipes";

export default {
setup() {
const recipe = reactive({
title: '',
description: '',
category_id: ''
})

const { categories, getCategories } = useCategories()
const { storeRecipe, validationErrors } = useRecipes()
onMounted(() => {
getCategories()
})

return {
categories,
recipe,
storeRecipe,
validationErrors
}
}
}
</script>

<style>

    h2 {
        text-align: center;
    }

    select {
        padding: 0 0 0 12px;
        color: #3C84AB;
        font-family: "Times New Roman", Times, serif;
    }

    input, textarea, select {
        display: block;
        -webkit-appearance: none;
        width: 34rem;
        height: 3.2rem;
        border: none;
        border-radius: 0.625rem;
        box-sizing: border-box;
        -moz-appearance: none;
        appearance: none;
        background-color: #9DF1DF;
    }

    .form-container {
        display: flex;
        justify-content: center;
        margin: 6rem auto;
        padding: 6rem 1.375rem 0 1.375rem;
        max-width: 40rem;
        height: 41rem;
        border-radius: 0.625rem;
        background-color: #E3F6FF;
        box-sizing: border-box;
        border-bottom: 2px solid #FFEA20;
    }

    .form-container label {
        display: block;
    }

    input::placeholder, textarea::placeholder {
        -webkit-appearance: none;
        appearance: none;
        line-height: 1.313rem;
        font-size: 1.3rem;
        font-weight: 400;
        padding: 14px 0 16px 12px;
        font-family: "Times New Roman", Times, serif;
        color: #3C84AB;

    }

    .textarea {
        padding-bottom: 16px;
    }

    .button-container {
        display: flex;
        justify-content: center;
    }

    .save-button {
        appearance: none;
        box-sizing: border-box;
        margin-top: 1.25rem;
        width: 12.15rem;
        height: 3.2rem;
        border: none;
        border-radius: 20px;
        background-color: #9DF1DF;
    }

    .error {
        color: red;
    }

    .input-container {
        margin-bottom: 1.25rem;
    }

</style>
