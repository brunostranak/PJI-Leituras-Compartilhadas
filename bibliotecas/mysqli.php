<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "PJI");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}