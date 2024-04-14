<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Documenting the use of database </title>
</head>

<body>

    <div class="box1">
        <h1><b>Fill out the form</b></h1>
        <form action="includes/formhandler.php" method="post">
            <input type="text" class="username" name="username" placeholder="Username">
            <br>
            <input type="password" class="pwd" name="pwd" placeholder="Password">
            <br>
            <input type="text" class="email" name="email" placeholder="Email">
            <br>
            <button class="submit">Signup</button>
        </form>
    </div>

    <div class="box2">
        <h2>Change account</h2>
        <form action="includes/userupdate.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <br>
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <input type="text" name="email" placeholder="Email">
            <button class="submit">Update</button>
        </form>
    </div>
    <div class="box3">
        <h2>Delete account</h2>
        <form action="includes/userdelete.php" method="post">
            <input type="text" class="username" name="username" placeholder="Username">
            <br>
            <input type="password" class="pwd" name="pwd" placeholder="Password">
            <br>
            <button class="submit">Delete</button>
        </form>
    </div>




</body>

</html>