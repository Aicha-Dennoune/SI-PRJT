<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="new.css">
  <title>New admin</title>
</head>

<body>
  <main class="login-main">
    <div class="form-container">
      <form action="saveAdmin.php" method="post">
        <div class="input-group">
          <label for="PRENOM_ADMIN">Prenom</label>
          <input type="text" name="PRENOM_ADMIN" id="PRENOM_ADMIN" class="name">
          <label for="NOM_ADMIN">Nom</label>
          <input type="text" name="NOM_ADMIN" id="NOM_ADMIN" class="name">
          <label for="ADRESSE_ADMIN">Adresse</label>
          <input type="text" name="ADRESSE_ADMIN" id="ADRESSE_ADMIN" class="name">
          <label for="TELEPHONE_ADMIN">Telephone</label>
          <input type="text" name="TELEPHONE_ADMIN" id="TELEPHONE_ADMIN" class="name">
        </div>
        
        <div class="button-group">
          <button type="button" class="btn back-btn" onclick="window.location.href='admin.php'">Back</button>
          <button type="submit" class="btn save-btn" name="saveAdmin">Save</button>

        </div>

      </form>
    </div>
  </main>
</body>

</html>