<?php
include 'Dbcon.php';
$hotelname = $_POST["hotelname"];
$price = $_POST["price"];
$include = $_POST["include"];
$nearby = $_POST["nearby"];
$address = $_POST["address"];
$phonenumber = $_POST["phonenumber"];
$email = $_POST["email"];
$website = $_POST["website"];

function addNewHotelDetail($dbCon, $hotelname, $price, $include, $nearby, $address, $phonenumber, $email, $website)
{

    $qw = "INSERT INTO tblhoteldetail (HotelID,Price, Include	, Nearby, Address, PhoneNumber,Email, Website) VALUES (?, ?, ?,?,?,?,?,?)";
    $st = mysqli_prepare($dbCon, $qw);
    mysqli_stmt_bind_param($st, "ssssssss", $hotelname, $price, $include, $nearby, $address, $phonenumber, $email, $website);

    mysqli_stmt_execute($st);

    if (mysqli_stmt_affected_rows($st) > 0) {
        header("location:../Public/admin.php");
    }
    mysqli_stmt_close($st);
}


addNewHotelDetail($dbCon, $hotelname, $price, $include, $nearby, $address, $phonenumber, $email, $website);
