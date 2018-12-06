<?php
use \AspectMock\Test as test;

class testCest {

    public function testWithoutCatch(UnitTester $I) {
        test::double('testing', [
            'mockedMethod' => function ($i) use ($I) {
                $I->assertEquals($i, $i);
                $I->assertEquals($i, 0); // throws exception but isn't caught by codeception
            }
        ]);

        $class = new \testing();
        $class->testMethodWithoutCatch();
    }

    public function testWithCatch(UnitTester $I) {
        test::double('testing', [
            'mockedMethod' => function ($i) use ($I) {
                $I->assertEquals($i, $i);
                $I->assertEquals($i, 0); // throws exception but isn't caught by codeception
            }
        ]);

        $class = new \testing();
        $class->testMethodWithCatch();
    }
}
