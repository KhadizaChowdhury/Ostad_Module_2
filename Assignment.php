<?php
$tuition = 7000;

$commission_25_p = round($tuition*.25);
$commission_20_p = round($tuition*.20);
$commission_15_p = round($tuition*.15);

$commission = ($tuition > 20000) ? "25% = $$commission_25_p" :
((20000 > $tuition && $tuition > 10000) ? "20% = $$commission_20_p" : (( 10000 > $tuition && $tuition > 7000) ? "15% = $$commission_15_p." : (($tuition < 7000) ? "Invalid." : "a surprise for you!")));

echo "Commission on $$tuition will be $commission";
?>