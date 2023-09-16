<?php declare(strict_types=1);

namespace Kata;

class Mastermind
{
    public function evaluate(array $codeMaker, array $codeBreaker): array
    {

        if (count($codeMaker) != count($codeBreaker)) {
            throw new \Exception('La longitud de ambas combinaciones debe de ser la misma');
        }

        $positionAndColor = 0;
        $color = 0;

       foreach($codeMaker as $indice => $valor) {
            if ($codeBreaker[$indice] == $valor) {
                $positionAndColor++;
                unset($codeMaker[$indice]);
                unset($codeBreaker[$indice]);
            } else if (in_array($valor, $codeBreaker)) {
                $color++;
            }
        }

        return [$positionAndColor, $color];
    }
}
