<?php 
namespace Numeritos;

class AssertsGoodCalculator implements AssertsCalculator
{
    public function getAssertions(): int
    {
        return $this->quantity;
    }

    public function calculateAssertions(array $target, array $subject): void
    {
        $this->quantity = 0;
        for ($i=0; $i < count($target); $i++) {
            if ($target[$i] === $subject[$i]) {
                $this->quantity++;
            }
        }
    }
}
