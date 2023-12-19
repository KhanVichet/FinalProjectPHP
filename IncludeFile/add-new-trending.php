<?php
function addNewTrending($dbCon, $title_trending, $description_trending, $imgUrls)
{
    $rand = rand();
    $imgurl_trending = $rand . $imgUrls["imgurl_trending"]["name"];
    $path = "../Image/Trending/" . $imgurl_trending;

    move_uploaded_file($imgUrls["imgurl_trending"]["tmp_name"], $path);

    $qw = "INSERT INTO tbltrending (ImgUrl, Title, Description) VALUES (?, ?, ?)";
    $st = mysqli_prepare($dbCon, $qw);
    mysqli_stmt_bind_param($st, "sss", $path, $title_trending, $description_trending);

    mysqli_stmt_execute($st);

    if (mysqli_stmt_affected_rows($st) > 0) {
        header("location:../Public/admin.php");
    }
    mysqli_stmt_close($st);
}
include 'Dbcon.php';
$title_trending = $_POST["title_trending"];
$description_trending = $_POST["description_trending"];
$imgUrls = $_FILES;

addNewTrending($dbCon, $title_trending, $description_trending, $imgUrls);
