<?php
require_once 'connectdb.php';

if (isset($_POST['saveAdmin'])) {
    $sql = 'INSERT INTO admin( NOM_ADMIN, PRENOM_ADMIN, ADRESSE_ADMIN, TELEPHONE_ADMIN) VALUES(:n,:pre,:ad,:te)';

    $statement = $conn->prepare($sql);

    $statement->execute([
        ':n' => $_POST['NOM_ADMIN'],
        ':pre' => $_POST['PRENOM_ADMIN'],
        ':ad' => $_POST['ADRESSE_ADMIN'],
        ':te' => $_POST['TELEPHONE_ADMIN']
    ]);
}
if (isset($_POST['updateAdmin'])) {
  
    $sql = 'update admin set NOM_ADMIN=:n, PRENOM_ADMIN=:pre, ADRESSE_ADMIN=:ad, TELEPHONE_ADMIN=:te where ID_ADMIN=:i';

    $statement = $conn->prepare($sql);
   
    $statement->execute([
        ':n' => $_POST['NOM_ADMIN'],
        ':pre' => $_POST['PRENOM_ADMIN'],
        ':ad' => $_POST['ADRESSE_ADMIN'],
        ':te' => $_POST['TELEPHONE_ADMIN'],
        ':i' => $_GET['ID_ADMIN']
    ]);
}
header('Location: admin.php');