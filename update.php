<?php
// update.php
include('connection/connect.php');
$data = json_decode(file_get_contents("php://input"));
if(count($data) > 0)
{
    $title = mysqli_real_escape_string($connect, $data->title);
    $start = mysqli_real_escape_string($connect, $data->start);
    $end = mysqli_real_escape_string($connect, $data->end);
    $id = $data->id;
    $query = "UPDATE t_sched SET title='".$title."', start_event='".$start."', end_event='".$end."' WHERE id=".$id;
    if(mysqli_query($connect, $query))
    {
        echo 'Data Updated...';
    }
    else
    {
        echo 'Error';
    }
}