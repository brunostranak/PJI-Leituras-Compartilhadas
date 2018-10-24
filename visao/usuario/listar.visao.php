<h2>Listar usuários</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>PRONTUARIO</th>
            <th>SENHA</th>
            
        </tr>
    </thead>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['idAlunos']?></td>
        <td><?=$usuario['nomeAluno']?></td>
        <td><?=$usuario['email']?></td>
         <td><?=$usuario['prontuario']?></td>
          <td><?=$usuario['senha']?></td>
    <!-- <td><a href="./usuario/visualizar/<?=$usuario['id']?>" class="btn btn-secondary">view</a></td> -->
        <td><a href="./usuario/editar/<?=$usuario['idAlunos']?>" class="btn btn-info">edit</a></td>
        <td><a href="./usuario/deletar/<?=$usuario['idAlunos']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>


<a href="./usuario/cadastrar" class="btn btn-primary">Adicionar novo usuario</a>

