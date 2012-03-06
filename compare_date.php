<?php
$last_date = "01-03-2012";
$todays_date = date("d-m-y");

$today = strtotime($todays_date);
$expiration_date = strtotime($last_date);

if ($expiration_date > $today) {
     $valid = "yes";
} else {
     $valid = "no";
}

$date_difference = $today - $expiration_date;

echo "$valid\n$date_difference days";
?>
