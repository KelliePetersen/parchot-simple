<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Config;

/**
 * Nereid.ini configuration evaluator. Resolves immediate tasks
 * set in the nereid configuration file
 * Note: The evaluator doesn't validate or check if certain keys
 * exist, and will do nothing if they aren't present.
 */
class NereidConfigEvaluator implements ConfigEvaluatorInterface
{
	private $configPath;

	/**
	 * Creates a new nereid config evaluator object relative to the
	 * provided absolute $configPath, the config location
	 *
	 * Note: If the provided path doesn't have a directory appended,
	 * one is automatically added.
	 */
	public function __construct(string $configPath) 
	{
		if (!\is_dir($configPath) && !\is_file($configPath))
		{
			throw new \InvalidArgumentException('Couldn\'t find the application root path. Check the provided $configPath');
		}
		$this->configPath = \pathinfo($configPath, \PATHINFO_DIRNAME);
	}

	/**
	 * Evaluates a nereid configuration array, returning
	 * an updated version
	 *
	 * @param  array  $config the nereid configuration array
	 * @return array          the updated configuration properties
	 */
	public function evaluate(array $config): array
	{
		$this->resolveAppRoot($config);
		$this->evaluateSystemOnline($config);
		return $config;
	}

	/**
	 * Redirects the nereid config evaulator to a static included
	 * page specified by 'system-offline-path' if system online is
	 * not true, and then exits;
	 */
	private function evaluateSystemOnline(array &$config) 
	{
		if (!isset($config['system-online']) || $config['system-online'] === true)
		{
			return;
		}

		if (!empty($config['system-offline-path']) && (\is_file($config['calculated-app-root-path'].DIRECTORY_SEPARATOR.$config['system-offline-path']))) {
			include $config['calculated-app-root-path'].DIRECTORY_SEPARATOR.$config['system-offline-path'];
		} 

		exit;
	}

	/**
	 * Resolves the application root based on the $configPath member variable
	 * and the 'app-root-path' property within the config
	 * @param  array  &$config reference to the configuration file
	 */
	private function resolveAppRoot(array &$config)
	{
		$calculatedAppRootPath = $this->configPath;
		if (isset($config['app-root-path']))
		{
			$calculatedAppRootPath .= DIRECTORY_SEPARATOR.$config['app-root-path'];
		}
		$config['calculated-app-root-path'] = $calculatedAppRootPath;
	}

}
