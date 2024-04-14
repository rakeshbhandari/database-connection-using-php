<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];



    try {
        require_once "db.php";

        // AND refers to the condition that both username and password should match to delete the user
        $query = "DELETE FROM users WHERE username=:username AND pwd =:pwd ;";

        // NOTE: Prepare the SQL statement  
        $stmt = $pdo->prepare($query);

        //NOTE: Bind parameters to the prepared statement
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd);

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
