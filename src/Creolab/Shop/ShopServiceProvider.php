<?php namespace Creolab\Shop;

use Config, Request;
use Illuminate\Support\ServiceProvider;

class ShopServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('creolab/shop', 'shop', __DIR__.'/../../');

		// Setup navigation items
		$this->registerNavigation();

		// Include various files
		// require __DIR__ . '/../helpers.php';
		// require __DIR__ . '/../filters.php';
		require __DIR__ . '/../../routes.php';

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	}

	public function registerNavigation()
	{
		// Get navigation config
		$item = app('config')->get('shop::navigation');

		// Add to collection
		if ($item and Request::segment(1) == Config::get('krustr::backend_url'))
		{
			app('krustr.navigation')->collection('backend')->addItem($item);
		}
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
