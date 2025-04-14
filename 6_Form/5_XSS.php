<!-- Cross Site Scripting(XSS) is a security vulnerability  where the attacker injects some malicious code in the site and the browser try to render the code without proper escpaing -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS</title>
</head>
<body>

    <?php
    $name = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];               //  $name = htmlspecialchars($_POST["name"]);
    }

    ?>

    <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">       <!-- htmlspecilachars($_SERVER["SCRIPT_NAME"])-->
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $name ?>" autofocus>

        <br><br>
        <button type="submit">Send</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "<br>";
        echo "Hello " . "<strong>{$name}</strong>";
    }
    ?>
</body>
</html>

<!--
1) In the `name` field provide the following code: <script>alert('XSS');</script>
        Insted of displaying the input directly to the user, browser executes the JS code insted.

2) Another way of XSS is to manipulate the input URL, 
    Attach the script at the end of URL like: http://localhost/6_Form/5_XSS.php/%22%3E%3Cscript%3Ealert('XSS')%3C/script%3E
-->