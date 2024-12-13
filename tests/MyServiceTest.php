<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Service\MyService;

class MyServiceTest extends TestCase
{
    public function testAddition()
    {
        $service = new MyService();
        $result = $service->add(1, 2);
        $this->assertEquals(3, $result);
    }
}
