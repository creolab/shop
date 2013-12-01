<?php namespace Creolab\Shop\Controllers\Cart;

class CartController extends \Controller {

	public function emptyItems()
	{
		Cart::emptyItems();

		Response::json(array('result' => 'ok', 'item_count' => 0));
	}

}
