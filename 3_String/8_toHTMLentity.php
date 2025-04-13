<?php

$html_code= "<p> <br> Hello world ™ </br> <p>";

echo htmlspecialchars($html_code, ENT_QUOTES,"UTF-8");      // &lt;p&gt; &lt;br&gt; Hello world ™ &lt;/br&gt; &lt;p&gt;

echo "\n";

echo htmlentities($html_code, ENT_QUOTES, "UTF-8");         // &lt;p&gt; &lt;br&gt; Hello world &trade; &lt;/br&gt; &lt;p&gt;

?>

<!--
Both function converts special character to HTML entity.
They are used to display user input in the webpage & to prevent XSS.
While `htmlspecialchars()` converts limited but importants characters (&, <, >, flag dependent[' and "]), `htmlentities()` converts more wider range of special character into html entity making it bit slower.

function defn: htmlspecialchars(input, [flags, [encoding]]);
    flags include: ENT_COMPAT (default) _ only convert double quotes
                   ENT_QUOTES _ converts both quotes (preffered)
                   ENT_NOQUOTES _ neither
-->