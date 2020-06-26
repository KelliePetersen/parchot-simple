<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Foundation\Evaluation;

interface ValidatorInterface
{
	/**
	 * Validates a given subject, returning an array of arbitrary respones
	 * @param  mixed $subject The subject to validate
	 * @return ?array         An array of validation responses in any form
	 */
	public function validate($subject): ?array;
}
