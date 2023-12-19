<?php
include 'Dbcon.php';
$title = $_POST["title"];
$location = $_POST["location"];
$description = $_POST["description"];
$imgUrls = $_FILES;

function addNewTrending($dbCon, $title, $location, $description, $imgUrls)
{
    $rand = rand();
    $imgurl = $rand . $imgUrls["imgurl"]["name"];
    $path = "../Image/Food/" . $imgurl;

    move_uploaded_file($imgUrls["imgurl"]["tmp_name"], $path);


    $qw = "INSERT INTO tblfood (ImgUrl,Title,Description,Location ) VALUES (?,?,?,?)";
    $st = mysqli_prepare($dbCon, $qw);
    mysqli_stmt_bind_param($st, "ssss", $path, $title, $description, $location);

    mysqli_stmt_execute($st);

    if (mysqli_stmt_affected_rows($st) > 0) {
        header("location:../Public/admin.php");
    }
    mysqli_stmt_close($st);
}


addNewTrending($dbCon, $title, $location, $description, $imgUrls);

?>