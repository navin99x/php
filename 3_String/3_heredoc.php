<?php

$source= "Reddit";

$quote= <<<EOT
When you find no solution to a problem,
\tit’s probably not a problem to be solved,
\t\tbut rather a truth to be accepted.
-$source
EOT;

echo $quote;

// another way to print multiline string is using nowdoc but it is slightly different

$newquote_author= "Joshua Marine";
$newquote= <<<'EOT'
Challenges are what make life interesting.
\tOvercoming them is what makes life meaningful.
-$author
EOT;

// echo $newquote;

?>

<!--
Here EOT is a identifier that could be named anything else, but make sure the starting and ending name match.
Simply Indetifier or "Identifier" marks heredoc while
'Identifier' marks nowdoc.
-->