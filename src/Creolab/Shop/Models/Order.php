<?php namespace Creolab\Shop\Models;

use Krustr\Models\Base;

class Order extends Base {

	/**
	 * Database table
	 * @var string
	 */
	protected $table = 'orders';

	/**
	 * Fields gurded from mass assignment
	 * @var array
	 */
	protected $guarded = array('id');

	/**
	 * User relationship
	 * @return Eloquent
	 */
	public function author()
	{
		return $this->belongsTo('Krustr\Models\User');
	}

}
