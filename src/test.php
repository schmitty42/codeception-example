<?php

class testing {

    public function testMethodWithoutCatch() {
        for($i=0; $i<3; $i++) {
            $this->mockedMethod($i);
        }
    }

    public function testMethodWithCatch() {
        for($i=0; $i<3; $i++) {
            try {
                $this->mockedMethod($i);
            } catch (Exception $e) {
                codecept_debug([
                    'Catching test failure',
                    $e->getMessage()
                ]);
            }
        }
    }

    public function mockedMethod($i) {
        return $i;
    }
}
