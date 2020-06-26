<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Foundation\Evaluation;

abstract class ActionRule
{

	protected $keys = [];

	public final function __construct(string ...$keys)
	{
		$this->keys = $keys;
	}

	public abstract function evaluate(array $subject): ?array;

	public function getRelevantKeys(): array
	{
		return $this->keys;
	}

}
