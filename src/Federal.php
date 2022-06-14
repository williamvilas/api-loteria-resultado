<?php

namespace WilliamVilas\Loteria;

use WilliamVilas\Loteria\Interfaces\ResultadoLoteria;
use WilliamVilas\Loteria\Library\LoteriaCaixa;

class Federal extends LoteriaCaixa implements ResultadoLoteria
{
    protected $home = '/federal';

}