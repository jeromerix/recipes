<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RecipeController extends Controller
{
  public function __construct()
{
  $this->middleware('verified')->except(['index', 'show']);
}
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
        //dd($request);
        //validation
        $request->validate(
            [
                'name' => 'required|string',
                'instruction' => 'required|string',
                'method' => 'required|string|',
                'sort' => 'required|string',
                'how_many' => 'required|integer',
                'cuisine' => 'required|string|alpha',
                'prep_time' => 'required|integer',
                'image_link' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

        //recipe image name
        $timestamp = Carbon::now()->toDateString();
        $time =  Carbon::now()->timestamp;
        $custom_file_name = $timestamp.$time.'-'.$request->file('image_link')->getClientOriginalName();
        $path = $request->file('image_link')->storeAs('recipe_images',$custom_file_name);

        $recipe = new Recipe; // need to also update ingredients belonging to new recipeand associate them with each other
        $recipe->name = $request->input('name');
        $recipe->instruction = $request->input('instruction');
        $recipe->method = $request->input('method');
        $recipe->sort = $request->input('sort');
        $recipe->how_many = $request->input('how_many');
        $recipe->cuisine = $request->input('cuisine');
        $recipe->prep_time = $request->input('prep_time');
        $recipe->image_link = "/".$path;
        $recipe->save(); // Still need to figure out how to add new records in pivot tables.

        $ingredients = $request->input('ingredient');
        $units = $request->input('unit');
        $amounts = $request->input('amount');
        for($i = 0; $i < count($ingredients); $i++){
            $recipe->ingredients()->attach($ingredients[$i],['unit' => $units[$i], 'amount' => $amounts[$i]]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return view ('pages.recipe',['recipe' => $recipe]);
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
