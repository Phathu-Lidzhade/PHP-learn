<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userSearch = $_POST["usersearch"];
    
    try {
        require_once "incluses/dbh.inc.php";

        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);

        $stmt->bindparam(":usersearch", $userSearch);

        $stmt->execute();
        $results = $stmt->fetchALL(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Document</title>
</head>
<body>
   
</body>
</html>