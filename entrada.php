<?php

require_once "main.php";

use function matematica\Somar;
use function texto\cocatenar;
use function logica\verifica_idade;

echo "Status: ", verifica_idade(19);
echo "Soma: ", Somar(1, 1, 1);
echo "Nome Completo: ", cocatenar("João", "Silva");
