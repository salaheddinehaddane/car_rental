<?php
session_start();
?>
<?php
include("connexion.php");
$date=date("Y-m-d");
mysqli_query($conn,"INSERT INTO `annulation` VALUES (NULL,'{$_GET['id']}','$date',1)");
mysqli_query($conn,"DELETE FROM `contrat` WHERE No_Contrat='{$_GET['id']}'");
mysqli_query($conn,"UPDATE `voiture` SET `etat` = '1' WHERE `voiture`.`No_Imm` = '{$_SESSION['immatricule']}'");
mysqli_query($conn,"UPDATE `voiture` SET `Id_Client` = NULL WHERE `voiture`.`No_Imm` = '{$_SESSION['immatricule']}'");
echo "<script>
      alert('Réservation annulée! Veuillez nous contacter pour plus d informations');
      window.location.href='reservation.php';
</script>";
exit();
 ?>
