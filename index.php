<?php include("includes/header.php") ?>

<h3>Noticies:</h3>

<?php
if(isset($_SESSION['error'])){
    echo "ERROR: " . $_SESSION['error'] . "<br/><br/>";
    session_unset();
}
?>

<a href="pages/articles.php">tots els articles</a><br/><br/>
<a href="pages/articles.php?visibility=free">Tots els articles gratis</a><br/><br/>
<a href="pages/articles.php?visibility=premium">tots els articles per subscriptors</a><br/><br/>
<a href="pages/articles.php?date=2025-03-31">Tots els articles del 31-3-2025</a><br/><br/>
<!--
<?php
$db = new SQLite3('database/springfield_news (2).db');
$url = "https://laughing-potato-g9pgvvrv9x5f9wxv.github.dev/database/pages/";
$db -> close();
?>
-->
<?php include("includes/footer.html") ?>