<?php

namespace App\Services;

use App\DTO\CepDTO;
use App\Exceptions\CepException;
use Exception;

class CepService
{
    public function getCep(string $cep): CepDTO
    {
        $url = "https://viacep.com.br/ws/{$cep}/json/";

        $options = $this->getOptions('GET');
        $context = stream_context_create($options);
        try {
            $response = file_get_contents($url, false, $context);
        } catch (Exception $e) {
            throw new CepException($e->getMessage());
        }

        if (!$response) {
            throw new CepException('Erro ao acessar a API de CEP.');
        }

        $cep = json_decode($response, true);

        return new CepDTO($cep);
    }

    public function getCsvExport($results): string
    {
        $csvData = "CEP,Logradouro,Bairro,Cidade,Estado\n";

        foreach ($results as $result) {
            $csvData .= "{$result['cep']},{$result['logradouro']},{$result['bairro']},{$result['localidade']},{$result['uf']}\n";
        }

        return $csvData;
    }

    private function getOptions(string $method): array
    {
        $options = [
            'http' => [
                'method' => $method,
            ],
        ];

        return $options;
    }
}
