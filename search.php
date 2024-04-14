<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];



    try {
        require_once "includes/db.php";

        //NOTE: Prepare an INSERT statement
        // Prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.
        $query = "SELECT * FROM comments WHERE username = :userSearch;";

        // NOTE: Prepare the SQL statement  
        $stmt = $pdo->prepare($query);

        //NOTE: Bind parameters to the prepared statement
        $stmt->bindParam(':userSearch', $userSearch);


        $stmt->execute();

        // fetch all refers to the fact that we want to fetch all the rows from the database that match the search criteria
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("ERROR: Could not connect. " . $e->getMessage());
    }
} else {
    // NOTE: Redirect to index.php if the user tries to access this page directly without submitting the form first 
    header("Location: ../index.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    <title>Search Results</title>

</head>

<body>


    <section>

        <h3>Search Results:</h3>
        <?php

        if (empty($results)) {
            echo "<div>";
            echo "<p>No results found</p>";
            echo "</div>";
        } else {
            foreach ($results as $result) {
                echo '<div class="results">';
                echo "<p> " . htmlspecialchars($result["username"]) . "</p>";
                echo "<p> " .  htmlspecialchars($result["comment_text"]) . "</p>";
                echo "<p>" .  htmlspecialchars($result["created_at"])  . "</p>";
                echo "</div>";
            }
        }


        ?>
    </section>


</body>

</html>