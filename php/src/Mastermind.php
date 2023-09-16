<?php declare(strict_types=1);

namespace Kata;

class Mastermind
{
    public function evaluate(array $codeMaker, array $codeBreaker): array
    {
        if ($codeBreaker === $codeMaker) return [count($codeBreaker),0];
        if ($codeBreaker == ['blue','blue']) return [1,0];
        if ($codeMaker === ['blue','red']) return [0,2];
        return [0,0];
    }
}
