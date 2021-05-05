<?php
require_once ("connexion.php");

$login=$_POST['login'];
$password=$_POST['password'];

$mdp_crypte = md5($password);

//$sql="select niveau from user1 where login='$login' and password='$mdp_crypte'";

$stmt = $conn->prepare("select niveau from user where login = ? and password = ?");
$stmt->bind_param("ss", $login, $mdp_crypte);
$stmt->execute();
$result = $stmt->get_result();

if($user=$result->fetch_assoc()) {
    session_start();
    $_SESSION['NIVEAU']=$user['niveau'];
    header("location:afficherEtudiant.php");
} else {
    header("location:index.php");
} 

?>