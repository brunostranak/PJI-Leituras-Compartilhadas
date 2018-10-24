<form action="" method="POST">
    nome: <input type="text" name="nome" value="<?=@$usuario['nome']?>">
    <br>
    email: <input type="text" name="email" value="<?=@$usuario['email']?>">
    <br>
    prontuario: <input type="text" name="prontuario" value="<?=@$usuario['prontuario']?>">
    <br>
    senha: <input type="text" name="senha" value="<?=@$usuario['senha']?>">
    <br>
    <button type="submit">Enviar</button>
</form>