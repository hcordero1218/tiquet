<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Inyeccion de dependencia

Route::bind('product', function($slug){	
	return App\Producto::where('slug', $slug)->first();
});

Route::bind('estadio', function($estadio){
 return App\Estadio::find($estadio);
});


///

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('comprar', ['as' => 'comprar', 'uses' => 'StoreController@index']);
Route::get('abono', ['as' => 'abono', 'uses' => 'StoreController@abono']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('shop','StoreController@index');

Route::get('product/{slug}',['as' => 'product-detail', 'uses' => 'StoreController@show']);

//Carro de compras
Route::get('cart/show', ['as' => 'cart-show', 'uses' => 'CartController@show']);

Route::get('order-detail', ['middleware' => 'auth', 'as' => 'order-detail',	'uses' => 'CartController@orderDetail']);

Route::get('cart/add/{product}', ['as' => 'cart-add',	'uses' => 'CartController@add']);

Route::get('cart/delete/{product}', ['as' => 'cart-delete',	'uses' => 'CartController@delete']);

Route::get('cart/update/{product}/{quantity?}', ['as' => 'cart-update', 'uses' => 'CartController@update']);

//Pago flow
Route::get('/paymente', function () {
    return view('paymente');
});
Route::post('orden', 'FlowController@orden')->name('orden');

Route::post('flow/exito', 'FlowController@exito')->name('flow.exito');
Route::post('flow/fracaso', 'FlowController@fracaso')->name('flow.fracaso');
Route::post('flow/confirmacion', 'FlowController@confirmacion')->name('flow.confirmacion');

// ADMIN-----

Route::get('admin', ['as' => 'home', 'uses' => 'PagesController@homeAdmin']);

Route::resource('admin/estadio', 'Admin\EstadioController');
Route::resource('admin/producto', 'Admin\ProductoController');
Route::resource('admin/abono', 'Admin\AbonoController');

//select 

