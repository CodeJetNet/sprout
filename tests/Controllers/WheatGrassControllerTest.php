<?php

namespace App\Controllers;

class WheatGrassControllerTest extends AbstractControllerTest
{
    public function testSproutReturnsResponseInterface()
    {
        $wheatGrassController = new WheatGrassController();
        $response = $wheatGrassController->sprout($this->getRequest(), $this->getResponse());

        $this->assertInstanceOf('\Psr\Http\Message\ResponseInterface', $response);
    }
}
