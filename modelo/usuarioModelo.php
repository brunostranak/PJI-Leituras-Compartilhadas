<?php






function cadastrarUsuario ($nomeAluno,$email,$prontuario,$senha){

	$sql= "INSERT INTO  tblalunos (nomeAluno, email, prontuario, senha) VALUES ('$nomeAluno', '$email', '$prontuario', '$senha');";


	$resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Usuario cadastrado com sucesso!';


}



function pegarTodosUsuarios (){

	$sql= "SELECT * FROM tblalunos";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $usuarios[] = $linha;
    }
    return $usuarios;


}



function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM tblalunos WHERE idAlunos= $id";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}


function deletarUsuario($id) {
    $sql = "DELETE FROM tblalunos WHERE idAlunos = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!';
            
}


function editarUsuario ($nomeAluno,$email,$prontuario,$senha){


}




?>

