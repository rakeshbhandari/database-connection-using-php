<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];


    try {
        require_once "db.php";

        //NOTE: Prepare an INSERT statement
        // Prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.
        $query = "INSERT INTO users (username, pwd, email) VALUES (:username,:pwd,:email);";

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