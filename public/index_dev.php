<html>
<head>
    <title>Test PHP</title>
</head>
<body>


<?php

echo '<p>Mode dev </p>';

xdebug_break();

if ( extension_loaded('xdebug')) {
    echo 'xdebug loaded';
} else {
    echo 'xdebug missing';
}

$a = 42;

?>
</body>
</html>