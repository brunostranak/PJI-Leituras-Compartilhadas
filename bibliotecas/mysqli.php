<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "pji");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}