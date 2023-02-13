<?php
// insert.php
include('connecttion/connect.php');
$data = json_decode(file_get_contents("php://input"));
if(count($data) > 0)
{
    $title = mysqli_real_escape_string($connect, $data->title);
    $start = mysqli_real_escape_string($connect, $data->start);
    $end = mysqli_real_escape_string($connect, $data->end);
    $query = "INSERT INTO t_sched(title, start_event, end_event) VALUES ('".$title."', '".$start."', '".$end."')";
    if(mysqli_query($connect, $query))
    {
        echo "Data Inserted...";
    }
    else
    {
        echo 'Error';
    }
}