<?php

namespace WilliamVilas\Loteria\Entity;

use WilliamVilas\Loteria\Helpers\DataHelper;

class ResultadoEntity
{
    private $acumulado;
    private $data_apuracao;
    private $data_proximo_sorteiro;
    private $dezenas_sorteadas;
    private $dezenas_sorteadas_segundo;
    private $lista_ganhadores;
    private $local_sorteiro;
    private $municipio_sorteiro;
    private $concurso;
    private $valor_acumulado_proximo_concurso;

    /**
     * @return mixed
     */
    public function getAcumulado()
    {
        return $this->acumulado;
    }

    /**
     * @param mixed $acumulado
     */
    public function setAcumulado($acumulado)
    {
        $this->acumulado = $acumulado;
    }

    /**
     * @return mixed
     */
    public function getDataApuracao()
    {
        return $this->data_apuracao;
    }

    /**
     * @param mixed $data_apuracao
     */
    public function setDataApuracao($data_apuracao)
    {
        $this->data_apuracao = DataHelper::formatar($data_apuracao, 'Y-m-d');
    }

    /**
     * @return mixed
     */
    public function getDataProximoSorteiro()
    {
        return $this->data_proximo_sorteiro;
    }

    /**
     * @param mixed $data_proximo_sorteiro
     */
    public function setDataProximoSorteiro($data_proximo_sorteiro)
    {
        $this->data_proximo_sorteiro = DataHelper::formatar($data_proximo_sorteiro, 'Y-m-d');
    }

    /**
     * @return mixed
     */
    public function getDezenasSorteadas()
    {
        return $this->dezenas_sorteadas;
    }

    /**
     * @param mixed $dezenas_sorteadas
     */
    public function setDezenasSorteadas($dezenas_sorteadas)
    {
        $this->dezenas_sorteadas = $dezenas_sorteadas;
    }

    /**
     * @return mixed
     */
    public function getDezenasSorteadasSegundo()
    {
        return $this->dezenas_sorteadas_segundo;
    }

    /**
     * @param mixed $dezenas_sorteadas_segundo
     */
    public function setDezenasSorteadasSegundo($dezenas_sorteadas_segundo)
    {
        $this->dezenas_sorteadas_segundo = $dezenas_sorteadas_segundo;
    }

    /**
     * @return mixed
     */
    public function getListaGanhadores()
    {
        return $this->lista_ganhadores;
    }

    /**
     * @param mixed $lista_ganhadores
     */
    public function setListaGanhadores($lista_ganhadores)
    {
        $this->lista_ganhadores = $lista_ganhadores;
    }

    /**
     * @return mixed
     */
    public function getLocalSorteiro()
    {
        return $this->local_sorteiro;
    }

    /**
     * @param mixed $local_sorteiro
     */
    public function setLocalSorteiro($local_sorteiro)
    {
        $this->local_sorteiro = $local_sorteiro;
    }

    /**
     * @return mixed
     */
    public function getMunicipioSorteiro()
    {
        return $this->municipio_sorteiro;
    }

    /**
     * @param mixed $municipio_sorteiro
     */
    public function setMunicipioSorteiro($municipio_sorteiro)
    {
        $this->municipio_sorteiro = $municipio_sorteiro;
    }

    /**
     * @return mixed
     */
    public function getConcurso()
    {
        return $this->concurso;
    }

    /**
     * @param mixed $concurso
     */
    public function setConcurso($concurso)
    {
        $this->concurso = $concurso;
    }

    /**
     * @return mixed
     */
    public function getValorAcumuladoProximoConcurso()
    {
        return $this->valor_acumulado_proximo_concurso;
    }

    /**
     * @param mixed $valor_acumulado_proximo_concurso
     */
    public function setValorAcumuladoProximoConcurso($valor_acumulado_proximo_concurso)
    {
        $this->valor_acumulado_proximo_concurso = $valor_acumulado_proximo_concurso;
    }

    public function __toArray()
    {
        return call_user_func('get_object_vars', $this);
    }
}