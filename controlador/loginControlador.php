<?php

require "/modelo/loginModelo.php";







function index (){


if (ehPost()) {
        extract($_POST);
        
        $retorno=logarUsuario($prontuario,$senha);
        
        if(!empty($retorno)){
            
            
         alert("Usuario logado com sucesso");  
         $_SESSION["logado"]= $retorno["idAlunos"];
         $_SESSION["nomeAluno"]= $retorno ["nomeAluno"];
         

        
         exibir("inicial/inicio");
        }else{
            
            exibir("admin/inicio");
        }
                
    } else {

        exibir("inicial/inicio");
    }

}


function logout(){
    
    
    unset($_SESSION["logado"]);
    
    alert("Deslogado com sucesso");
    redirecionar("");
    
}







?>