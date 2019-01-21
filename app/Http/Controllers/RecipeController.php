<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = \App\Recipe::All();

        return view('test.recipe2', ['recipes' => $recipes]);

        $categories = \App\Category::All();

        return view('pages.index', ['recipes' => $recipes], ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = \App\Ingredient::All();

        return view('backend.addrecipe', ['ingredients' => $ingredients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $recipe = new Recipe; // need to also update ingredients belonging to new recipeand associate them with each other
        $recipe->name = $request->input('name');
        $recipe->instruction = $request->input('instruction');
        $recipe->method = $request->input('method');
        $recipe->sort = $request->input('sort');
        $recipe->how_many = $request->input('how_many');
        $recipe->cuisine = $request->input('cuisine');
        $recipe->prep_time = $request->input('prep_time');
        $recipe->image_link = $request->input('image_link');
        $recipe->save(); // Still need to figure out how to add new records in pivot tables.

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }

    public function fetch(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = DB::table('apps_ingredients')
                ->where('ingredient', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach ($data as $row) {
                $output .= '
       <li><a href="#">' . $row->ingredient . '</a></li>
       ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }
}
