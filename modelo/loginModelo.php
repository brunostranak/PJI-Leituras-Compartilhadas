<?php


function logarUsuario ($prontuario,$senha){
    
    if($prontuario=="admin" && $senha=="123"){
        
        die();
    }

$comando="SELECT * FROM tblalunos WHERE prontuario='$prontuario' and senha='$senha'";
$cnx= conn();
$retorno=mysqli_query($cnx,$comando);

$registro=mysqli_fetch_assoc($retorno);


return $registro;



}




?>