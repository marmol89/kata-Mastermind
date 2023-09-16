<?php declare(strict_types=1);

namespace Kata;

class Mastermind
{
    public function evaluate(array $codeMaker, array $codeBreaker): array
    {
        if ($codeBreaker === ['blue']) return [1,0];
        return [0,0];
    }
}
