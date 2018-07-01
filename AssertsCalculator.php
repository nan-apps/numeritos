<?php 
namespace Numeritos;

interface AssertsCalculator
{

	public function getAssertions(): int;

	public function calculateAssertions(Array $target, Array $subject): void;

}