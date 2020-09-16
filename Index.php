<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Main.css">
        <link rel="icon" type="imagem/png" href="/img/famicon.png" />
        <title>Tradutor Web</title>
    </head>
    <body>
        <main>
            <h1>Tradutor</h1>
            <h2>Traduzindo páginas em Inglês para o português</h2> <p align=center><img src="/img/famicon.png" height=100px width=100px></p>
            <div id="form-items" align=center>
                <form action="src/text.php" method=get target="input">
                    <input type=text name="url" id="url" placeholder="   Insira aqui a url"><br>
                    <input type=submit id="but">
                </form>
            </div>
        </main>
    </body>
</html>
