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
<h1 style="background-color: #f2f2f2; padding: 10px; border-radius: 4px;">Create Your Own Joke</h1>

     <p> <strong>Create your own joke with a setup and punchline.</strong> <p>
    <form method="POST">
      <label for="setup">Setup:</label>
     <input type="text" name="setup"style="width: 1000px; height: 30px;" required><br>
    <label for="punchline">Punchline:</label>
    <input type="text" name="punchline"style="width: 1000px; height: 30px;" required> <br>
     <label for="username">Your Username:</label>
     <input type="text" name="username" style="width: 250px; height: 30px;"required> <br>
     <button type="submit">Submit Your Joke</button> <br>
     <img src= "https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExZ3NqdzA1N3MxMjJ2YXg3MW5weGttdzk2aXF1ZWQ5aTQ2ZTkzdnNzdSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9dHM/MI0SYPSpobA8Rk6WFQ/giphy.gif" width="500" height="300">

    </form>
</body>
</html> 
</div>