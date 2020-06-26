<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Config\Nereid\Rules\Validation;

use Parchot\ParchotWeb\System\Foundation\Evaluation\ValidationRule;

class SystemOnlineValidationRule extends ValidationRule
{
	/**
	 * Validates the 'system-online' configuration property
	 * @param  array  $subject the full configuration 
	 * @return Exception       an exception if applicable
	 */
	public function validate(array $subject): ?\Exception
	{
		return (isset($subject['system-online']) && \is_bool($subject['system-online']))? null : new \InvalidArgumentException();
	}
}
