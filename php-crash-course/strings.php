<?php

$name = "Lily";
echo 'Hello, $name\n';
echo "Hello, $name\n";

$heredoc = <<<EOD
Multi-line string
with variable $name
and special character\n
EOD;

$nowdoc = <<<'EOD'
Multi-line string
with variable $name
and special character\n
EOD;

echo $heredoc;
echo $nowdoc;
