<?php

function conexao()
{
    $x = new PDO("mysql:host=localhost, dbname=books", "root", "");
    return $x;
}

function getData($table)
{
    $conexao = conexao();
    $query = $conexao->query("select * from {$table}");
    $query->execute();
    return $query->fetchAll();
}

var_dump(getData("Pedaw"));