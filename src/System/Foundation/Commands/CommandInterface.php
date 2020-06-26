<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Foundation\Commands;

/**
 * Command Pattern based abstraction
 */
interface CommandInterface
{
	/**
	 * Executes a contained fragment of code based on the
	 * passed in context
	 * @param  mixed $context the execution context
	 * @return mixed
	 */
	public function execute($context): ?CommandInterface;
}
