<?php

/* require_once(__DIR__ . "/../../lib/load_api_keys.php");
require_once(__DIR__ . "/../../lib/api_helper.php"); */
require(__DIR__ . "/../../partials/nav.php");


//vbp37 IT202-450 M-23 8/4/23
$db = getDB();

$stmt = $db->prepare("SELECT setup, punchline, username FROM DadJokes");
$stmt->execute();
$jokes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="jokeContainer">
<h1 style="background-color: #f2f2f2; padding: 10px; border-radius: 5px;">Jokes Made By You Guys</h1>

    <?php if (count($jokes) > 0) : ?>
    <ul>
        <?php foreach ($jokes as $joke) : ?>
        <li>
             <strong>Setup:  </strong> <?php  echo   $joke["setup"]; ?>
         <strong>Punchline:  </strong><?php  echo $joke["punchline"]; ?>
             <strong>Creator:  </strong><?php echo $joke["username"];  ?><br><br>
               
        </li>

        <?php endforeach; ?>
        
<?php endif; ?>
</div>