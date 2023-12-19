<?php

function addNewHotel($dbCon, $hotelName, $title, $award, $facilities, $imgUrls)
{
    $rand = rand();

    $imgU1 = $rand . $imgUrls["imgurl1"]["name"];
    $imgU2 = $rand . $imgUrls["imgurl2"]["name"];
    $imgU3 = $rand . $imgUrls["imgurl3"]["name"];
    $imgU4 = $rand . $imgUrls["imgurl4"]["name"];
    $imgU5 = $rand . $imgUrls["imgurl5"]["name"];

    $path1 = "../Image/Hotel/" . $imgU1;
    $path2 = "../Image/Hotel/" . $imgU2;
    $path3 = "../Image/Hotel/" . $imgU3;
    $path4 = "../Image/Hotel/" . $imgU4;
    $path5 = "../Image/Hotel/" . $imgU5;

    move_uploaded_file($imgUrls["imgurl1"]["tmp_name"], $path1);
    move_uploaded_file($imgUrls["imgurl2"]["tmp_name"], $path2);
    move_uploaded_file($imgUrls["imgurl3"]["tmp_name"], $path3);
    move_uploaded_file($imgUrls["imgurl4"]["tmp_name"], $path4);
    move_uploaded_file($imgUrls["imgurl5"]["tmp_name"], $path5);

    $queryAddNewHotel = "INSERT INTO tblhotel (HotelNameID, Title, ImgUrl1, ImgUrl2, ImgUrl3, ImgUrl4, ImgUrl5, Award, Facilities) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($dbCon, $queryAddNewHotel);

    mysqli_stmt_bind_param($stmt, "issssssss", $hotelName, $title, $path1, $path2, $path3, $path4, $path5, $award, $facilities);

    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        header("location:../Public/admin.php");
    }

    mysqli_stmt_close($stmt);
}

// Example usage:
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include 'Dbcon.php';

    // You may want to add more validation and sanitization here
    $hotelName = $_POST["hotelname"];
    $title = $_POST["title"];
    $award = $_POST["award"];
    $facilities = $_POST["facilities"];
    $imgUrls = $_FILES;

    addNewHotel($dbCon, $hotelName, $title, $award, $facilities, $imgUrls);
}

?>