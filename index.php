<?php include("includes/header.php") ?>

<h3>Noticies:</h3>

<?php
if(isset($_SESSION['error'])){
    echo "ERROR: " . $_SESSION['error'] . "<br/><br/>";
    session_unset();
}
?>

<a href="pages/AllArticles.php">tots els articles</a><br/><br/>
<a href="pages/ArticlesFree.php">Tots els articles gratis</a><br/><br/>
<a href="pages/ArticlesPremium.php">tots els articles per subscriptors</a><br/><br/>
<a href="pages/ArticlesDate.php">Tots els articles del 31-3-2025</a><br/><br/>
<!--
    <?php
    $db = new SQLite3('database/springfield_news (2).db');

    if ($mostrarElemento == true) {
        // Si está logueado, mostrar todos los artículos
        $resultats = $db->query("SELECT a.* FROM articles a ORDER BY art_titol ASC");
    } else {
        // Si no está logueado, mostrar solo los artículos públicos
        $resultats = $db->query("SELECT a.* FROM articles a WHERE a.art_visibilitat = 'public' ORDER BY art_titol ASC");
    }
    while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)){
        echo "<strong></strong>" . htmlspecialchars($fila['art_titol']) . "<br><br>";
    }
    $db -> close();
    ?>


    <?php include("includes/footer.html") ?>
-->