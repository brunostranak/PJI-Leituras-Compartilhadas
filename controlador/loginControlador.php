<?php

require "modelo/loginModelo.php";




function index (){

exibir("login/formulario");

}


function logar ($prontuario,$senha){


if (ehPost()) {
        extract($_POST);
        alert(logarUsuario($prontuario,$senha));
        redirecionar("");
    } else {

        exibir("usuario/formulario");
    }

}







?>