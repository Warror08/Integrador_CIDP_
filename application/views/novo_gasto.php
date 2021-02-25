<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Novo Gasto</h1>
    <?= form_open('gastos/salvar') ?>
        <label for="data">Data: <input type="date" name="data"></label><br/>
        <label for="descricao">Descrição: <input type="text" name="descricao"></label><br/>
        <label for="valor">Valor: <input type="number" name="valor"></label><br/>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    <?= form_close() ?>
</body>
</html>