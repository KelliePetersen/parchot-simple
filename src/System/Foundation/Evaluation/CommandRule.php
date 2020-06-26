<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Foundation\Evaluation;

/**
 * Abstraction of a command rule against an array-based
 * subject
 */
abstract class CommandRule
{
	/**
	 * Maps array contents to command objects
	 * 
	 * @param  array  $subject the array based validation subject
	 * @return ?Exception      a subject criticism in the form of an exception
	 */
	abstract public function process(array $subject): ?\Command;
}
