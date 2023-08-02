<?php

require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/render_functions.php");


if (!is_logged_in()) {
    die(header("Location: login.php"));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $setup = $_POST["setup"];
    $punchline = $_POST["punchline"];
    $username = $_POST["username"];

    

    // Insert the joke into the database
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO DadJokes (setup, punchline, username) VALUES (:setup, :punchline, :username)");
    $stmt->execute([
        ":setup" => $setup,
        ":punchline" => $punchline,
        ":username" => $username,
    ]);

    echo "Joke successfully created and added!";
}
?>
<!--<!DOCTYPE html>
<html>
<head>
    <title>Create Jokes</title>
</head>
<body> -->
   
<div>
    <h1>Create Jokes</h1>
    <form method="POST">
      <label for="setup">Setup:</label>
     <input type="text" name="setup" required><br>
    <label for="punchline">Punchline:</label>
    <input type="text" name="punchline" required> <br>
     <label for="username">Your Username:</label>
     <input type="text" name="username" required> <br>
     <button type="submit">Submit Your Joke</button>
    </form>
/*</body>
</html> */
</div>