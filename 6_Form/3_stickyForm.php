<!--
Sticky form is a feature that keeps the user's input in the form field after submission, even if the form submission fails. It highly improves the user experience since the user doesn't have to re-enter every information making the process less frustation. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Form</title>
</head>
<body>
    <h2>Pi Game: </h2>

    <?php
    $error = "";
    if (isset($_POST["pivalue"])) {
        if ($_POST["pivalue"] != 3.14) {
            $error = "Incorrect";
        }
    }
    ?>

    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <label for="pivalue">Guess PI value up to 2 decimal points: </label>
        <input type="text" name="pivalue" id="pivalue" value="<?= isset($_POST["pivalue"]) ? htmlspecialchars($_POST["pivalue"]) : '' ?>">
        <span style="color:red"><?= $error ?></span>
        <br><br>
        <button type="submit">Check</button>
    </form>

    <?php
    if($error == "") echo "correct";
    ?>
</body>
</html>
