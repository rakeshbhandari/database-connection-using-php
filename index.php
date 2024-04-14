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
    <div class="box5">
        <h2>Post a comment</h2>
        <form action="includes/comment.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <br>
            <input type="text" name="comment_text" class="cmt" placeholder="Your Comment">
            <br>
            <input type="users_id" name="users_id" placeholder="users_id">
            <button class="submit">Post</button>
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

    <div class="box4">
        <h2>Search</h2>
        <form class="searchform" action="search.php" method="post">
            <label for="search">Search for users:</label>
            <input type="text" id="search" name="usersearch" placeholder="Search.....">
            <br>
            <button class="submit">Search</button>
        </form>
    </div>




</body>

</html>