<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class CartController extends Controller
{
	public function _construct(){
		if(!\Session::has('cart')) \Session::put('cart', array());
	}
    //Show Cart
	public function show(){
		//return \Session::get('cart');
		$cart = \Session::get('cart');
		$total = $this->total();
		return view('store.cart', compact('cart', 'total'));
	}

	// *** Tiquetes ****
    //Add Item
	public function add(Producto $producto){
		$cart = \Session::get('cart');
		$producto->quantity = '1';
		$cart[$producto->slug] = $producto;
		\Session::put('cart', $cart);

		return redirect()->route('cart-show');
	}

    //Delete item
	public function delete(Producto $producto){
		$cart = \Session::get('cart');
		unset($cart[$producto->slug]);
		\Session::put('cart', $cart);

		return redirect()->route('cart-show');
	}
    //Update item
	public function update(Producto $producto, $quantity){
		$cart = \Session::get('cart');
		$cart[$producto->slug]->quantity = $quantity;
		//dd($cart);
		\Session::put('cart', $cart);

		return redirect()->route('cart-show');
	}

    // Total
    private function total(){
    	$cart = \Session::get('cart');
    	$total = 0;
    	//dd($cart);
    	foreach($cart as $item) {
    	$total += $item->precio * $item->quantity;
    	}
    	return $total;
    }

    public function orderDetail(){
    	if(count(\Session::get('cart')) <= 0) return redirect()->route('home');
    	$cart = \Session::get('cart');
    	$total = $this->total();
    	return view('store.order-detail', compact('cart', 'total'));
    }
}
