<!DOCTYPE html>
<html lang=pt-br>
<head>
    <title>Consulta de CEP</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <h1>Consulta de CEP</h1>
        <form action="{{ route('consulta-cep') }}" method="POST">
            @csrf
            <label for="ceps">Insira os CEPs separados por vírgula ou espaço:</label>
            <textarea name="ceps" rows="4" required></textarea>
            @error('ceps')
                <div class="error">{{ $message }}</div>
            @enderror
            <button type="submit">Consultar</button>
        </form>

        @isset($results)
        @if($results)
        <table>
            <thead>
                <tr>
                    <th>CEP</th>
                    <th>Logradouro</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $cep)
                <tr>
                    <td>{{ $cep->getCep() }}</td>
                    <td>{{ $cep->getLogradouro() }}</td>
                    <td>{{ $cep->getBairro() }}</td>
                    <td>{{ $cep->getLocalidade() }}</td>
                    <td>{{ $cep->getUf() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <form action="{{ route('export-csv') }}" method="POST">
            @csrf
            @foreach ($results as $key => $cep)
            <input type="hidden" name="results[{{ $key }}][cep]" value="{{ $cep->getCep() }}">
            <input type="hidden" name="results[{{ $key }}][logradouro]" value="{{ $cep->getLogradouro() }}">
            <input type="hidden" name="results[{{ $key }}][bairro]" value="{{ $cep->getBairro() }}">
            <input type="hidden" name="results[{{ $key }}][localidade]" value="{{ $cep->getLocalidade() }}">
            <input type="hidden" name="results[{{ $key }}][uf]" value="{{ $cep->getUf() }}">
            @endforeach
            <button type="submit">Exportar CSV</button>
        </form>

        <form action="{{ route('limpar-tabela') }}" method="POST">
            @csrf
            <button type="submit">Limpar Tabela</button>
        </form>
        @endif
        @endisset

        @if(session('error'))
        <div class="alert">
            {{ session('error') }}
        </div>
        @endif
    </div>
</body>
</html>
