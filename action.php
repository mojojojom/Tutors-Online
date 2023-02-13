<?php

    if(isset($_POST['action'])) {

        if($_POST['action'] === 'insert') {
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
        }
        if($_POST['action'] === 'update') {
            // update.php
            include('connecttion/connect.php');
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
        }

        if($_POST['action'] === 'load') {
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
        }


    }

