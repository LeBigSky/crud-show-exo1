<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function store (Request $request){
        $store= new Ingredient();
        $store->aliment = $request->aliment;
        $store->quantité = $request->quantité;
        $store->img = $request->img;
        $store->save();
        return redirect()-> route('home');
    }
    public function home (){
        $aliments= Ingredient::all();
        return view('home', compact('aliments'));
    }
    public function create (){
        return view('pages.createaliment');
    }
    public function show ($id){
        $ingredient= Ingredient::find($id);
        return view('pages.show', compact('ingredient'));
    }
    public function delete($id){
        $item= Ingredient::find($id);
        $item->delete();
        return redirect()-> route('home');
    }
}
