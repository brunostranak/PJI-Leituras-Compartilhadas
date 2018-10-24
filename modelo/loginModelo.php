<?php


function logarUsuario ($prontuario,$senha){

$comando="SELECT * FROM tblalunos WHERE prontuario='$prontuario' and senha='$senha'";

$retorno=mysqli_query($cnx,$comando);

$registro=mysqli_fetch_assoc($retorno);

if(!empty($registro)){
return $registro;



}
}



?>