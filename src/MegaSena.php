<?php

namespace WilliamVilas\Loteria;

use WilliamVilas\Loteria\Interfaces\ResultadoLoteria;
use WilliamVilas\Loteria\Library\LoteriaCaixa;

class MegaSena extends LoteriaCaixa implements ResultadoLoteria
{
    protected $home = '/megasena';

}