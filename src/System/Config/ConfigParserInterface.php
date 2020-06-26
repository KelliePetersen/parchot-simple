<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Config;

/**
 * General abstraction for configuration file parsers
 */
interface ConfigParserInterface
{
	/**
	 * Parses the provided resource into an array
	 * @param  string $path the path to the configuration file
	 * @return array        the parsed configuration file
	 */
	public function parse($resource): array;
}
