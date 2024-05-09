<?php

namespace Safar\VK;

use Safar\VK\Routing\Router;

class Application
{
    public Router $router;

    // ... methods

    public function run(): void
    {
        $this->router->dispatch();
    }
}