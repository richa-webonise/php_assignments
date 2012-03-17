<?php
$start_date = "12-4-2010";
$end_date = "12-5-2011";

$start_time = strtotime($start_date);
$end_time = strtotime($end_date);

if ($end_date > $start_date) {
    print_r("The second date is greater than the first date...\n");
    $date_difference = $end_time - $start_time;
    print_r("The difference of the dates in days is : " . $date_difference/(60*60*24));
} else {
    print_r("The second date is smaller than the first date...\n");
    $date_difference = $start_time - $end_time;
    print_r("The difference of the dates in days is : " . $date_difference/(60*60*24));
}
?>
