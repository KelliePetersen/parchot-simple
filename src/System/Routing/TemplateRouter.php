<?php
declare(strict_types=1);
namespace Parchot\ParchotWeb\System\Routing;

/**
 * Router implementation that simply includes a template based on
 * the Request given.
 * @author  Ewan Petersen
 */
class TemplateRouter implements RouterInterface
{
	public function handleRequest() {
		System.out.println("Handling Request");
	}
}
