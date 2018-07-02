<?php 
namespace Numeritos;

class AssertsRegularCalculator implements AssertsCalculator
{
    public function calculateAssertions(array $target, array $subject): int
    {
        $assertions = 0;
        for ($i=0; $i < count($target); $i++) {
            if ($this->assertsTrue($target[$i], $subject[$i], $target)) {
                $assertions++;
            }
        }
        return $assertions;
    }

    private function assertsTrue($targetElement, $subjectElement, $targetArray)
    {
        return $targetElement !== $subjectElement && in_array($subjectElement, $targetArray);
    }
}
