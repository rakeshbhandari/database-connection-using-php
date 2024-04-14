<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $comment_text = $_POST["comment_text"];
    $users_id = $_POST["users_id"];


    try {
        require_once "db.php";

        //NOTE: Prepare an INSERT statement
        // Prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.
        $query = "INSERT INTO comments (username, comment_text, users_id) VALUES (:username,:comment_text,:users_id);";

        // NOTE: Prepare the SQL statement  
        $stmt = $pdo->prepare($query);

        //NOTE: Bind parameters to the prepared statement
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':comment_text', $comment_text);
        $stmt->bindParam(':users_id', $users_id);

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
