<?php 
namespace Numeritos;

class AssertsBadCalculator implements AssertsCalculator
{
    public function calculateAssertions(array $target, array $subject): int
    {
        $assertions = 0;
        for ($i=0; $i < count($target); $i++) {
            if (!in_array($subject[$i], $target)) {
                $assertions++;
            }
        }
        return $assertions;
    }
}
