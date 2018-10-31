<?php

require "/modelo/loginModelo.php";







function index (){


if (ehPost()) {
        extract($_POST);
        alert(logarUsuario($prontuario,$senha));
        redirecionar("");
    } else {

        exibir("login/formulario");
    }

}







?>