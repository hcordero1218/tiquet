<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class StoreController extends Controller
{
    public function index(){
    	$products = Producto::all();
    	//dd($products);
    	return view('store.index', compact('products'));
    }

    public function abono(){
        $product = Producto::all();
        //dd($abonos);
        return view('store.abono', compact('product'));
    }

    public function show($slug){
    	$product = Producto::where('slug', $slug)->first();
    	//dd($product);
    	return view('store.show', compact('product'));
    }

}
