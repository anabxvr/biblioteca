<?php
require_once 'bibliotecaFuncoes.php';

echo "\nMenu";
    echo "\n1 Conversão Dólar";
    echo "\n2 Conversão Euro";
    echo "\n3 Conversão Libra";
    echo "\n4 Conversão Peso Mexicano ";
    echo "\n5 Conversão Ieni ";
    echo "\n6 Sair \n";
 
    $resultado = readline(">>> ");

$opcao = "";
$valor = "";
$cotacao = "";

while ($opcao != 6) {
    echo "--- Menu de Operações ---";
    echo "\n1 conversão dólar para real";
    echo "\n2 coneversão euro para real";
    echo "\n3 conversão peso para real";
    echo "\n4 conversão libra para real";
    echo "\n5 conversão iene para real";
    echo "\n6 sair \n\n";

    $opcao = readline("Digite o número da operação desejada: ");
}
switch ($opcao) {
    case 1:
        $valor = readline("Digite o valor a ser convertido: ");
        $cotacao = readline("Digite a cotação do dólar: ");
        echo "O resultado da conversão é: " . conversao\dolarParaReal($valor * $cotacao);
        break;
    case 2:
        $valor = readline("Digite o valor a ser convertido: ");
        $cotacao = readline("Digite a cotação do euro: ");
        echo "O resultado da conversão é: " . conversao\euroParaReal($valor * $cotacao);
        break;
    case 3:
        $valor = readline("Digite o valor a ser convertido: ");
        $cotacao = readline("Digite a cotação do peso: ");
        echo "O resultado da conversão é: " . conversao\pesoParaReal($valor * $cotacao);
        break;
    case 4:
        $valor = readline("Digite o valor a ser convertido: ");
        $cotacao = readline("Digite a cotação da libra: ");
        echo "O resultado da conversão é: " . conversao\libraParaReal($valor * $cotacao);s
        break;
    case 5:
        $valor = readline("Digite o valor a ser convertido: ");
        $cotacao = readline("Digite a cotação do iene: ");
        echo "O resultado da conversão é: " . conversao\ieneParaReal($valor * $cotacao);
        break;
    case 6:
        echo "Saindo...";
        break;
    default:
        echo "Operação inválida.";
        break;
}
while ($operacao != 9) {

    echo "\nMenu";
    echo "\n1 Area Quadrado ";
    echo "\n2 Area Retangulo";
    echo "\n3 Area Triangulo";
    echo "\n4 Area Circulo";
    echo "\n5 Area Trapezio";
    echo "\n6 Sair \n";

    $operacao = readline("Escolha um operacao: ");



    switch ($operacao) {

        case 1:
            $numero3 = readline("Digite o lado do quadrado");
            echo "\nResultado : ", ($numero3 * $numero3);
            break;
        case 2:
            $numero4 = readline("Digite sua base");
            $numero3 = readline("Digite sua altura");
            echo "\nResultado : ", ($numero4 * $numero3);
            break;

        case 3:
            $numero4 = readline("Digite sua base");
            $numero3 = readline("Digite sua altura");
            echo "\nResultado : ", ($numero4 * $numero3 / 2);
            break;

        case 4:
            $numero3 = readline("Digite seu raio");
            echo "\nResultado : ", (3.14 * ($numero3 * $numero3));
            break;

        case 5:
            $numero4 = readline("Digite sua base maior");
            $numero3 = readline("Digite sua base menor");
            $numero2 = readline("Digite sua altura");
            echo "\nResultado : ", ($numero4 * $numero3 * $numero2);
            break;

        default:
            echo "Erro..";
            break;
    }
}
use function conversao\ calcularImc($peso, $altura);
use function conversao\ valorIdealÁgua($peso);
use function conversao\ frequênciaCardiacaMaxima($idade);
use function conversao\ LibrasParaQuilo($quilos);
use function conversao\ calcularCaloriasBasais($peso, $idade, $sexo);

while ($operacao != 9) {

    echo "\nMenu";
    echo "\n1 Calcular IMC ";
    echo "\n2 Valor Ideal de Água";
    echo "\n3 Frequência Cardíaca Máxima";
    echo "\n4 Libras para Quilos";
    echo "\n5 Calorias Basais";
    echo "\n6 Sair \n";

    $operacao = readline("Escolha um operacao: ");      
 
switch ($operacao) {
    function calcularImc($peso, $altura)
    {
        return $peso / ($altura * $altura);
    }
    function valorIdealÁgua($peso)
    {
        return $peso * 0,035;
    }
    function frequênciaCardiacaMaxima($idade)
    {
        return 220 - $idade;
    }
    function LibrasParaQuilo($quilos)
    {
        return $quilos * 0,453592;
    }
    function calcularCaloriasBasais($peso, $idade, $sexo)
    {
        if ($sexo == ' masculino ' ) {
            return (10 * $peso) + (6,25 * $altura) - (5 * $idade) + 5;
        } else if ($sexo == ' feminino ' ) {
            return (10 * $peso) + (6,25 * $altura) - (5 * $idade) - 161;
        }
    }
}