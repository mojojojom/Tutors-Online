<?php
// load.php
include('connecttion/connect.php');
$query = "SELECT * FROM t_sched";
$result = mysqli_query($connect, $query);
$events = array();
while($row = mysqli_fetch_assoc($result))
{
    $events[] = $row;
}
echo json_encode($events);