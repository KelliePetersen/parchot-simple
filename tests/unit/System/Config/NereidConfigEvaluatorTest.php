<?php 
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Config;
use PHPUnit\Framework\TestCase;

/**
 * @todo properly mock Evaluator class
 */
class NereidConfigEvaluatorTest extends TestCase
{
	const VALID_NEREID_CONFIG = __DIR__."/../../../resources/nereid.ini";

	private $evaluator;

	protected function setUp(): void
	{
		$this->evaluator = new NereidConfigEvaluator(self::VALID_NEREID_CONFIG);
	}

	public function testEvaluateWithEmptyArray() 
	{
		$result = $this->evaluator->evaluate(array());
		$this->assertIsArray($result);
		$this->assertArrayHasKey('calculated-app-root-path', $result);
	}

}
