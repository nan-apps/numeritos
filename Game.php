<?php 
namespace Numeritos;

class Game
{
    private $theNumber;
    private $guessNumber;

    public function __construct($theNumber)
    {
        $this->theNumber = $theNumber;
    }

    public function guess($number): void
    {
        $this->guessNumber = strval($number);
        if (count($this->getTheNumberAsArray()) != count($this->getGuessNumberAsArray())) {
            throw new WrongDigitsQuantityException();
        }
    }

    public function getAssertions(AssertsCalculator $aCalc): int
    {
        return $aCalc->calculateAssertions($this->getTheNumberAsArray(), $this->getGuessNumberAsArray());
    }

    private function getTheNumberAsArray(): array
    {
        return str_split($this->theNumber);
    }

    private function getGuessNumberAsArray(): array
    {
        return str_split($this->guessNumber);
    }
}
