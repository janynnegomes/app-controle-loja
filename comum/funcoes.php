<?php

function obterCaminhoAdmin(){
    return 'http://'.$_SERVER['HTTP_HOST'].'/loja/administrativo/';
}

function obterCaminhoBase(){
    return 'http://'.$_SERVER['HTTP_HOST'].'/loja/';
}

?>