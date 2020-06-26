<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Init;

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\GitProcessor;
use Monolog\Processor\HostnameProcessor;
use Monolog\Processor\IntrospectionProcessor;
use Monolog\Processor\PsrLogMessageProcessor;
use Monolog\Processor\WebProcessor;
use Parchot\ParchotWeb\System\Foundation\Init\InitInterface;
use Parchot\ParchotWeb\System\Registry;
use Psr\Log\LoggerInterface;

/**
 * Constructs the central application registry from the provided application
 * settings
 */
class RegistryBuilder implements InitInterface
{

	public function init(array $config): Registry
	{
		$logger = $this->buildLogger($config);
		return (new Registry($config))
				->setLogger($logger);
	}

	private function buildLogger(array $config): ?LoggerInterface
	{
		$securityLogPath = $config['calculated-app-root-path'].$config['security-log-file'];
		$logger = new Logger("Security Logger");
		$logger->pushHandler(new StreamHandler($securityLogPath, Logger::INFO));
		$logger->pushProcessor(new WebProcessor());
		$logger->pushProcessor(new PsrLogMessageProcessor());
		$logger->pushProcessor(new GitProcessor());
		$logger->pushProcessor(new HostnameProcessor());
		$logger->pushProcessor(new IntrospectionProcessor());

		if ($config['security-logging'] === false) $logger->pushHandler(new NullHandler());
		
		return $logger;
	}

}
