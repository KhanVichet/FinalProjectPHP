<?php
include 'Dbcon.php';
$hotelname = $_POST["hotelname"];
$roomtype = $_POST["roomtype"];


$imgUrls = $_FILES;
function addNewRoomType($dbCon, $hotelname, $roomtype, $imgUrls)
{
    $rand = rand();
    $imgurl = $rand . $imgUrls["imgurl"]["name"];
    $path = "../Image/Hotel/" . $imgurl;

    move_uploaded_file($imgUrls["imgurl"]["tmp_name"], $path);

    $qw = "INSERT INTO tblroomtype (DetailID,RoomType,ImgUrl) VALUES (?, ?, ?)";
    $st = mysqli_prepare($dbCon, $qw);
    mysqli_stmt_bind_param($st, "sss", $hotelname, $roomtype, $path);

    mysqli_stmt_execute($st);

    if (mysqli_stmt_affected_rows($st) > 0) {
        header("location:../Public/admin.php");
    }
    mysqli_stmt_close($st);
}

addNewRoomType($dbCon, $hotelname, $roomtype, $imgUrls);
