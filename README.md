<h1 align="center">Consulta CEPs - Grupo Acert </h1>

<div align="center">
   Teste 3 do Teste para desenvolvedor Front-end/back PHP do Grupo Acert.
</div>

<!-- TABLE OF CONTENTS -->

## Table of Contents

- [Table of Contents](#table-of-contents)
- [Overview](#overview)
  - [Built With](#built-with)
- [Features](#features)
- [How To Use](#how-to-use)

<!-- OVERVIEW -->

## Overview

![screenshot](https://github.com/Felipe-Dumont/github-api-app/blob/main/public/img/overview3.gif)

- Você pode encontrar uma demo [aqui](https://felipe-dumont.github.io/table-cep/).
- Neste projeto tive a experiência de trabalhar com Laravel. Utilizando seus recursos nativos como Blade para trabalhar com templates HTML, Web Routes para registrar as rotas da aplicação e testes de unidade do PHPUnit para criar uma consulta de um ou mais CEP e criar uma tabela a partir dos dados coletados. É possível também gerar um .csv baseado na tabela.  
- Aprendi a trabalhar com criação dinâmica de tabelas e geração de arquivos .csv .

### Built With

- [Laravel](https://laravel.com/)

## Features

Esse projeto foi criado com o objetivo de concluir um desafio. O desafio era Consumir a api de CEP, possibilitar consultas por um ou mais CEPs e criar uma tabela para exibir os dados do coletados pela consulta, criar um botão para exportar todos os registros de cep’s consultados em um arquivo no formato csv e um botão para limpar todo o conteúdo da table.

Foi criada uma tela inicial que contém uma área de texto para digitar os CEP, eles podem ser separados por espaço ou por vírgula para realizar a consulta. Com os CEPs ele realiza uma busca e cria uma tabela com os dados coletados da API de CEP. Quando a tabela é gerada, os botões para exportar e limpar a tabela são habilitados. O botão de exportar chama a função que vai criar o formato e gerar o download do arquivo .csv. O botão de limpar tabela vai gerar os registros da tabela.

## How To Use

Para clonar e executar este aplicativo, você precisará de [Git](https://git-scm.com) instalado em seu computador. Na sua linha de comando:

```bash
# Clone this repository
$ git clone https://github.com/Felipe-Dumont/github-api-app.git

# install dependencies
$ composer install
# and
$ npm install

# Run the app
$ php artisan serve
# and
$ npm run dev
```


