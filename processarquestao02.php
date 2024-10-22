<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processar questão 02</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <header>
        <?php include "cabecalho.inc.html"; ?>
    </header>

    <main>
        <h1>Questão 02 - Detalhes</h1>
        <?php
        $nomes = [
            'az' => 'Ana Zaira',
            'by' => 'Beatriz Yana',
            'cx' => 'Cecília Xerxe',
            'dw' => 'Débora Wendel',
            'ev' => 'Eulália Venturinni'
        ];

        $nomesPessoas = [
            'az' => [
                'ID' => '1001',
                'CPF' => '111.111.111-11',
                'Nascimento' => '01/01/2001',
                'Telefone' => '(11) 1111-1111',
                'email' => 'anazaira@mail.com'
            ],

            'by' => [
                'ID' => '1002',
                'CPF' => '222.222.222-22',
                'Nascimento' => '02/02/2002',
                'Telefone' => '(22) 2222-2222',
                'email' => 'beatrizyana@mail.com'
            ],

            'cx' => [
                'ID' => '1003',
                'CPF' => '333.333.333-33',
                'Nascimento' => '03/03/2003',
                'Telefone' => '(33) 3333-3333',
                'email' => 'ceciliaxerxes@mail.com'
            ],

            'dw' => [
                'ID' => '1004',
                'CPF' => '444.444.444-44',
                'Nascimento' => '04/04/2004',
                'Telefone' => '(44) 4444-4444',
                'email' => 'deborawendel@mail.com'
            ],

            'ev' => [
                'ID' => '1005',
                'CPF' => '555.555.555-55',
                'Nascimento' => '05/05/2005',
                'Telefone' => '(55) 5555-5555',
                'email' => 'eulaliaventurinni@mail.com'
            ]






        ];

        if (isset($_GET['nome'])) {
            $nome = $_GET['nome'];

            if (array_key_exists($nome, $nomes)) {
                echo '<h2>' . $nomes[$nome] . '</h2>';

                if ($nome == 'az') {
                    echo '<ul>';
                    foreach ($nomesPessoas[$nome] as $chave => $valor) {
                        echo '<li>' . $chave . ': ' . $valor . '</li>';
                    }
                    echo '</ul>';
                } elseif ($nome == 'by') {
                    echo '<ul>';
                    foreach ($nomesPessoas[$nome] as $chave => $valor) {
                        echo '<li>' . $chave . ': ' . $valor . '</li>';
                    }
                    echo '</ul>';
                } elseif ($nome == 'cx') {
                    echo '<ul>';
                    foreach ($nomesPessoas[$nome] as $chave => $valor) {
                        echo '<li>' . $chave . ': ' . $valor . '</li>';
                    }
                    echo '</ul>';
                } elseif ($nome == 'dw') {
                    echo '<ul>';
                    foreach ($nomesPessoas[$nome] as $chave => $valor) {
                        echo '<li>' . $chave . ': ' . $valor . '</li>';
                    }
                    echo '</ul>';
                } elseif ($nome == 'ev') {
                    echo '<ul>';
                    foreach ($nomesPessoas[$nome] as $chave => $valor) {
                        echo '<li>' . $chave . ': ' . $valor . '</li>';
                    }
                    echo '</ul>';
                }
            } else {
                echo '<h2>Nome não encontrado.</h2>';
            }
        }
        ?>

        <a href="questao02.php">Voltar</a>

    </main>

    <footer>
        <?php include "rodape.inc.html"; ?>
    </footer>

</body>

</html>