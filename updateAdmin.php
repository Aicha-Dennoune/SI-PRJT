<?php
require_once('connectdb.php');
$stmt = $conn->prepare("Select * from admin where ID_ADMIN=:i");

$stmt->execute(
  ['i' => $_GET['ID_ADMIN']]
);

$admins = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="update.css">
  <title>New admin</title>
</head>

<body>
  <main class="login-main">
    <div class="form-container">
      <form action="saveAdmin.php?ID_ADMIN=<?php echo $_GET['ID_ADMIN'] ?>" method="post">
        <div class="input-group">
        <label for="PRENOM_ADMIN">Prenom</label>
        <input type="text" name="PRENOM_ADMIN" id="PRENOM_ADMIN" class="name" value="<?php echo $admins['PRENOM_ADMIN'] ?>">

        <label for="NOM_ADMIN">Nom</label>
<input type="text" name="NOM_ADMIN" id="NOM_ADMIN" class="name" value="<?php echo $admins['NOM_ADMIN'] ?>" >

<label for="ADRESSE_ADMIN">Adresse</label>
<input type="text" name="ADRESSE_ADMIN" id="ADRESSE_ADMIN" class="name" value="<?php echo $admins['ADRESSE_ADMIN'] ?>" >

<label for="TELEPHONE_ADMIN">Telephone</label>
<input type="text" name="TELEPHONE_ADMIN" id="TELEPHONE_ADMIN" class="name" value="<?php echo $admins['TELEPHONE_ADMIN'] ?>" >
        </div>

        <div class="input-group">
          <button name="updateAdmin">update</button>
          <button type="button" class="btn back-btn" onclick="window.location.href='admin.php'">Back</button>

        </div>


        
      </form>
    </div>
  </main>
</body>

</html>