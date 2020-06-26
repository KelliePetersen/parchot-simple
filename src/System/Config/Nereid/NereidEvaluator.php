<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Config\Nereid;

use Parchot\ParchotWeb\System\Foundation\Friendly\Evaluation\Evaluator;

class NereidEvaluator extends Evaluator
{

	protected $validationRules = [
		'system-online' => Rules\Validation\SystemOnlineValidationRule::class
	];
	protected $fallbackRules = [
	];

	protected $commandRules = [
	];
	
}
