<?php
require_once(__DIR__ . "/../../lib/load_api_keys.php");
require_once(__DIR__ . "/../../lib/api_helper.php");
require(__DIR__ . "/../../partials/nav.php");



$jokeData = get("https://dad-jokes.p.rapidapi.com/random/joke", "DADJOKE_API_KEY", [], true, "dad-jokes.p.rapidapi.com");

error_log("Response: " . var_export($jokeData, true));

$joke = null;
if (isset($jokeData["status"]) && $jokeData["status"] == 200 && isset($jokeData["response"])) {
    $response = json_decode($jokeData["response"], true);
    if (isset($response["body"][0]["setup"]) && isset($response["body"][0]["punchline"])) {
        $joke = $response["body"][0];
    }
}
?>

<div class="container">
    <h1>Dad Joke Generator</h1>
    <?php if ($joke) : ?>
        <div class="joke">
            <h2><?php echo $joke["setup"]; ?></h2>
            <p><?php echo $joke["punchline"]; ?></p>
        </div>
    <?php else : ?>
        <p>Joke Generator is Currently Unavailable, try again later.</p>
    <?php endif; ?>
</div>







        