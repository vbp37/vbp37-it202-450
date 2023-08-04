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
<h1 style="background-color: #f2f2f2; padding: 10px; border-radius: 5px;">Dad Joke Generator</h1>
    <?php if ($joke) : ?>
        <div class="joke">
            <h2> Setup: <?php echo $joke["setup"]; ?></h2>
            <p> <strong>Punchline: </strong> <?php echo $joke["punchline"]; ?></p>
        </div>
    <?php else : ?>
        <p>Joke Generator is Currently Unavailable, try again later.</p>
    <?php endif; ?>
     <button onclick="window.location.reload();">New Joke </button><br><br>

     <img src= "https://media.tenor.com/TZVxEIGQ0KYAAAAM/parenting-humor.gif" width="200" height="200">
     <img src= "https://media-cldnry.s-nbcnews.com/image/upload/t_fit-1500w,f_auto,q_auto:best/MSNBC/Components/Video/150908/tdy_tren_jokes_150908.jpg" width="200"  height="200">
     <img src= "https://www.digitalmomblog.com/wp-content/uploads/2019/06/funny-dad-photos-horse-mask.jpg" width="200"  height="200">
     <img src= "https://histage.com/images/thumbs/0007154_dad-joke-intervention_550.jpeg" width="200"  height="200">
     <img src= "https://www.csectioncomics.com/wp-content/uploads/2018/12/dad-jokes-THUMBNAIL-1200x-60p.jpg" width="200"  height="200">

     
</div>







        