<?php

namespace WilliamVilas\Loteria\Library;

use WilliamVilas\Loteria\Entity\ResultadoEntity;

class LoteriaCaixa
{
    protected $endpoint = 'https://servicebus2.caixa.gov.br/portaldeloterias/api';

    public function retornarResultado(int $concurso = null)
    {
        try {
            $resultado = $this->consultar($concurso);
            $resultadoEntidade = $this->montarObjeto($resultado);
            return $resultadoEntidade->__toArray();

        } catch (\Exception $e) {
            throw new \Exception('Não foi possível consultar os dados na Caixa Econômica Federal.');
        }
    }

    protected function consultar($concurso = null)
    {
        $endpoint = $concurso ? ('/' . $concurso) : '';
        $endpoint = ($this->endpoint . $this->home . $endpoint);

        $curl = new Curl($endpoint);
        $resultado = $curl->exec();

        return $resultado;
    }

    protected function montarObjeto(\stdClass $resultado)
    {
        $resultadoEntidade = new ResultadoEntity();
        $resultadoEntidade->setAcumulado($resultado->acumulado);
        $resultadoEntidade->setDataApuracao($resultado->dataApuracao);
        $resultadoEntidade->setDataProximoSorteiro($resultado->dataProximoConcurso);
        $resultadoEntidade->setDezenasSorteadas($resultado->listaDezenas);
        $resultadoEntidade->setDezenasSorteadasSegundo($resultado->listaDezenasSegundoSorteio);
        $resultadoEntidade->setListaGanhadores($resultado->listaRateioPremio);
        $resultadoEntidade->setLocalSorteiro($resultado->localSorteio);
        $resultadoEntidade->setMunicipioSorteiro($resultado->nomeMunicipioUFSorteio);
        $resultadoEntidade->setConcurso($resultado->numero);
        $resultadoEntidade->setValorAcumuladoProximoConcurso($resultado->numeroConcursoProximo);
        return $resultadoEntidade;
    }
}