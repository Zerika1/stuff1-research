<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aspeed = 9.1618;
    $bspeed = 10.1618;
    $distance = $_POST['distance'];
    $btime_min = ($distance / $bspeed) * 60;
    $btime_max = ($distance / $aspeed) * 60;
    $Yavetime = ($btime_min + $btime_max) / 2;
    echo "<p>The estimated time it will take to reach your destination: " . number_format($btime_min, 2) . " minutes to " . number_format($btime_max, 2) . " minutes</p>";
    echo "<p>The estimated average time to reach your destination is " . number_format($Yavetime, 2) . " minutes</p>";
}
?>