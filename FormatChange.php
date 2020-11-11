<?php

/* CODE DISPLAYS DATA */
ID, 'WooCommerceEventsDate', true);  /* TAKE DATE */

$oldDate = explode('/', $orgDate); /* SPLIT DATE */
$newDate = $oldDate[1].'/'.$oldDate[0].'/'.$oldDate[2]; /* REORDER DATE */

if ($newDate > '01/01/2020') {

/* $finalDate = date("d F Y", strtotime($newDate));   WRITE MONTH IN LETTER WITHOUT TRANSLATE */

setlocale(LC_TIME, "it_IT"); /* TRANSLATE DATE */

$localDate = strftime("%e %B %Y", strtotime($newDate));

echo $localDate;

}

?>
