<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];


    try {
        require_once "db.php";



        // for updating the user information in the database
        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 3;";

        // NOTE: Prepare the SQL statement  
        $stmt = $pdo->prepare($query);

        //NOTE: Bind parameters to the prepared statement
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->bindParam(':email', $email);

        $stmt->execute();


        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("ERROR: Could not connect. " . $e->getMessage());
    }
} else {
    // NOTE: Redirect to index.php if the user tries to access this page directly without submitting the form first 
    header("Location: ../index.php");
    exit();
}
