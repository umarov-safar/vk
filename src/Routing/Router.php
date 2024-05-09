<?php

namespace Safar\VK\Routing;

use Safar\VK\OrdersController;

class Router
{
    public function dispatch(): void
    {
        // of course in real application the controller with method will be dispatch dynamically
        $controller = new OrdersController();
        $controller->create();
    }
}