<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 01</title>
    <style>
        a {
            text-decoration: none;
        }

        ol {
            list-style-type: lower-alpha;
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
        <h1>Questão 01</h1>
        <a href="index.php">Voltar</a>
        <p><i>* Clique na alternativa correta.</i></p>
        <p>No desenvolvimento de páginas web, o método GET do<br> protocolo HTTP é utilizado para:</p>


        <ol>
            <li><a href="processarquestao01.php?alt=a">Enviar dados de um formulário de forma segura,<br> criptografando as informações no corpo da requisição.</a></li>
            <li><a href="processarquestao01.php?alt=b">Recuperar informações de um servidor, anexando os<br> parâmetros da requisição diretamente na URL.</a></li>
            <li><a href="processarquestao01.php?alt=c">Enviar grandes quantidades de dados de forma eficiente,<br> utilizando o corpo da requisição.</a></li>
            <li><a href="processarquestao01.php?alt=d">Atualizar informações no servidor sem recarregar a página,<br> garantindo uma comunicação assíncrona.</a></li>
        </ol>

    </main>

    <footer>
        <?php
        include "rodape.inc.html";
        ?>
    </footer>

</body>

</html>