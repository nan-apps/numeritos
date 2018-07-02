<?php 
namespace Numeritos;

interface AssertsCalculator
{
    public function calculateAssertions(array $target, array $subject): int;
}
