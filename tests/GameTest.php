<?php

use PHPUnit\Framework\TestCase;
use Numeritos\Game;
use Numeritos\AssertsBadCalculator;
use Numeritos\AssertsGoodCalculator;
use Numeritos\AssertsRegularCalculator;
use Numeritos\WrongDigitsQuantityException;


final class GameTest extends TestCase
{

	private $game;
	
	public function setUp(): void
	{
		$this->game = new Game('1234');
	}

	public function testAllGood(): void
	{
		$this->game->guess('1234');
		$this->assertEquals(4, $this->game->getAssertions(new AssertsGoodCalculator()));
		$this->assertEquals(0, $this->game->getAssertions(new AssertsBadCalculator()));
	}

	public function testAllBad(): void
	{
		$this->game->guess('0000');
		$this->assertEquals(4, $this->game->getAssertions(new AssertsBadCalculator()));
		$this->assertEquals(0, $this->game->getAssertions(new AssertsGoodCalculator()));
	}

	public function testOneIsGood(): void
	{
		$this->game->guess('1000');
		$this->assertEquals(1, $this->game->getAssertions(new AssertsGoodCalculator()));
		$this->assertEquals(3, $this->game->getAssertions(new AssertsBadCalculator()));
	}

	public function testOneIsRegular(): void
	{
		$this->game->guess('0001');
		$this->assertEquals(1, $this->game->getAssertions(new AssertsRegularCalculator()));
		$this->assertEquals(3, $this->game->getAssertions(new AssertsBadCalculator()));
	}

	public function testWrongGuessDigitsShouldThrowException(): void
	{
		$this->expectException(WrongDigitsQuantityException::class);
		$this->game->guess('1');
	}

}
