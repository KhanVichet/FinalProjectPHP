<?php
include 'Dbcon.php';
$title = $_POST["companyname"];
$contact = $_POST["contact"];
$website = $_POST["website"];
$price = $_POST["price"];
$transportation = $_POST["transportation"];
$facilities = $_POST["facilities"];
$description = $_POST["description"];

$imgUrls = $_FILES;

function addNewTrending($dbCon, $title, $contact, $website, $price, $transportation, $facilities, $description, $imgUrls)
{
    $rand = rand();
    $imgurl = $rand . $imgUrls["imgurl"]["name"];
    $path = "../Image/Bus/" . $imgurl;

    move_uploaded_file($imgUrls["imgurl"]["tmp_name"], $path);


    $qw = "INSERT INTO tblbuscompany (ImgUrl,CompanyName,Description,Price,Facilities,Transportation,Contact,Website	
    ) VALUES (?,?,?,?,?,?,?,?)";
    $st = mysqli_prepare($dbCon, $qw);
    mysqli_stmt_bind_param($st, "ssssssss", $path, $title, $description, $price, $facilities, $transportation, $contact, $website);

    mysqli_stmt_execute($st);

    if (mysqli_stmt_affected_rows($st) > 0) {
        header("location:../Public/admin.php");
    }
    mysqli_stmt_close($st);
}


addNewTrending($dbCon, $title, $contact, $website, $price, $transportation, $facilities, $description, $imgUrls);
