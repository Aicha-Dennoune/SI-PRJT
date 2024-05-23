<?php
require_once 'connectdb.php';
$sql = 'Select * from admin';
$statement = $conn->query($sql);
$admins = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>List of ADMINS</title>
</head>

<body>
   

    <main>
        <header>
            <div class="container">
             
                <div class="header-content">
                    <nav>
                        <ul>
                            <li>
                                <a href="newAdmin.php">Nouveau Admin</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </header>
        <div class="container">
        <h2> Liste Des Admins </h2>

            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($admins as $a) {
                        echo '<tr>';
                        echo '<td>' . $a['ID_ADMIN'] . '</td>';
                        echo '<td>' . $a['NOM_ADMIN'] . '</td>';
                        echo '<td>' . $a['PRENOM_ADMIN'] . '</td>';
                        echo '<td>' . $a['ADRESSE_ADMIN'] . '</td>';
                        echo '<td>' . $a['TELEPHONE_ADMIN'] . '</td>';
                        echo '<td>' . '<a href="deleteAdmin.php?ID_ADMIN=' . $a['ID_ADMIN'] . '"  onclick="return confirm(\'you sure you want to delete admin!\');"><i class="fa fa-trash" aria-hidden="true"></i></a>' . '</td>';     
                        echo '<td><a href="updateAdmin.php?ID_ADMIN=' . $a['ID_ADMIN'] . '"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
