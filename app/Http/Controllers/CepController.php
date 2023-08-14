<?php

namespace App\Http\Controllers;

use App\Exceptions\CepException;
use App\Services\CepService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CepController extends Controller
{
    private $cepService;

    public function __construct(CepService $cepService)
    {
        $this->cepService = $cepService;
    }

    public function index()
    {
        return view('cep');
    }

    public function consultaCep(Request $request)
    {
        $cepsInput = $request->input('ceps');
        $ceps = preg_split('/[ ,]+/', $cepsInput);

        try {
            $results = [];

            foreach ($ceps as $cep) {
                if (!preg_match('/^\d{8}$/', $cep)) {
                    return redirect()->route('index')->with('error', "CEP $cep inválido");
                }

                $data = $this->cepService->getCep($cep);

                array_push($results, $data);
            }

            return view('cep', compact('results'));
        } catch (CepException $e) {
            return redirect()->route('index')->with('error', $e->getMessage());
        }
    }

    public function exportCsv(Request $request)
    {
        $results = $request->input('results');

        $csvData = $this->cepService->getCsvExport($results);

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="registros_cep.csv"',
        ];

        return response($csvData, 200, $headers);
    }

    public function limparTabela()
    {
        $results = [];
        return view('cep', ['results' => $results]);
    }
}
