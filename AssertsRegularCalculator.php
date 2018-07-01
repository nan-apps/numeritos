<?php 
namespace Numeritos;

class AssertsRegularCalculator implements AssertsCalculator
{
    public function getAssertions(): int
    {
        return $this->assertions;
    }

    public function calculateAssertions(array $target, array $subject): void
    {
        $this->assertions = 0;
        for ($i=0; $i < count($target); $i++) {
            if ($target[$i] !== $subject[$i] && in_array($subject[$i], $target)) {
                $this->assertions++;
            }
        }
    }
}
