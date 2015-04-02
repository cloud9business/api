<?php namespace Dingo\Api\Provider\Bridges;

use Morrislaptop\LaravelFivePackageBridges\LaravelFivePackageBridgeTrait;
use Dingo\Api\Provider\ApiServiceProvider as BaseApiServiceProvider;

/**
 * Class ApiServiceProvider
 * @package Dingo\Api\Provider\Bridges
 */
class ApiServiceProvider extends BaseApiServiceProvider {
	use LaravelFivePackageBridgeTrait;
}
