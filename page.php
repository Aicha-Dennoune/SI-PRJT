<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intern Management</title>
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
   

    <div class="login-container">
        <div class="title-background">
            <h1 class="title">SPORT</h1>
            <h1 class="title">CENTER</h1>
        </div>
    </div>

    <div class="login-button-container">
        <form action="admin.php" method="post">
            <button type="submit" class="login-button" name="login"><i class="fas fa-sign-in-alt"></i>afficher</button>
        </form>
    </div>

    <?php
    if(isset($_POST['login'])) {
        header("Location: admin.php");
        exit;
    }
    ?>
</body>
</html>