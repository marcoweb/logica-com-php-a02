<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Primeiro Exemplo</title>
    </head>
    <body>
        <h1>
        <?php echo 'Olá Web!!!'; ?>
        </h1>
        <p>
            <?= 'Olá sem echo' ?>
        </p>

        <form action="resposta.php" method="post">
            <label for="msg">Selecione a Mensagem:</label>
            <select name="msg">
                <option value="Bom Dia">Bom Dia</option>
                <option value="Boa Tarde">Boa Tarde</option>
                <option value="Boa Noite">Boa Noite</option>
            </select>
            <label for="nome">Digite seu Nome:</label>
            <input type="text" name="nome" />
            <input type="submit" />
        </form>
    </body>
</html>