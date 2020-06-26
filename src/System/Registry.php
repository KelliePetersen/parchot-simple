<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System;

use Psr\Log\LoggerInterface;

/**
 * Central application service locator for system wide resources
 */
class Registry
{
	private $systemConfig;
	private $logger;

	/**
	 * Creates a new application registry from the application system configuration provided
	 * @param array $systemConfig the provided application configuration array
	 */
	public function __construct(array $systemConfig)
	{
		$this->systemConfig = $systemConfig;
		$this->logger = null;
	}

    /**
     * Returns the system configuration stored inside the Registry
     * @return array the system configuration
     */
    public function getSystemConfig(): array
    {
        return $this->systemConfig;
    }

    /**
     * Whether or not the registry currently has a logger
     * @return boolean TRUE if a logger is present. False otherwise
     */
    public function hasLogger(): bool
    {
    	return isset($this->logger);
    }

    /**
     * Sets the contained logger to the provided LoggerInterface
     * @param LoggerInterface $logger the logger to register in the application or NULL
     */
    public function setLogger(?LoggerInterface $logger): self
    {
    	$this->logger = $logger;
    	return $this;
    }

    /**
     * Returns the currently stored application logger
     * @return ?LoggerInterface The logger or NULL if there isn't any
     */
    public function getLogger(): ?LoggerInterface
    {
    	return $this->logger;
    }

}
