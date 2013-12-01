<?php

Route::get('backend/shop/orders', 'Creolab\Shop\Controllers\Admin\OrdersController@index');

// ! Cart items
Route::get('cart/items',         array('as' => 'cart.items.add',     'uses' => 'Creolab\Shop\Controllers\Cart\ItemController@store'));
Route::post('cart/items',        array('as' => 'cart.items.add',     'uses' => 'Creolab\Shop\Controllers\Cart\ItemController@store'));
Route::put('cart/items/{id}',    array('as' => 'cart.items.update',  'uses' => 'Creolab\Shop\Controllers\Cart\ItemController@update'));
Route::delete('cart/items/{id}', array('as' => 'cart.items.remove',  'uses' => 'Creolab\Shop\Controllers\Cart\ItemController@destroy'));

// ! Cart
Route::delete('cart/empty',      array('as' => 'cart.empty',   'uses' => 'Creolab\Shop\Controllers\Cart\CartController@emptyItems'));
Route::get('cart/empty',         array('as' => 'cart.empty',   'uses' => 'Creolab\Shop\Controllers\Cart\CartController@emptyItems'));
