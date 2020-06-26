<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Foundation\Init;

use Parchot\ParchotWeb\System\Registry;

interface InitInterface
{
	public function init(array $config): Registry;
}
