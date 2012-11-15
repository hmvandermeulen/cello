<?php

/*
|--------------------------------------------------------------------------
| Cello Library
|--------------------------------------------------------------------------
|
| Map Cello Library using PSR-0 standard namespace. 
*/

Autoloader::namespaces(array(
	'Cello\Model' => Bundle::path('cello').'models'.DS,
	'Cello'       => Bundle::path('cello').'libraries'.DS,
));

Hybrid\Acl::make('cello')->attach(Orchestra\Core::memory());