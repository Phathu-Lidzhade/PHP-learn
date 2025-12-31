<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <h3>Change Account</h3>

    <form class="searchform" action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <br><br>
        <input type="Password" name="pwd" placeholder="Password">
        <br><br>
        <input type="text" name="email" placeholder="E-Mail">
        <br><br>
        <button>Update</button>
    </form>

    <h3>Delete Account</h3>

    <form class="searchform" action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <br><br>
        <input type="Password" name="pwd" placeholder="Password">
        <br><br>
        <button>Delete</button>
    </form>

</body>
</html>