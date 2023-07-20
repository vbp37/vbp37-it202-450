<?php
require_once(__DIR__ . "/../../lib/load_api_keys.php");
require_once(__DIR__ . "/../../lib/api_helper.php");
require(__DIR__ . "/../../partials/nav.php");

$result = get("https://dad-jokes.p.rapidapi.com/random/joke", "DADJOKE_API_KEY", [], true, "dad-jokes.p.rapidapi.com");

error_log("Response: " . var_export($result, true));
if (isset($result["status"]) && $result["status"] == 200 && isset($result["response"])) {

/*if (isset($result, "status", 400, false) == 200 && isset($result["response"])) { */
    $result = json_decode($result["response"], true);
} else {
    $result = [];
}
?>

<div class="container-fluid">
    <h1>Random Joke - Demo</h1>
    <p>Remember, we typically won't be frequently calling live data from our API, this is merely a quick sample. We'll want to cache data in our DB to save on API quota.</p>
    <div class="row">
        <?php foreach ($result as $cat) : ?>
            <div class="col">
                <div class="card" style="width: 15em; height:350px">
                    <img src="<?php echo $cat["url"]; ?>" style="width: 100%; max-height:256px; object-fit:scale-down" />
                    <div class="card-body">
                        <h5 class="card-title">Cat</h5>
                        <p class="card-text">
                            <?php
                            $has_breeds = isset($cat["breeds"]) && count($cat["breeds"]) > 0;
                            //output prep
                            if ($has_breeds) {
                                $breed_str = trim(join(", ", array_map(function ($breed) {
                                    return $breed["name"];
                                }, $cat["breeds"])));
                            }
                            ?>
                            <?php if ($has_breeds) : ?>
                                Breed<?php echo count($cat["breeds"]) > 1 ? "s" : ""; ?> in photo: <?php echo $breed_str; ?>
                            <?php endif; ?>
                        </p>
                        <p class="card-text">
                            <?php
                            $has_categories = isset($cat["categories"]) && count($cat["categories"]) > 0;
                            if ($has_categories) {
                                $category_str = trim(join(", ", array_map(function ($c) {
                                    return $c["name"];
                                }, $cat["categories"])));
                            }
                            ?>
                            <?php if ($has_categories) : ?>
                                <em>Cat</em>egories: <?php echo $category_str; ?>
                            <?php endif; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
    </div>
</div>