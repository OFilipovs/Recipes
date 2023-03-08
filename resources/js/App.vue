<template>
    <header class="">
        <div class="header">
            <h1 class="header-title">Oscar's Kitchen</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><router-link :to="{ name: 'recipes.index' }" class="main-nav-link">Home</router-link></li>
                    <li><router-link :to="{ name: 'recipes.create' }" class="main-nav-link">Add recipe</router-link></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <router-view></router-view>
    </main>
    <footer>
        <p>Copyright © 2023 My HTML Page</p>
    </footer>
</template>

<style>
   .header {
       display: flex;
       justify-content: space-between;
       align-items: center;
       margin: 0 auto;
       padding: 0 3.2rem;
       max-width: 120rem;
       border-bottom: 2px solid #FFEA20;

   }

   .main-nav-list {
        display: flex;
        list-style: none;
        gap: 3.2rem;
   }

   .main-nav-link:link,
   .main-nav-link:visited {
       color: #333;
       text-decoration: none;
       font-weight: 500;
       font-size: 1.8rem;
       transition: all 0.3s;
   }

   .main-nav-link:hover,
   .main-nav-link:active {
         color: #ffa200;
   }

   .header-title {
       font-size: 3.2rem;
       font-weight: 500;
       color: #333;
   }

   footer {
       max-width: 120rem;
       margin: 0 auto;
       margin-top: 5rem;
       display: flex;
       justify-content: center;
   }
</style>

<script setup>
    import {useRoute} from "vue-router";

    const route = useRoute();
</script>

