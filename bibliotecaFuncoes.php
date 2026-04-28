<?php

require_once "biblioteca_funcao.php";

//namespce coneversao:
//função dolarparareal ($valor . $cotacao)
//função europarareal ($valor . $cotacao)
//função libraparareal ($valor . $cotacao)
//função pesoparareal ($valor . $cotacao)
//função ienerparareal ($valor . $cotacao)

namespace conversao {
    function dolarparareal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function europarareal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function libraparareal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function pesoparareal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function ienerparareal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
}
