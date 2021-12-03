<?php

/*
 * if   NO   tiene su propio ámbito 
 */

$bool = false;  // probar con $bool a true y a false
if ($bool) {
    $hi = '<p>Hello to all people!';
}
?>


<?php

/*
 * Aquí emitirá un Notice, la asignación no se produce y por tanto $hi no existe.
 */
if (!$bool) {
    $hi = '<p>Goodbye to all people!';
}
echo $hi;
?>

