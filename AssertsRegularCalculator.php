<?php 
namespace Numeritos;

class AssertsRegularCalculator implements AssertsCalculator
{
    public function calculateAssertions(array $target, array $subject): int
    {
        $assertions = 0;
        for ($i=0; $i < count($target); $i++) {
            if ($target[$i] !== $subject[$i] && in_array($subject[$i], $target)) {
                $assertions++;
            }
        }
        return $assertions;
    }
}
