<?php
require_once "fonctions3.php";

getHeader(true,"ExercicePHP");
if(isset($_COOKIE['user'])){
    $_SESSION['user']=$_COOKIE['user'];
}
if(isset($_GET['logout'])){
    $_SESSION=[];
    session_destroy();
}
if(isset($_POST['user'])){
    $_SESSION['user']=$_POST['user'];
}
if(isset($_SESSION['user']) && !isset($_POST['case'])){
    echo "Vous etes connecté en tant que ".$_SESSION['user'];
    echo "<br><a class='btn btn-primary' href='?logout'>Deconnection</a> ";
}elseif(isset($_POST['case']) && isset($_SESSION['user'])){
    $temps=300;
    setcookie ("user", $_POST['user'], time() + $temps);
    echo "Vous etes connecté en tant que ".$_SESSION['user'];
    echo "<br><a class='btn btn-primary' href='?logout'>Deconnection</a> ";
}else{
?>
<form method="POST">
    <div>
        <label for="user">Entrez votre pseudo</label>
        <input type="text" name="user" id="user">
    </div>
    <input type="submit" value="Valider"><br>
    <input type="checkbox" name="case">
</form>
<?php
}
getFooter();