<?php 

$conn = mysqli_connect("localhost","root","","php_bootstrap_model");

if(isset($_POST['check_view']))
{
    $student_id = $_POST['student_id'];
    $result_array = [];

    $query = "SELECT * FROM student WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            array_push($result_array, $row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    }
    else
    {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}

?>