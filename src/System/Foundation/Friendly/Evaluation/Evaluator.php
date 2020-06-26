<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Foundation\Friendly\Evaluation;

use Parchot\ParchotWeb\System\Foundation\Evaluation\ValidationRule;

// TODO: test case creation
class Evaluator
{
	private $throwValidationExceptions;
	private $tryFallbackRules;
	private $allowPartialCommands;
	// TODO: Auto command execution

	protected $validationRules = [];
	protected $fallbackRules = [];
	protected $commandRules = [];

	public function __construct()
	{
		$this->throwValidationExceptions = false;
		$this->useFallbackRules          = true;
	}

	/*
		TODO: Rule execution in the following order
		1) Transformation Rules
		2) Validation Rules & Fallback Rules
		3) Command Rules
	 */
	public function evaluate($subject)
	{
		$reportedExceptions  = array();
		foreach($this->validationRules as $key => $validationRuleClass)
		{
			$this->confirmIsValidationRule($validationRuleClass);
			$validationResult = (new $validationRuleClass())->validate($subject);
			if (!\is_null($validationResult))
			{
				$reportedExceptions[$key] = $validationResult;
			}
		}
	}

	/**
	 * Gets the stored validation rules
	 * @return array the stored validation rules
	 */
	public function getValidationRules(): array
	{
		return $this->validationRules;
	}

	/**
	 * Gets the evaluator's fallback rules
	 * @return array the fallback rules
	 */
	public function getFallbackRules(): array
	{
		return $this->fallbackRules;
	}

	/**
	 * Sets the evaluator's validation rules
	 * @param array $rules the evaluator's validation rules
	 */
	public function setValidationRules(array $rules): Evaluator
	{
		$this->validationRules = $rules;
		return $this;
	}

	/**
	 * Sets the evaluator fallback rules
	 * @param array $rules the fallback rules
	 */
	public function setFallbackRules(array $rules): Evaluator
	{
		$this->fallbackRules = $rules;
		return $this;
	}

	/**
	 * Checks whether the provided fully qualified class name is an instance of the
	 * ValidationRule class
	 * @param  string  $class the fully qualified class name to check
	 * @return boolean        TRUE if it's an instance. FALSE otherwise
	 */
	private function confirmIsValidationRule(string $class)
	{
		if (!\is_a($class, ValidationRule::class, true))
		{
			throw new \InvalidArgumentException("Expected a validation rule but was given something else. Make sure given rules are a subclass of ValidationRule");
		}
	}

}
