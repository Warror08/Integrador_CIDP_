<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 1a forma de inserir folha de estilo -->
    <link href="<?= base_url('assets/css/estilo.css')?>" rel="stylesheet">
    
    <!-- 2a forma de inserir folha de estilo -->
    <?= link_tag('assets/css/estilo2.css','stylesheet') ?>

    <title>Document</title>
</head>
<body>
    <h1>Lista de gastos de Fevereiro</h1>
    <table>
        <tr>
            <td>Data</td><td>Descrição</td><td>Valor</td>
        </tr>
        <tr>
            <td>01/02/2021</td><td>Passagem de ônibus</td><td>R$ 4,00</td>
        </tr>
        <tr>
            <td>02/02/2021</td><td>Salgado</td><td>R$ 1,50</td>
        </tr>
        <tr>
            <td>02/02/2021</td><td>Refrigente</td><td>R$ 1,00</td>
        </tr>
    </table>

    <!-- 1a forma de inserir imagens no codeigniter -->
    <img src="<?= base_url('assets/imagens/calculadora.jpg') ?>" />

    <!-- 2a forma de inserir imagens no codeigniter - usando o helper html -->
    <?= img('assets/imagens/dinheiro.jpg') ?>

    <!-- 2a forma de inserir imagens no codeigniter - usando o helper html -->
    <?php 
        $img_usuario = "02";
    ?>
    <?= img("assets/imagens/".$img_usuario.".jpg") ?>

</body>
</html>