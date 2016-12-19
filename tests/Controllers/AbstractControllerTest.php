<?php


namespace App\Controllers;

use \Zend\Diactoros\ServerRequestFactory;

abstract class AbstractControllerTest extends \PHPUnit_Framework_TestCase
{
    protected function getRequest()
    {
        return ServerRequestFactory::fromGlobals();
    }

    protected function getResponse()
    {
        return new \Zend\Diactoros\Response();
    }
}