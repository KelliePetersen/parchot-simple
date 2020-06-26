<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Config;

/**
 * General abstraction for the evaulation and exection of
 * configuration files, returning modified configuration files
 * in return.
 */
interface ConfigEvaluatorInterface
{	
	/**
	 * Evaluates an array of key-value configuration files,
	 * executing any necessary logic and optionally returning
	 * a modified config array
	 * @return config and optionally modified config array
	 */
	public function evaluate(array $config): array;
}
