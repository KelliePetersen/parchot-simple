<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb;

use Parchot\ParchotWeb\System\Config\NereidConfigEvaluator;
use Parchot\ParchotWeb\System\Config\NereidConfigParser;
use Parchot\ParchotWeb\System\Config\Nereid\NereidEvaluator;
use Parchot\ParchotWeb\System\Init\RegistryBuilder;

require(__DIR__."/System/Globals/global_functions.php");
require(__DIR__."/System/Globals/global_constants.php");

/**
 * Main Application entry point
 * @author Ewan Petersen
 */
class Main {
	
	/**
	 * Launches the application
	 * @return int The exit code
	 */
	public static function launch(?string $nereidPath): int {
		$appSettings       = (new NereidConfigParser())->parse($nereidPath);
		$processedSettings = (new NereidConfigEvaluator($nereidPath))->evaluate($appSettings);
		$registry          = (new RegistryBuilder())->init($processedSettings);

		if ($registry->hasLogger())
		{
			$registry->getLogger()->info("Parchot Website Started");
		}

		require __DIR__."/../dist/index.html";
		return 0;
	}

}





