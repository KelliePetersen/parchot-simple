<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Foundation\Evaluation;

/**
 * Abstraction of a validation rule against an array-based
 * subject
 */
abstract class ValidationRule
{
	/**
	 * Validates the subject, optionally returning an exception
	 * if the subject contains erroneous data. 
	 *
	 * Note: Exceptions are returned as opposed to being automatically
	 * thrown by design
	 * 
	 * @param  array  $subject the array based validation subject
	 * @return ?Exception      a subject criticism in the form of an exception
	 */
	abstract public function validate(array $subject): ?\Exception;
}
