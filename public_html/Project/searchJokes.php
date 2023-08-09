<?php

require_once(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/db.php"); 

if (!is_logged_in()) {
    die(header("Location: login.php"));
}

$username = "";  

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $username = $_POST["username"]; 
}

$db = getDB();
$stmt = $db->prepare("SELECT setup, punchline, username  FROM DadJokes WHERE username = :username");
$stmt->bindValue(":username", $username, PDO::PARAM_STR);
$stmt->execute();
$jokes = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

    <h1 style="background-color: #f2f2f2; padding: 10px; border-radius: 2px;">Search For Jokes  
</h1>


<form method="POST">
    <label for="username">Enter the username to find </label>
     <input type="text" name="username" value="<?php echo $username; ?>" required>
     <button type="submit">Search</button>
 </form>
    <ul>
      <?php foreach ($jokes as $joke) : ?>
     <li>
       <strong>Setup:  </strong> <?php echo $joke["setup"]; ?>
       <strong>Punchline:  </strong><?php echo $joke["punchline"]; ?>
         <strong>Username:  </strong><?php echo $joke["username"]; ?><br><br>

  </li>
     <?php endforeach; ?>
    </ul>
    
    
</div>