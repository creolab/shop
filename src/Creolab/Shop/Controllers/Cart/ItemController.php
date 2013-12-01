<?php namespace Creolab\Shop\Controllers\Cart;

use Cart, Input, Response;
use Krustr\Repositories\Interfaces\EntryRepositoryInterface;

class ItemController extends \Controller {

	/**
	 * Entry repository
	 * @var EntryRepositoryInterface
	 */
	protected $entries;

	/**
	 * Initialize dependencies
	 * @param EntryRepositoryInterface $entries
	 */
	public function __construct(EntryRepositoryInterface $entries)
	{
		$this->entries = $entries;
	}

	/**
	 * Store new item in cart
	 * @return Response
	 */
	public function store()
	{
		// Find entry
		$id    = Input::get('id');
		$entry = $this->entries->find($id);

		if ($entry)
		{
			// Get quantity and price
			$qty   = (int) Input::get('qty', 1);
			$price = (float) $entry->field('price');

			// Add to cart
			if ($qty >= 1 and $price) Cart::add(array('id' => $id, 'title' => $entry->title, 'price' => (float) $entry->price, 'quantity' => $qty));

			// Respond
			$response = array('result' => 'ok');
		}
		else
		{
			$response = array('result' => 'error');
		}

		// Build response
		return Response::json(array_merge($response, array('item_count'  => Cart::quantity(), 'total_price' => Cart::total())));
	}

	/**
	 * Update item in cart
	 * @param  string $id
	 * @return Response
	 */
	public function update($id)
	{
		return array();

		// Cart::updateItem((int) $id, array('quantity' => (int) Input::get('quantity')));
		// return Response::json(array(
		// 	'result'        => 'ok',
		// 	'item_quantity' => (int) Input::get('quantity'),
		// 	'item_count'    => Cart::itemCount(),
		// 	'total_price'   => Cart::get()->price,
		// 	'item'          => Cart::item((int) $id)->toArray()
		// ));
	}

	/**
	 * Remove item from cart
	 * @param  string $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return array();


		// Cart::removeItem($id);
		// return Response::json(array('result' => 'ok'));
	}

}
