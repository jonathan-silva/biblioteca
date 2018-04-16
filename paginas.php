<?php

$item = @$_GET['item'];

if($item =="cadastro_livro"){

    include_once "paginas/cadastro_livro.php";
    }else{
      include_once"paginas/index.php";
}
if ($item =="cadastro_cliente") {

    include_once "paginas/Cad_Cliente.html";
    }else{
        include_once"paginas/index.php";
}
if ($item =="emprestimo"){

    include_once "paginas/Emprestimo.html";
    }else{
      include_once"paginas/index.php";
}
if ($item =="emprestimo_guia") {

    include_once "paginas/Emprestimo.html";
    }else{
        include_once"paginas/index.php";
}
if ($item =="cad_livro_guia") {

    include_once "paginas/cadastro_livro.php";
    }else{
        include_once"paginas/index.php";
}
if ($item =="cad_cliente") {

    include_once "paginas/cadastro_cliente.php";
    }else{
        include_once"index.php";
}
