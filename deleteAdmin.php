<?php
require_once 'connectdb.php';

$sql = 'Delete From admin where ID_ADMIN=:i';

$statement = $conn->prepare($sql);

$statement->execute([
	':i' => $_GET['ID_ADMIN'],
]);


header('Location: admin.php');

?>