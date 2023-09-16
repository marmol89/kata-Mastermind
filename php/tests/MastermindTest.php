<?php declare(strict_types=1);

namespace KataTests;

use Kata\Mastermind;
use PHPUnit\Framework\TestCase;

class MastermindTest extends TestCase
{

    public function guessCombination() {
        return [
            'given_a_wrong_code_breaker_combination_then_return_0_0' => [['blue'], ['red'], [0,0]],
            'given_a_right_code_breaker_combination_then_return_1_0' => [['blue'], ['blue'], [1,0]],
            'given_a_right_code_breaker_combination_with_two_colors_then_return_2_0' => [['blue','red'], ['blue','red'], [2,0]],
            'given_a_wrong_code_breaker_combination_with_two_colors_then_return_0_2' => [['blue','red'], ['red','blue'], [0,2]],
            'given_a_wrong_code_breaker_combination_with_two_colors_then_return_1_0' => [['blue','red'], ['blue','blue'], [1,0]],
            'given_a_wrong_code_breaker_combination_with_three_colors_then_return_1_0' => [['blue', 'red', 'orange'], ['blue','blue','blue'], [1,0]],
            'given_a_wrong_code_breaker_combination_with_same_three_colors_then_return_1_0' => [['blue','blue','blue'], ['blue','red', 'orange'], [1,0]]
        ];
    }

    /** @test
     * @dataProvider guessCombination
     */
    public function given_code_breaker_combination_then_it_matches_with_code_maker_combination($codeMaker, $codeBreaker, $expected): void
    {
        $game = new Mastermind();

        $result = $game->evaluate($codeMaker, $codeBreaker);

        self::assertEquals($expected, $result);
    }


    /** @test
     */
    public function given_a_code_maker_combination_lenght_then_code_breaker_combination_should_be_the_same(): void
    {
        $this->expectExceptionMessage('La longitud de ambas combinaciones debe de ser la misma');

        $game = new Mastermind();

        $result = $game->evaluate(['red'], ['blue', 'red']);
    }
}
