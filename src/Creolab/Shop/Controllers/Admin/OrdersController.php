<?php namespace Creolab\Shop\Controllers\Admin;

use Config, Input, Redirect, View;
use Creolab\Shop\Models\Order;
use Krustr\Controllers\Admin\BaseController;

/**
 * Class description
 * @author Boris Strahija <bstrahija@gmail.com>
 */
class OrdersController extends BaseController {

	public function index()
	{
		$orders = Order::all();

		return  View::make('shop::orders.index')->withOrders($orders);
	}

}
