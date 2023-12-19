<?php
include 'Dbcon.php';
$title = $_POST["title"];
$visitname = $_POST["visitname"];
$recommend = $_POST["recommend"];
$openhour = $_POST["openhour"];
$location = $_POST["location"];
$description = $_POST["description"];

$imgUrls = $_FILES;
function addNewTrending($dbCon, $title, $visitname, $recommend, $openhour, $location, $description, $imgUrls)
{
    $rand = rand();
    $imgurl = $rand . $imgUrls["imgurl"]["name"];
    $path = "../Image/Visit/" . $imgurl;

    move_uploaded_file($imgUrls["imgurl"]["tmp_name"], $path);

    $qw = "INSERT INTO tblvisit (VisitNameID, Title, ImgUrl,Recommend,Description, Location, OpenHour) VALUES (?, ?, ?,?,?,?,?)";
    $st = mysqli_prepare($dbCon, $qw);
    mysqli_stmt_bind_param($st, "sssssss", $visitname, $title, $path, $recommend, $description, $location, $openhour);

    mysqli_stmt_execute($st);

    if (mysqli_stmt_affected_rows($st) > 0) {
        header("location:../Public/admin.php");
    }
    mysqli_stmt_close($st);
}


addNewTrending($dbCon, $title, $visitname, $recommend, $openhour, $location, $description, $imgUrls);
