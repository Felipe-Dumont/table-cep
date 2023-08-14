<?php

namespace Tests\Unit;

use App\DTO\CepDTO;
use PHPUnit\Framework\TestCase;

class cepDTOTest extends TestCase
{
    public function testCreateUserDTO()
    {
        $cepData = [
            'cep' => '01001-000',
            'logradouro' => 'Praça da Sé',
            'complemento' => 'lado ímpar',
            'bairro' => 'Sé',
            'localidade' => 'São Paulo',
            'uf' => 'SP',
            'ibge' => '3550308',
            'gia' => '1004',
            'ddd' => '11',
            'siafi' => '710',
        ];

        $userDTO = new CepDTO($cepData);

        $this->assertInstanceOf(CepDTO::class, $userDTO);
        $this->assertEquals('01001-000', $userDTO->getCep());
        $this->assertEquals('Praça da Sé', $userDTO->getLogradouro());
        $this->assertEquals('lado ímpar', $userDTO->getComplemento());
        $this->assertEquals('Sé', $userDTO->getBairro());
        $this->assertEquals('São Paulo', $userDTO->getLocalidade());
        $this->assertEquals('SP', $userDTO->getUf());
        $this->assertEquals('3550308', $userDTO->getIbge());
        $this->assertEquals('1004', $userDTO->getGia());
        $this->assertEquals('11', $userDTO->getDDD());
        $this->assertEquals('710', $userDTO->getSiafi());
    }
}
