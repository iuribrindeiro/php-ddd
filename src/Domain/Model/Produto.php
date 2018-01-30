<?php

namespace Domain\Model;

use Domain\Model\Base\BaseEntity;

/**
 * Created by PhpStorm.
 * User: iurib
 * Date: 30/01/2018
 * Time: 20:50
 */

class Produto extends BaseEntity
{
    /**
     * @var string
     */
    private $descricao;

    /**
     * @var float
     */
    private $valor;

    /**
     * @var string
     */
    private $observacao;

    /**
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @param string $descricao
     * @return Produto
     */
    public function setDescricao(string $descricao): Produto
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * @param float $valor
     * @return Produto
     */
    public function setValor(float $valor): Produto
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * @return string
     */
    public function getObservacao(): string
    {
        return $this->observacao;
    }

    /**
     * @param string $observacao
     * @return Produto
     */
    public function setObservacao(string $observacao): Produto
    {
        $this->observacao = $observacao;
        return $this;
    }
}