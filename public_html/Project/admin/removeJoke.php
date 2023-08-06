
<?php
require(__DIR__ . "/../../../partials/nav.php");
require_once(__DIR__ . "/../../../lib/render_functions.php");
$isAdmin = true; 
if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}



if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    if (isset($_POST["remove_joke"]) && is_numeric($_POST["remove_joke"])) {
        $jokeId = (int) $_POST["remove_joke"];

        
        $db = getDB();
        $stmt = $db->prepare("DELETE FROM DadJokes WHERE id = :jokeId");
        try {
            $stmt->execute([":jokeId" => $jokeId]);
            $success_message = "Joke removed successfully!";
        } catch (PDOException $e) {
            $error_message = "An error occurred while removing the joke: " . $e->getMessage();
        }
    }
}


$db = getDB();
$stmt = $db->prepare("SELECT id, setup, punchline FROM DadJokes");
$stmt->execute();
$jokes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Mode Edit Joke Database</title>
</head>
<body>
     <?php if ($isAdmin): ?>
        <h1>Admin Mode Edit Joke Database</h1>

        <?php if (count($jokes) > 0): ?>
            <ul>
            <?php foreach ($jokes as $joke): ?>
                 <li>
                        <form method="POST">
                          <input type="hidden" name="remove_joke" value="<?php echo $joke['id']; ?>">
                        <?php echo "Setup: " . $joke['setup'] . "<br>"; ?>
                         <?php echo "Punchline: " . $joke['punchline'] . "<br>"; ?>
                          <button type="submit">Remove Joke From Database </button> 
                        </form>
                </li>
                <?php endforeach; ?>
       </ul>
     <?php else: ?>
            <p>No jokes found.</p>
      <?php endif; ?>
    <?php else: ?>
        <h1>Error</h1>
        <p>You don't have permission to view this page.</p>
      
        <a href="https://vbp37-prod.herokuapp.com/Project/home.php">Go to Home Page</a>
    <?php endif; ?>
</body>
</html>