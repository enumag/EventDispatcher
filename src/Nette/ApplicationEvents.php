<?php

/**
 * This file is part of Symnedi.
 * Copyright (c) 2014 Tomas Votruba (http://tomasvotruba.cz)
 */

namespace Symnedi\EventDispatcher\Nette;


/**
 * Events in Nette Application life cycle.
 */
class ApplicationEvents
{

	/**
	 * @var string
	 */
	const ON_STARTUP = 'Nette\Application\Application::onStartup';

	/**
	 * @var string
	 */
	const ON_APPLICATION_REQUEST = 'Nette\Application\Application::onRequest';

	/**
	 * @var string
	 */
	const ON_PRESENTER = 'Nette\Application\Application::onPresenter';

}
