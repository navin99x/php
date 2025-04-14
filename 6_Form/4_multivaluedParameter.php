<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media</title>
</head>
<body>
    <h2>Social Media</h2>
    <hr>

    <form method= "post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <span>Choose all sorts of social media you use on a daily basis:</span>
        <select name="media[]" id="media" multiple size=5>
            <optgroup label="Video Streaming">
                <option value="youtube">YouTube</option>
                <option value="tiktok">TikTok</option>
                <option value="facebook">Facebook</option>
            </optgroup>
            <optgroup label="Messaging">
                <option value="whatsapp">WhatsApp</option>
                <option value="telegram">Telegram</option>
                <option value="messenger">Messenger</option>
            </optgroup>
            <optgroup label="Collaboration">
                <option value="reddit">Reddit</option>
                <option value="quora">Quora</option>
                <option value="github">GitHub</option>
            </optgroup>
        </select>
        <br><br>
        <button type="submit">Send</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST["media"])){
            echo "Your have selected " . sizeof($_POST["media"]) . " social media sites, you use on regular basics.";
            echo "<ul>";
            foreach($_POST["media"] as $value){
                echo "<li> {$value} </li>";
            }
            echo "</ul>";
        }
        else
            echo "<p style='color:red;'>Please select at least one social media site.</p>";
    }
    ?>
</body>
</html>
