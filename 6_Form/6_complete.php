<!DOCTYPE html>     <!-- This program implements all of these following concepts: Self Processing Form, Sticky Form, Multivalued Parameter, Sticky Multivalued Parameter-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<hr>
    
<?php
$name = $email = $gender = $province = "";
$exp = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $exp = isset($_POST["exp"]) ? $_POST["exp"] : array();
    $province = isset($_POST["province"]) ? $_POST["province"] : "";
}
?>

    <h2>Fill out the form</h2>
    <hr>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <fieldset>
        <legend>Personal Information: </legend>

            <label for="name">Name: </label>
            <input type="text" name="name" id="name" autofocus autocomplete="off" value="<?= $name ?>">

            <br><br>

            <label for="email">Email: </label>
            <input type="email" name="email" id="email" autocomplete="off" value="<?= $email ?>">

            <br><br>

            <span>Gender: </span>
            <input type="radio" name="gender" id="male" value="male" <?= $gender== "male" ? "checked" : "" ?>>
            <label for="male">Male</label>

            <input type="radio" name="gender" id="female" value="female" <?= $gender== "female" ? "checked" : "" ?>>
            <label for="female">Female</label>
            
            <br><br>

            <span>Experience: </span>
            <input type="checkbox" name="exp[]" id="cpp" value="cpp" <?= in_array("cpp", $exp) ? "checked" :  "" ?>>
            <label for="cpp">C++</label>

            <input type="checkbox" name="exp[]" id="python" value="python" <?= in_array("python", $exp) ? "checked" :  "" ?>>
            <label for="python">Python</label>

            <input type="checkbox" name="exp[]" id="js" value="js" <?= in_array("js", $exp) ? "checked" :  "" ?>>
            <label for="js">JavaScript</label>

            <input type="checkbox" name="exp[]" id="php" value="php" <?= in_array("php", $exp) ? "checked" :  "" ?>>
            <label for="php">PHP</label>

            <br><br>

            <span>Province: </span>
            <select name="province" id="province">
                <option value='' selected disabled>Select City</option>

                <!-- <option value="madesh">Madesh</option>
                <option value="lumbini">Lumbini</option>
                <option value="sudurpaschim">Sudurpaschim</option>
                <option value="karnali">Karnali</option>
                <option value="bagmati">Bagmati</option>
                <option value="koshi">Koshi</option>
                <option value="gandaki">Gandaki</option> -->

                <?php
                $province_list= array("lumbini", "sudurpaschim", "karnali", "bagmati", "koshi", "gandaki");
                foreach($province_list as $place){
                    $province_selected = $province == $place ? "selected" : "";
                    echo "<option value=\"$place\" $province_selected>" . ucfirst($place) . "</option>"; 
                }
                ?>
            </select>

            <br><br>

            <button type="submit">Submit</button>

    </fieldset>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    ?>
    <hr>
    <div class="result" style="color:#BBBBBB; background-color:#1C1E26">
        <p><em>---Form Data---</em></p>
        <p>Name: <?= $name; ?></p>
        <p>Email: <?= $email; ?></p>
        <p>Gender: <?= $gender; ?></p>
        <p>Experience: <?= implode(', ', $exp); ?></p>
        <p>Province: <?= $province ?></p>
    </div>
    <hr>

    <?php
    }
    ?>
</body>
</html>