<?php

require(__DIR__ . "/../../../partials/nav.php");

//VBP37 IT202-450 m23  July 24 2023

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    redirect("home.php");
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

// Display the jokes fetched from the Dad Jokes API
if (isset($jokesFromDB) && is_array($jokesFromDB) && count($jokesFromDB) > 0) {
    foreach ($jokesFromDB as $joke) {
        echo '<div class="joke">';
        echo '<h3>' . $joke["setup"] . '</h3>';
        echo '<p>' . $joke["punchline"] . '</p>';
        echo '</div>';
    }
} else {
    echo '<p>No Jokes yet</p>';
}
?>


<div class="container">
    <h2>Dad Jokes from API/h2>
    <form method="POST">
        <button type="submit" name="action" value="jokes">Give me a joke</button>
    </form>
</div>


<?php

?>