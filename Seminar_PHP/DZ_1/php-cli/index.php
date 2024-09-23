<?php
    $a = 5;
    $b = '05';
    echo '<pre>';
        var_dump($a == $b);
    echo '</pre>';
    echo '<pre>';
        var_dump((int)'012345');
        echo '</pre>';
    echo '<pre>';
        var_dump((float)123.0 != (int)123.0);
    echo '</pre>';
    echo '<pre>';
    var_dump(0 == 'hello, world ');
    echo '</pre>';
$a = 1;
$b = 2;

echo "A = $a <br/>";
echo "B = $b <br/>";
$a = $a + 1;
echo "A = $a <br/>";
$b = $a - 1;
echo "B = $b <br/>";


phpinfo();