<?php
$tuition = 20001;

$commission_25_p = round($tuition*.25);
$commission_20_p = round($tuition*.20);
$commission_15_p = round($tuition*.15);

$commission = ($tuition > 20000) ? "25% = $$commission_25_p" : (($tuition > 10000) ? "20% = $$commission_20_p" : (($tuition > 7000) ? "15% = $$commission_15_p." : (($tuition < 7000) ? "invalid." : "invalid.")));

echo "Commission on $$tuition will be $commission";
?>