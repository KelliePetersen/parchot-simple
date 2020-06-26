<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Config;

/**
 * Parses the main nereid system configuration file
 */
class NereidConfigParser implements ConfigParserInterface
{
	/**
	 * Parses the provided path to nereid.ini
	 * @param  string $resource the path to nereid config
	 * @return array            The parsed configuration file
	 */
	public function parse($resource): array
	{	

		if (!\file_exists($resource))
		{
			throw new \InvalidArgumentException("Nereid file not found. Verify the provided config path.");
		}

		if ((\pathinfo($resource))['extension'] !== "ini") {
			throw new \InvalidArgumentException("Invalid Nereid config type. Provide an .ini configuration file");
		}

		return \parse_ini_file($resource, false, \INI_SCANNER_TYPED);
	}

}
