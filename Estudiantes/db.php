<!-- CREAMOS LAS CONSTANTES GLOBALES PARA LA CONECCIÓN  -->

<?php
if(!defined("DB_TYPE")){ // SI LA BD NO EXISTE, LA CREA
    defined("DB_TYPE", "mysql"); //TIPO DE LA BASE DE DATOS
}

if(!define("DB_HOST")){
    define("DB_HOST", "localhost");
}

if(!define("DB_NAME")){
    define("DB_NAME", "campus");
}

if(!define("DB_USER")){
    define("DB_USER", "camper");
}

if(!define("DB_PWD")){
    define("DB_PWD", "camper2023");
}

?>