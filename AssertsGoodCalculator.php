<?php 
namespace Numeritos;

class AssertsGoodCalculator implements AssertsCalculator
{
    public function calculateAssertions(array $target, array $subject): int
    {
        $assertions = 0;
        for ($i=0; $i < count($target); $i++) {
            if ($this->assertsTrue($target[$i], $subject[$i])) {
                $assertions++;
            }
        }
        return $assertions;
    }

    private function assertsTrue($targetElement, $subjectElement)
    {
        return $targetElement === $subjectElement;
    }
}
