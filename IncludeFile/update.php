<?php

include 'Dbcon.php';
$Oid = $_GET["oid"];
$UID = $_GET["uid"];

$ImgUrls = $_FILES;

function updateTrending($dbCon, $UID, $ImgUrls)
{
    $rand = rand();
    $imgurl = $rand . $ImgUrls["imgurl"]["name"];
    $path = "../Image/Trending/" . $imgurl;

    move_uploaded_file($_FILES['imgurl']['tmp_name'], $path);
    $qw = 'UPDATE tbltrending SET Description = ?, ImgUrl = ?, Title = ? WHERE TrendingID = ?';

    $stmt = $dbCon->prepare($qw);
    $stmt->bind_param("sssi", $_POST["description_trending"], $path, $_POST["title_trending"], $UID);

    if ($stmt->execute()) {
        $stmt->close();
        $dbCon->close();
        header("location:../Public/admin.php");
        exit();
    } else {
        echo "Error: " . $qw . "<br>" . $stmt->error;
    }
}
function updateFood($dbCon, $UID, $ImgUrls)
{
    $rand = rand();
    $imgurl = $rand . $ImgUrls["imgurl"]["name"];
    $path = "../Image/Food/" . $imgurl;
    move_uploaded_file($_FILES['imgurl']['tmp_name'], $path);


    $qw = 'UPDATE tblfood SET ImgUrl=?,Title=?,Description=?,Location=? where FoodID=?';

    $stmt = $dbCon->prepare($qw);
    $stmt->bind_param("ssssi", $path, $_POST["title"], $_POST["description"], $_POST["location"], $UID);

    if ($stmt->execute()) {
        $stmt->close();
        $dbCon->close();
        header("location:../Public/admin.php");
        exit();
    } else {
        echo "Error: " . $qw . "<br>" . $stmt->error;
    }
}

function updateVisit($dbCon, $UID, $ImgUrls)
{
    $rand = rand();
    $imgurl = $rand . $ImgUrls["imgurl"]["name"];
    $path = "../Image/Visit/" . $imgurl;
    move_uploaded_file($_FILES['imgurl']['tmp_name'], $path);

    $qw = 'UPDATE tblvisit SET VisitNameID=?,Title=?,ImgUrl=?,Recommend=?,Description=?,Location=?,OpenHour=? where VisitID=?';

    $stmt = $dbCon->prepare($qw);
    $stmt->bind_param("ssssssss", $_POST["visitname"], $_POST["title"], $path, $_POST["recommend"], $_POST["description"], $_POST["Location"], $_POST["OpenHour"], $UID);

    if ($stmt->execute()) {
        $stmt->close();
        $dbCon->close();
        header("location:../Public/admin.php");
        exit();
    } else {
        echo "Error: " . $qw . "<br>" . $stmt->error;
    }
}

function updateBusCompany($dbCon, $UID, $ImgUrls)
{
    $rand = rand();
    $imgurl = $rand . $ImgUrls["imgurl"]["name"];
    $path = "../Image/Bus/" . $imgurl;
    move_uploaded_file($_FILES['imgurl']['tmp_name'], $path);


    $qw = 'UPDATE tblbuscompany SET ImgUrl=?,CompanyName=?,Description=?,Price=?,Facilities=?,Transportation=?,Contact=?,Website=? where BusCompanyID=?';

    $stmt = $dbCon->prepare($qw);
    $stmt->bind_param("sssssssss", $path, $_POST["companyname"], $_POST["description"], $_POST["price"], $_POST["facilities"], $_POST["transportation"], $_POST["contact"], $_POST["website"], $UID);

    if ($stmt->execute()) {
        $stmt->close();
        $dbCon->close();
        header("location:../Public/admin.php");
        exit();
    } else {
        echo "Error: " . $qw . "<br>" . $stmt->error;
    }
}
function updateBusSchedule($dbCon, $UID)
{

    $qw = 'UPDATE tblbusschedule SET BusCompanyID=?,Departure=?,Destination=?,Type=? where ScheduleID=?';

    $stmt = $dbCon->prepare($qw);
    $stmt->bind_param("sssss", $_POST["companyname"], $_POST["departure"], $_POST["destination"], $_POST["type"], $UID);

    if ($stmt->execute()) {
        $stmt->close();
        $dbCon->close();
        header("location:../Public/admin.php");
        exit();
    } else {
        echo "Error: " . $qw . "<br>" . $stmt->error;
    }
}
function updateHotel($dbCon, $UID, $ImgUrls)
{
    $rand = rand();
    $imgurl1 = $rand . $ImgUrls["imgurl1"]["name"];
    $imgurl2 = $rand . $ImgUrls["imgurl2"]["name"];
    $imgurl3 = $rand . $ImgUrls["imgurl3"]["name"];
    $imgurl4 = $rand . $ImgUrls["imgurl4"]["name"];
    $imgurl5 = $rand . $ImgUrls["imgurl5"]["name"];

    $path1 = "../Image/Hotel/" . $imgurl1;
    $path2 = "../Image/Hotel/" . $imgurl2;
    $path3 = "../Image/Hotel/" . $imgurl3;
    $path4 = "../Image/Hotel/" . $imgurl4;
    $path5 = "../Image/Hotel/" . $imgurl5;

    move_uploaded_file($_FILES['imgurl1']['tmp_name'], $path1);
    move_uploaded_file($_FILES['imgurl2']['tmp_name'], $path2);
    move_uploaded_file($_FILES['imgurl3']['tmp_name'], $path3);
    move_uploaded_file($_FILES['imgurl4']['tmp_name'], $path4);
    move_uploaded_file($_FILES['imgurl5']['tmp_name'], $path5);



    $qw = 'UPDATE tblhotel SET HotelNameID=?,Title=?,ImgUrl1=?,ImgUrl2=?,ImgUrl3=?,ImgUrl4=?,ImgUrl5=?,Award=?,Facilities=? where HotelID=?';

    $stmt = $dbCon->prepare($qw);
    $stmt->bind_param("ssssssssss", $_POST["hotelname"], $_POST["title"], $path1, $path2, $path3, $path4, $path5, $_POST["award"], $_POST["facilities"], $UID);

    if ($stmt->execute()) {
        $stmt->close();
        $dbCon->close();
        header("location:../Public/admin.php");
        exit();
    } else {
        echo "Error: " . $qw . "<br>" . $stmt->error;
    }
}

function updateHotelDetail($dbCon, $UID)
{

    $qw = 'UPDATE tblhoteldetail SET HotelID=?,Price=?,Include=?, Nearby=?,Address=?,PhoneNumber=?,Email=?,Website=? where DetailID=?';

    $stmt = $dbCon->prepare($qw);
    $stmt->bind_param("sssssssss", $_POST["hotelname"], $_POST["price"], $_POST["include"], $_POST["nearby"], $_POST["address"], $_POST["phonenumber"], $_POST["email"], $_POST["website"], $UID);

    if ($stmt->execute()) {
        $stmt->close();
        $dbCon->close();
        header("location:../Public/admin.php");
        exit();
    } else {
        echo "Error: " . $qw . "<br>" . $stmt->error;
    }
}

function updateRoomType($dbCon, $UID, $ImgUrls)
{
    $rand = rand();
    $imgurl = $rand . $ImgUrls["imgurl"]["name"];
    $path = "../Image/Hotel/" . $imgurl;
    move_uploaded_file($_FILES['imgurl']['tmp_name'], $path);
    $qw = 'UPDATE tblroomtype SET DetailID=?,RoomType=?,ImgUrl=? where RoomTypeID=?';

    $stmt = $dbCon->prepare($qw);
    $stmt->bind_param("ssss", $_POST["hotelname"], $_POST["roomtype"], $path, $UID);

    if ($stmt->execute()) {
        $stmt->close();
        $dbCon->close();
        header("location:../Public/admin.php");
        exit();
    } else {
        echo "Error: " . $qw . "<br>" . $stmt->error;
    }
}

switch ($Oid) {
    case "1":
        updateTrending($dbCon, $UID, $ImgUrls);
        break;
    case "2":
        updateFood($dbCon, $UID, $ImgUrls);
        break;
    case "3":
        updateVisit($dbCon, $UID, $ImgUrls);
        break;
    case "4":
        updateBusCompany($dbCon, $UID, $ImgUrls);
        break;
    case "5":
        updateBusSchedule($dbCon, $UID);
        break;
    case "6":
        updateHotel($dbCon, $UID, $ImgUrls);
        break;
    case "7":
        updateHotelDetail($dbCon, $UID);
        break;
    case "8":
        updateRoomType($dbCon, $UID, $ImgUrls);
        break;
}
