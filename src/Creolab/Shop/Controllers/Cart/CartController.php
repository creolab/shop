<?php namespace Creolab\Shop\Controllers\Cart;

use Cart, Input, Response;
use Krustr\Repositories\Interfaces\EntryRepositoryInterface;

class CartController extends \Controller {

	/**
	 * Empty the cart
	 * @return Response
	 */
	public function emptyItems()
	{
		Cart::removeAll();

		return Response::json(array('result' => 'ok', 'item_count'  => Cart::quantity(), 'total_price' => Cart::total()));
	}

}
