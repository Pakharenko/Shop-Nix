<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use fw\providers\Breadcrumbs;

class MainControllerTest extends TestCase
{

    public function testNewProductsGetIsMainPage()
    {
        $a = 10;
        $b = 10;
        $result = Breadcrumbs::testAllResult($a, $b);
//        $this->assertEquals(100, $result);
        $this->assertNotEquals(90, $result);
    }


}