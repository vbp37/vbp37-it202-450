<?php
require(__DIR__."/../../partials/nav.php");
?>
<html>
<h1>Home<br></h1>

<style>
  
     

     

    </style>
   <body>
    <style>
      h1{
        text-align: left;

      }
      body {
        
       
        
       
        justify-content: center;
       
        
      }
     
    </style>
      
      <IMG SRC="https://media1.popsugar-assets.com/files/thumbor/x5IUvin13oljQsVzMQY3e7qiERg=/fit-in/1000x528/filters:format_auto():upscale()/2015/10/12/863/n/1922398/ae05767f_f2798850-3946-0133-0a22-0e76e5725d9d.gif"
          width="400" 
          height="400" />
      
      <IMG SRC="https://media.tenor.com/m1XpgKykO74AAAAC/laughing-anchorman.gif"
      width="400" 
          height="400" />
          
      <IMG SRC="https://media.tenor.com/0wpoNMv-zxYAAAAC/double-dab-dance.gif"
      width="400" 
          height="400" />
      


    </body>

<style>
 
    </style>
    <body>


    </body>
</html>

<?php
/*if(isset($_SESSION["user"]) && isset($_SESSION["user"]["email"])){
 flash("Welcome, " . $_SESSION["user"]["email"];")
}
else{
  flash("You're not logged in");
} */
if (is_logged_in(true)){
       // flash("Welcome, " . get_user_email(");
       error_log("Session data: " . var_export($_SESSION,true));
}
   
?>
<?php require_once(__DIR__ . "/../../partials/flash.php");