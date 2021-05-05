<?php
require_once ("verificationAuthentification.php");
require_once ("connexionPDO.php");

$code = $_GET['code'];
$sql = "delete from etudiant where code = $code";

if ($this->$conn->close() !== TRUE) {
    echo "Error deleting record: " . $conn->error;
  }

  $this->$conn->close();

  // Redirect
  header("location:afficherEtudiant.php");

  // Forward
  //require_once ("afficherEtudiant.php");