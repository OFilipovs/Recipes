<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeStoreRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Recipe::with('category', 'author')->get();
    }

    public function show(Recipe $recipe): Recipe
    {
        return $recipe;
    }

    public function store(RecipeStoreRequest $request): Recipe
    {
        return Recipe::create($request->validated());
    }
}
