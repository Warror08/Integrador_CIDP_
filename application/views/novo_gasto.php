<!-- fazer commit -->
    <h1>Adicionar nova denuncia de saúde</h1>
    <?= form_open('gastos/salvar') ?>
        <label for="data">Data: <input type="date" name="data"></label><br/>
        <label for="assunto">Assunto: <input type="text" name="assunto"></label><br/>
        <label for="descricao">Descrição: <input type="text" name="descricao"></label><br/>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    <?= form_close() ?>
