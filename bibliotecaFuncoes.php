<?php
// Nomenclatura : Snake_caso
//Bia

//Função calcularImc($peso, $altura)
//Função valorIdealAgua($peso)
//Função frequenciaCardiacaMaxima($idade)
//Função converterLibrasParaQuilo($quilos)
//Função calcularCaloriasBasais($peso, $idade, $sexo)

namespace saude {
    function calcularImc($peso, $altura)
    {
        return $peso / ($altura * $altura);
    }
    function valorIdealAgua($peso)
    {
        return $peso * 0.035;
    }
    function frequenciaCardiacaMaxima($idade)
    {
        return 220 - $idade;
    }
    function converterLibrasParaQuilo($quilos)
    {
        return $quilos * 0.453592;
    }
    function calcularCaloriasBasais($peso, $idade, $sexo)
    {
        if ($sexo == 'masculino') {
            return (10 * $peso) + (6.25 * $altura) - (5 * $idade) + 5;
        } else if ($sexo == 'feminino') {
            return (10 * $peso) + (6.25 * $altura) - (5 * $idade) - 161;
        }
    }
}
