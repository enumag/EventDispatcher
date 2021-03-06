<?php

namespace Symnedi\EventDispatcher\Tests\NetteEvent\DispatchSource;

use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;


class RouterFactory
{

	/**
	 * @return RouteList
	 */
	public function create()
	{
		$routes = new RouteList;
		$routes[] = new Route('index.php', 'Homepage:default', Route::ONE_WAY);
		$routes[] = new Route('<presenter>/<action>', 'Homepage:default');
		$routes[] = new Route('<presenter>/<action>', 'Response:default');
		return $routes;
	}

}
