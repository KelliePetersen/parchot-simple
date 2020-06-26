<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Config;
use PHPUnit\Framework\TestCase;

/**
 * Test Case for NereidConfigParser.php
 */
class NereidConfigParserTest extends TestCase 
{
	const VALID_NEREID_CONFIG = __DIR__."/../../../resources/nereid.ini";
	const INVALID_NEREID_CONFIG = __DIR__."/../../../resources/nereid.bad";

	private $parser;

	protected function setUp(): void 
	{
		$this->parser = new NereidConfigParser();
	}

	public function testParseEmptyResourceArgument()
	{
		$this->expectException(\InvalidArgumentException::class);
		$config = $this->parser->parse("");
	}

	public function testParseInvalidFileExtension() {
		$this->expectException(\InvalidArgumentException::class);
		$config = $this->parser->parse(self::INVALID_NEREID_CONFIG);
	}

	public function testParseValidFile() 
	{
		$config = $this->parser->parse(self::VALID_NEREID_CONFIG);
		$this->assertArrayHasKey('system-online', $config);
		$this->assertArrayHasKey('system-offline-path', $config);
	}
}