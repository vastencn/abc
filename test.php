<?php

include("config.php");

ar_dump(abcalc_get_map());

$mid=create_abcalc();
ar_dump(abcalc_get_map());
init_abcalc_map($mid);
echo "**$maps($mid)**";
ar_dump(abcalc_get_map());



$tar=abcode_clean(array(0,1,2,3,4,5,6,7,8,9));

ar_dump($tar);

$tar=abcode_compliment($tar);

ar_dump($tar);
?>