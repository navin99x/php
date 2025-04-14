<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
    <h2>Form Details</h2>
    <hr>
    <p>
        <?php
        if( !isset($_POST["tnc"])):
            echo "You need to first accepts T&C to access this site.";
            die();
        endif;
        
        if(isset($_POST["username"])){
            echo  "Hello, " . htmlspecialchars($_POST["username"]);
            echo "<br>";
        }
        
        ?>

    </p>
</body>
</html>