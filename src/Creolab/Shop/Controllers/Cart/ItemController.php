<?php namespace Creolab\Shop\Controllers\Cart;

use Cart, Input, Response;
use Krustr\Repositories\Interfaces\EntryRepositoryInterface;

class ItemController extends \Controller {

	/**
	 * Content entry repository
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
		$id = Input::get('id');
		$entry = $this->entries->find($id);
		echo \Cart::id();
		echo '<pre>'; print_r(var_dump($entry)); echo '</pre>';
		die();

		if ($entry) Cart::addItem($id, 29.99, 7);

		// Build response
		return Response::json(array(
			'result'      => 'ok',
			'item_count'  => Cart::getQuantity(),
			'total_price' => Cart::getTotal(),
		));
	}

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

	public function destroy($id)
	{
		return array();


		// Cart::removeItem($id);
		// return Response::json(array('result' => 'ok'));
	}

}
