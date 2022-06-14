# API Loteria Resultados

Crawler no website da Caixa Federal.

## Instalação

```shell
composer require williamvilas/api-loteria-resultados
```

## Utilização

Basta instanciar a classe que deseja utilizar. 

Exemplos: DiaDeSorte, DuplaSena, Federal, Lotofacil, Lotomaina, MaisMilionaria, MegaSena, Quina e Timemania.


````php
<?php
require __DIR__.'/vendor/autoload.php';

$megaSena = new \WilliamVilas\Loteria\MegaSena();
$resultado = $megaSena->retornarResultado();

$lotofacil = new \WilliamVilas\Loteria\Lotofacil();
$resultado = $lotofacil->retornarResultado();

````

## Requisitos

- Necessário PHP 7.0 ou superior