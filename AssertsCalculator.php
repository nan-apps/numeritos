<?php 
namespace Numeritos;

interface AssertsCalculator
{
    public function getAssertions(): int;

    public function calculateAssertions(array $target, array $subject): void;
}
