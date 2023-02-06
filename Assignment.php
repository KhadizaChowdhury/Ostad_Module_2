<?php
$tuition = 6000;

$commission_25_p = round($tuition*.25);
$commission_20_p = round($tuition*.20);
$commission_15_p = round($tuition*.15);

$commission = ($tuition > 20000) ? "25% commission on $$tuition will be $$commission_25_p." : (($tuition > 10000) ? "20% commission on $$tuition will be $$commission_20_p." : (($tuition > 7000) ? "15% commission on $$tuition will be $$commission_15_p." : (($tuition < 7000) ? "For the $$tuition tuition fee, the commission will be invalid." : "For the $$tuition tuition fee, the commission will be invalid.")));

echo $commission;
?>