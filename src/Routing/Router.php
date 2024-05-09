<?php

namespace Safar\VK\Routing;

use Safar\VK\OrdersController;

class Router
{
    public function dispatch(): void
    {
        $controller = new OrdersController();
        $controller->create();
    }
}