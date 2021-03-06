<?php

/**
 * This file is part of Symnedi.
 * Copyright (c) 2014 Tomas Votruba (http://tomasvotruba.cz)
 */

namespace Symnedi\EventDispatcher\Event;

use Nette\Application\Application;
use Nette\Application\IPresenter;
use Nette\Application\UI\Presenter;
use Symfony\Component\EventDispatcher\Event;


final class ApplicationPresenterEvent extends Event
{

	/**
	 * @var Application
	 */
	private $application;

	/**
	 * @var IPresenter|Presenter
	 */
	private $presenter;


	public function __construct(Application $application, IPresenter $presenter)
	{
		$this->application = $application;
		$this->presenter = $presenter;
	}


	/**
	 * @return Application
	 */
	public function getApplication()
	{
		return $this->application;
	}


	/**
	 * @return Presenter
	 */
	public function getPresenter()
	{
		return $this->presenter;
	}

}
