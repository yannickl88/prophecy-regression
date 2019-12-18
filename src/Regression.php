<?php
class Regression
{
    public function test(A $a) {
        try {
            $a->someMethod();
        } catch (\Throwable $e) {
            return false;
        }
        return true;
    }
}
