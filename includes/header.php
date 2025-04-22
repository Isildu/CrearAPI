<?php
include("../pages/error.php");
$mostrarElemento = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPRINGFIELD NEWS</title>
    <style>

        footer{
    position: relative;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

footer ul {
    list-style: none;
    display: flex;
}

footer ul > li {
    padding: 0 10px;
}

footer address {
    text-align: center;
}
.headerImg{
    width: 30%;
    height: 300px;
    text-align: center;   
}
 header{
    text-align: center;
    background-color: rgb(37, 54, 209);
 }
 h3 {
            font-size: 1.8rem;
            color: #333;
            margin-left: 20px;
            margin-top: 20px;
        }

 
    </style>
</head>
<body>
    <header>
        <img class="headerImg" src="./assets/logo.jpg">
    </header>
<?php
//control de la sessió
session_start();

if(isset($_SESSION['usu_mail'])){
    echo "<h3>Usuari: " . $_SESSION['usu_mail'] . " - ";
    echo "<a href='../pages/logout.proc.php'>Logout</a></h3><br/><br/>";
    $mostrarElemento = true;
} else {
    echo "<h3>Usuari no logat</h3><br/><br/>";
}
?>
    