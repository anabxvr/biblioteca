<?php
//testar funções
namespace matematica {

    function somar($a, $b, $c)
    {
        return $a + $b + $c;
    }
    echo "Resultado: ", somar(7, 3, 5);
    function subtrair($a, $b)
    {
        return $a - $b;
    }
    echo "Resultado: ", subtrair(10, 5);

    function multiplicar($a, $b)
    {
        return $a * $b;
    }
    echo "Resultado: ", multiplicar(10, 5);

    function dividir($a, $b)
    {
        return $a / $b;
    }
    echo "Resultado: ", dividir(200, 4);
}

namespace texto {
    function concatenar($nome, $sobrenome)
    {
        return $nome . " " . $sobrenome;
    }
}

namespace logica {
    function verifica_idade($idade)
    {
        if ($idade >= 18) {
            echo  "Maior de idade";
        } else {
            echo "Menor de idade";
        }
    }
}
