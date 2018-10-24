<?php


require "modelo/usuarioModelo.php";


function index (){

	$dados["usuarios"]=pegarTodosUsuarios();
	exibir("usuario/listar",$dados);
}



function cadastrar (){

if (ehPost()) {
        extract($_POST);
        alert(cadastrarUsuario($nome,$email,$prontuario,$senha));
        redirecionar("");
    } else {

        exibir("usuario/formulario");
    }



}


function deletar($id){


	deletarUsuario($id);

	redirecionar("");
	






}


function editar($id){




	
}

?>