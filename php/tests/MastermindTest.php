<?php declare(strict_types=1);

namespace KataTests;

use Kata\Mastermind;
use PHPUnit\Framework\TestCase;

class MastermindTest extends TestCase
{
    /** @test */
    public function given_a_wrong_code_breaker_combination_then_return_0_0(): void
    {
        $game = new Mastermind();

        $result = $game->evaluate(['blue'], ['red']);

        self::assertEquals([0,0], $result);
    }

    /** @test */
    public function given_a_right_code_breaker_combination_then_return_1_0(): void
    {
        $game = new Mastermind();

        $result = $game->evaluate(['blue'], ['blue']);

        self::assertEquals([1,0], $result);
    }
}