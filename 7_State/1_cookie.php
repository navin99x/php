<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style>
        body.carbon-theme {
            color: #F5E6C8;
            background-color: #313131;
        }
        body.catpuccin-theme {
            color: #CDD6F4;
            background-color: #1E1E2E;
        }
        body.earthsong-theme {
            color: #E6C7A8;
            background-color: #292521;
        }
        body.horizon-theme {
            color: #BBBBBB;
            background-color: #1C1E26;
        }
        body.matrix-theme {
            color: #D1FFCD;
            background-color: #032000;
        }
        body.dark-theme {
            color: white;
            background-color: black;
        }
        body.light-theme {
            color: black;
            background-color: white;
        }
        .theme-switcher {
            position: fixed;
            top: 15px;
            right: 15px;
        }
        .content {
            margin: 40px;
        }
    </style>
</head>
<body class="<?= isset($_COOKIE['theme']) ? htmlspecialchars($_COOKIE['theme']) . '-theme' : 'light-theme' ?>">

<div class="theme-switcher">
    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
    <select name="theme" id="theme" onchange="this.form.submit()">
            <?php
            $themes = ["light", "dark", "matrix", "horizon", "earthsong", "carbon", "catpuccin"];
            foreach ($themes as $theme) {
                $selected = isset($_COOKIE['theme']) && $_COOKIE['theme'] == $theme ? 'selected' : '';
                echo "<option value=\"$theme\" $selected>" . ucfirst($theme) . "</option>";
            }
            ?>
    </select>
    </form>
</div>

<div class="content">
    <h2>"Cultivating understanding": Navigating the complexities associated with medicinal cannabis and implications for nursing practice.</h2>
    <p>In February 2016, the Australian Parliament legalised medicinal cannabis (MC) through the passing of the Narcotic Drugs Amendment Act 2016, which outlined the regulation overseeing the cultivation, production, and manufacture of cannabis for medical or scientific purposes. (1) This announcement came 12 months after the death of Dan Haslam, a young man from Tamworth who was utilising illicit cannabis for therapeutic purposes to manage the debilitating chemotherapy-induced nausea and vomiting (CINV) he experienced whilst battling bowel cancer. Alongside his mother Lucy, a retired registered nurse, they advocated and lobbied tirelessly to make such change possible; for this reason, the aforementioned Act was also named "Dan's Law" in his honour. While the Act was implemented 8 years ago, numerous challenges still exist for prescribers (medical doctors and nurse practitioners) as well as those, such as nurses, who provide patient healthcare in primary and community healthcare settings.</p>
    <p>The Cannabis genus exhibits a broad phytochemical profile, with over 100 different cannabinoids such as cannabidiol (CBD) and delta-9-tetrahydrocannabinol (THC), and over 200 different terpenes. (2) Currently, MC products in Australia are typically standardised to contain one or more cannabinoids, mainly CBD and THC, which have been the primary focus of the majority of research over the last 60 years.</p>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $theme = $_POST['theme'];
    setcookie('theme', $theme, time() + 60 * 2, "/");
    header("Refresh:0"); // Refresh the page to apply the theme
}
?>
<hr>
<footer>
    <p style="position: fixed; bottom:0; width:100%; text-align:center;">Cookies are set only for 2 Minutes.</p>
</footer>
</body>
</html>
