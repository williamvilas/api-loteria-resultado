<?php

namespace WilliamVilas\Loteria\Helpers;

class DataHelper
{

    public static function formatar($data, $formato)
    {
        if ($data) {

           try {

               $pos = strpos($data, '/');
               $formatoData = ($pos === false) ? 'Y-m-d' : 'd/m/Y';

               $existeHora = strpos($data, ':');
               $formatoData = ($existeHora === false) ? $formatoData : $formatoData . ' H:i:s';

               $data = \DateTime::createFromFormat($formatoData, $data);
               return $data->format($formato);

           } catch (\Exception $e) {
               return false;
           }

        }

        return false;
    }

}