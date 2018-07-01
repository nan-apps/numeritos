<?php 
namespace Numeritos;

class AssertsBadCalculator implements AssertsCalculator
{
    public function getAssertions(): int
    {
        return $this->quantity;
    }

    public function calculateAssertions(array $target, array $subject): void
    {
        $this->quantity = 0;
        for ($i=0; $i < count($target); $i++) {
            if (!in_array($subject[$i], $target)) {
                $this->quantity++;
            }
        }
    }
}
