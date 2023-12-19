<?php
include 'Dbcon.php';

$companyname = $_POST["companyname"];
$departure = $_POST["departure"];
$destination = $_POST["destination"];
$type = $_POST["type"];

function addNewBusSchedule($dbCon, $companyname, $departure, $destination, $type)
{
    $qw = "INSERT INTO tblbusschedule (BusCompanyID, Departure, Destination, Type) VALUES (?, ?, ?, ?)";
    $st = mysqli_prepare($dbCon, $qw);

    // Check if the prepare statement is successful
    if ($st === false) {
        die('Error in prepare statement: ' . mysqli_error($dbCon));
    }

    // Assuming BusCompanyID is a string, adjust the type and bind the parameter
    mysqli_stmt_bind_param($st, "ssss", $companyname, $departure, $destination, $type);

    // Execute the statement
    mysqli_stmt_execute($st);

    // Check for success
    if (mysqli_stmt_affected_rows($st) > 0) {
        header("location:../Public/admin.php");
    } else {
        // Handle error if the insertion fails
        echo "Error: " . mysqli_error($dbCon);
    }

    // Close the statement
    mysqli_stmt_close($st);
}

addNewBusSchedule($dbCon, $companyname, $departure, $destination, $type);
