<?php

return array(

	'order' => 500, 'label' => 'Shop', 'icon'  => 'shopping-cart', 'href' => url('backend/shop/orders'),

	'children' => array(
		// ! ==> Users
		'orders' => array(
			'order' => 100, 'label' => 'Orders', 'icon'  => 'shopping-cart', 'href' => url('backend/shop/orders'),
		),

		// ! ==> Settings
		// 'settings' => array(
		//  'order' => 500, 'label' => 'Settings', 'icon'  => 'wrench', 'href' => '#',
		// ),

		// ! ==> Cache
		// 'cache' => array(
		//  'order' => 9999, 'label' => 'Clear cache', 'icon'  => 'trash', 'href' => '#',
		// ),
	),

);
