<?php 


include "../functions.php";
session_start();

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    "/"=>"../view/home.php",
    "/home"=>"../view/home.php",
    "/login"=>"../view/login.php",
    "/logout" => "../model/deconnection.php",
    "/produits-gestion"=>"../view/gestion-produits.php",
    "/products"=>"../view/produits.php",
    "/contact"=>"../view/contact.php",
    "/new"=>"../view/new-arrivals.php",
    "/fautred"=>"../view/feautred-products.php",
    "/blog"=>"../view/blog.php",
    "/header"=>"../view/header.php",
    "/update"=>"../view/update.php",
    "/gestion-produits"=>"../view/gestion-produits.php"
];


// var_dump($_SESSION);
// die();





if(array_key_exists($uri,$routes)){
    include "../controller/".$routes[$uri];
}else{
    echo "ok";
}