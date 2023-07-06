<?php
require_once(__DIR__ . "/../../partials/nav.php");  // you can do require or require_once
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" required maxlength="30" />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>
<?php
 //TODO 2: add PHP Code
 if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"]) && isset($_POST["username"]))
 {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);
    $confirm = se($_POST, "confirm", "", false);
    $username = se($_POST, "username", "", false);
    //todo 3 validate user
    $hasError = false;
    
    if (empty($email)) 
    {
        flash("Email must be provided <br>");
        $hasError = true;
    }

    //sanitize
    //$email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = sanitize_email($email);
    //validate
    /*if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        flash("Please enter a valid email <br> ");
        $hasError = true;
    }*/
    if (!is_valid_email($email))
    {
        flash("Please enter a valid email <br> ");
        $hasError = true;
    }

    if (!preg_match('/^[a-z0-9_-]{3,30}$/', $username))
    {
        flash("Username must only contain 3-16 characters lowercase a-z, 0-9, _, or - <br> ");
        $hasError = true;
    }


    if (empty($password)) {
        flash("password must not be empty <br>");
        $hasError = true;
    }

    if (empty($confirm)) {
        flash("Confirm password must not be empty <br>");
        $hasError = true;
    }

    if (strlen($password) < 8)
    {
        flash("Password must be atleast 8 characters long <br>");
        $hasError = true;
    }

    if (strlen($password) > 0 && $password !== $confirm ) 
    {
        flash("Passwords must match <br>");
        $hasError = true;
    }

    if (!$hasError)
     {
        //flash(" Welcome , $email";  single quote is a literal string double quote allows us to put variable insid")
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Users (email, password, username) VALUES(:email, :password, :username)");
        try {
            $r = $stmt->execute([":email" => $email, ":password" => $hash, ":username" => $username]);
            flash("Welcome", $email);
        } catch (Exception $e) {
            flash("There was an error registering");
            flash("<pre>" .var_export($e, true) . "</pre>");
        }
     }

}
 
?>
<?php require_once(__DIR__ . "/../../partials/flash.php");