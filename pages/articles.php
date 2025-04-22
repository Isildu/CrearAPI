<?php
//$db = new SQLite3('database/springfield_news (2).db');
if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['visibility']) && !isset($_GET['date'])){
echo "Funciona";
}
else echo "ERROR"
?>