<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 02</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <header>
        <?php
        include "cabecalho.inc.html"
        ?>
    </header>

    <main>
        <h1>Questão 02</h1>
        <a href="index.php">Voltar</a>
        <p>Selecione o usuário do qual deseja ver os detalhes</p>

        <ul>
            <li><a href="processarquestao02.php?nome=az">Ana Zaira</a></li>
            <li><a href="processarquestao02.php?nome=by">Beatriz Yana</a></li>
            <li><a href="processarquestao02.php?nome=cx">Cecília Xerxes</a></li>
            <li><a href="processarquestao02.php?nome=dw">Débora Wendel</a></li>
            <li><a href="processarquestao02.php?nome=ev">Eulália Venturinni</a></li>
        </ul>


    </main>

    <footer>
        <?php
        include "rodape.inc.html";
        ?>
    </footer>

</body>

</html>