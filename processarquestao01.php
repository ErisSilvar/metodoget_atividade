<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processar questão 01</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <header>
        <?php
        include "cabecalho.inc.html";
        ?>
    </header>

    <main>
        <h1>Questão 01 - Análise</h1>
        <p>PERGUNTA: No desenvolvimento de páginas web, o método<br> GET do protocolo HTTP é utilizado para: ...</p>
        <?php
        $alternativas = [
            'a' => 'Enviar dados de um formulário de forma segura,
criptografando as informações no corpo da requisição.',
            'b' => 'Recuperar informações de um servidor, anexando os
parâmetros da requisição diretamente na URL.',
            'c' => 'Enviar grandes quantidades de dados de forma eficiente,
utilizando o corpo da requisição.',
            'd' => 'Atualizar informações no servidor sem recarregar a página,
garantindo uma comunicação assíncrona.'
        ];

        if (isset($_GET['alt'])) {
            $alt = $_GET['alt'];

            echo 'Você selecionou a opção ' . '<i>' . $alternativas[$alt] . '</i>';

            if ($alt == 'b') {
                echo '<p>É isso aí! A resposta está correta.</p>';
            } else {
                echo '<p>Hmmm... A resposta está incorreta. Reveja a pergunta, analise as aternativas e tente outra vez.</p>';
            }
        }




        ?>
        <a href="questao01.php">Voltar</a>
    </main>

    <footer>
        <?php
        include "rodape.inc.html"
        ?>
    </footer>

</body>

</html>