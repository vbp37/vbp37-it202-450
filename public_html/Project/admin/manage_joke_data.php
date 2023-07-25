<?php
require_once(__DIR__ . "/../../../lib/db.php");
require(__DIR__ . "/../../../partials/nav.php");
require_once(__DIR__ . "/../../../lib/example_mapping.php");

require_once(__DIR__ . "/../../../lib/render_functions.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: " . get_url("home.php")));
}

//TODO need to update insert_breeds... to use the $mappings array and not go based on is_int for value
//vbp37 IT202-450 M23  7/24/23
function insert_jokes_into_db($db, $jokes)
{
    // Prepare the SQL query
    $query = "INSERT INTO `DadJokes` (joke_id, setup, punchline, created) VALUES ";
    if (count($jokes) > 0) {
        $cols = array_keys($jokes[0]);
        $query .= "(" . implode(",", array_map(function ($col) {
            return "`$col`";
        }, $cols)) . ") VALUES ";

        $values = [];
        foreach ($jokes as $i => $joke) {
            $values[] = "(:joke_id$i, :setup$i, :punchline$i, NOW())";
        }
        $query .= implode(",", $values);

        $stmt = $db->prepare($query);

        foreach ($jokes as $i => $joke) {
            $stmt->bindValue(":joke_id$i", $joke["_id"]);
            $stmt->bindValue(":setup$i", $joke["setup"]);
            $stmt->bindValue(":punchline$i", $joke["punchline"]);
        }

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            error_log(var_export($e, true));
            echo "Error: " . $e->getMessage(); 
        }
    }
}

function process_jokes($jokeData)
{
    //IT202-450 M23 VBP37  july 24 2023
    $status = $jokeData["status"];
    if ($status != 200) {
        return;
    }

    $data = json_decode($jokeData["response"], true);
    $jokes = map_data($data["body"]); 

    error_log($jokeData["response"]);

    if (!empty($jokes)) {
        $db = getDB();
        insert_jokes_into_db($db, $jokes);
    }
    
}

$action = se($_POST, "action", "", false);
if ($action) {
    switch ($action) {
        case "jokes":
            $jokeData = get("https://dad-jokes.p.rapidapi.com/random/joke", "DADJOKE_API_KEY", [], true, "dad-jokes.p.rapidapi.com");
            process_jokes($jokeData);
            break;
    }
}

?>


<div class="container">
    <h2>Jokes from API</h2>
   
</div>


<div class="container">
    <h2>Jokes within the database</h2>
    <?php if (!empty($jokesFromDB)) : ?>
        <?php foreach ($jokesFromDB as $joke) : ?>
            <div class="joke">
                <h3><?php echo $joke["setup"]; ?></h3>
                <p><?php echo $joke["punchline"]; ?></p>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p>No Jokes yet</p>
    <?php endif; ?>
</div>
