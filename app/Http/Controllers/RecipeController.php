<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;


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
                'prep_time' => 'required|integer'

            ]);


        if (property_exists($request,'image_link')) {
        $timestamp = Carbon::now()->toDateString();
        $time =  Carbon::now()->timestamp;
        $custom_file_name = $timestamp.$time.'-'.$request->file('image_link')->getClientOriginalName();
        $path = $request->file('image_link')->storeAs('recipe_images',$custom_file_name);
        $recipe = new Recipe;
        $recipe->user_id = Auth::user()->id;
        $recipe->name = $request->input('name');
        $recipe->instruction = $request->input('instruction');
        $recipe->method = $request->input('method');
        $recipe->sort = $request->input('sort');
        $recipe->how_many = $request->input('how_many');
        $recipe->cuisine = $request->input('cuisine');
        $recipe->prep_time = $request->input('prep_time');
        $recipe->image_link = "/".$path;
        $recipe->save();


    }
        else {
        $recipe = new Recipe;
        $recipe->user_id = Auth::user()->id;
        $recipe->name = $request->input('name');
        $recipe->instruction = $request->input('instruction');
        $recipe->method = $request->input('method');
        $recipe->sort = $request->input('sort');
        $recipe->how_many = $request->input('how_many');
        $recipe->cuisine = $request->input('cuisine');
        $recipe->prep_time = $request->input('prep_time');
        $recipe->image_link = "/images/tableware.png";
        $recipe->save();
    }

        $ingredients = $request->input('ingredient');
        $units = $request->input('unit');
        $amounts = $request->input('amount');
        for($i = 0; $i < count($ingredients); $i++){
            $recipe->ingredients()->attach($ingredients[$i],['unit' => $units[$i], 'amount' => $amounts[$i]]);
        }
        return view('pages.recipe',['recipe' => $recipe])->with('message', 'You succesfully created the recipe.');

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

        $ingredients = \App\Ingredient::All();
        if (Auth::user()->id != $recipe->user_id)
         return redirect()->back()->with('message', 'You do not have access to that recipe');
        else return view('backend.editrecipe', ['recipe' => $recipe],['ingredients'=> $ingredients]);

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
        $request->validate(
            [
                'name' => 'required|string',
                'instruction' => 'required|string',
                'method' => 'required|string|',
                'sort' => 'required|string',
                'how_many' => 'required|integer',
                'cuisine' => 'required|string|alpha',
                'prep_time' => 'required|integer'

            ]);

            if (property_exists($request,'image_link')) {
            $timestamp = Carbon::now()->toDateString();
            $time =  Carbon::now()->timestamp;
            $custom_file_name = $timestamp.$time.'-'.$request->file('image_link')->getClientOriginalName();
            $path = $request->file('image_link')->storeAs('recipe_images',$custom_file_name);
            $recipe->ingredients()->detach();
            $recipe->user_id = Auth::user()->id;
            $recipe->name = $request->input('name');
            $recipe->instruction = $request->input('instruction');
            $recipe->method = $request->input('method');
            $recipe->sort = $request->input('sort');
            $recipe->how_many = $request->input('how_many');
            $recipe->cuisine = $request->input('cuisine');
            $recipe->prep_time = $request->input('prep_time');
            $recipe->image_link = "/".$path;
            $recipe->save();


        }else {
        $recipe->ingredients()->detach();
        $recipe->user_id = Auth::user()->id;
        $recipe->name = $request->input('name');
        $recipe->instruction = $request->input('instruction');
        $recipe->method = $request->input('method');
        $recipe->sort = $request->input('sort');
        $recipe->how_many = $request->input('how_many');
        $recipe->cuisine = $request->input('cuisine');
        $recipe->prep_time = $request->input('prep_time');
        
        $recipe->save();
        }

        $ingredients = $request->input('ingredient');
        $units = $request->input('unit');
        $amounts = $request->input('amount');
        for($i = 0; $i < count($ingredients); $i++){
            $recipe->ingredients()->attach($ingredients[$i],['unit' => $units[$i], 'amount' => $amounts[$i]]);
        }
        return view('pages.recipe',['recipe' => $recipe])->with('message', 'You succesfully updated the recipe.');
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
