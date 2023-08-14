<?php

namespace App\DTO;

class CepDTO
{
    private $cep;
    private $logradouro;
    private $complemento;
    private $bairro;
    private $localidade;
    private $uf;
    private $ibge;
    private $gia;
    private $ddd;
    private $siafi;

    public function __construct(array $data)
    {
        $this->cep = $data['cep'] ?? '';
        $this->logradouro = $data['logradouro'] ?? '';
        $this->complemento = $data['complemento'] ?? '';
        $this->bairro = $data['bairro'] ?? '';
        $this->localidade = $data['localidade'] ?? '';
        $this->uf = $data['uf'] ?? '';
        $this->ibge = $data['ibge'] ?? '';
        $this->gia = $data['gia'] ?? '';
        $this->ddd = $data['ddd'] ?? '';
        $this->siafi = $data['siafi'] ?? '';
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function getLogradouro(): string
    {
        return $this->logradouro;
    }

    public function getComplemento(): string
    {
        return $this->complemento;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getLocalidade(): string
    {
        return $this->localidade;
    }

    public function getUf(): string
    {
        return $this->uf;
    }

    public function getIbge(): string
    {
        return $this->ibge;
    }

    public function getGia(): string
    {
        return $this->gia;
    }

    public function getDDD(): string
    {
        return $this->ddd;
    }

    public function getSiafi(): string
    {
        return $this->siafi;
    }
}
