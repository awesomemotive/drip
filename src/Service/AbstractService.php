<?php

namespace AwesomeMotive\Drip\Service;

use AwesomeMotive\Drip\Drip;

abstract class AbstractService {

	/**
	 * @var GetDrip
	 */
	protected $client;

	public function __construct( Drip $client ) {

		$this->client = $client;

	}

}