<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Daskboard</title>
    <link rel="stylesheet" href="../Style/styleAdminPage.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <?php include '../IncludeFile/Dbcon.php'; ?>
</head>

<body>
    <div class="container">
        <!-- right -->
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../Image/TravelQuest.png" alt="">
                </div>
                
            </div>

            <div class="sidebar tap">
                <ul>
                    <li>
                        <a class=" taplinks" onclick="openCity(event,'Trending')" id="defaultOpen">
                            <h3>TRENDING NOW</h3>
                        </a>
                    </li>
                    <li>
                        <a class="taplinks" onclick="openCity(event,'Food')">
                            <h3>FOOD</h3>
                        </a>
                    </li>
                    <li>
                        <a class="taplinks" onclick="openCity(event,'Where_to_go')">
                            <h3>WHERE TO GO</h3>
                        </a>
                    </li>
                    <li>
                        <a class=" taplinks">
                            <h3>HOW TO GO</h3>
                        </a>
                        <div class="dropdown">
                            <ul>
                                <li><a class="taplinks" onclick="openCity(event,'bus_company')">Bus Company</a></li>
                                <li><a class="taplinks" onclick="openCity(event,'bus_schedule')">Bus Schedule</a></li>

                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class=" taplinks">
                            <h3>WHERE TO STAY</h3>
                        </a>
                        <div class="dropdown">
                            <ul>
                                <li><a class="taplinks" onclick="openCity(event,'hotels')">Hotels</a></li>
                                <li><a class="taplinks" onclick="openCity(event,'hotels_detail')">Hotels Detail</a></li>
                                <li><a class="taplinks" onclick="openCity(event,'room_type')">Room Type</a></li>
                            </ul>
                        </div>

                    </li>
                    <li>
                        <a class=" taplinks">
                            <h3>ADD NEW</h3>

                        </a>
                        <div class="dropdown">
                            <ul>
                                <li><a class="taplinks" onclick="openCity(event,'Add_new_trending')">Add New Trending</a></li>
                                <li><a class="taplinks" onclick="openCity(event,'Add_new_food')">Add New Food</a></li>
                                <li><a class="taplinks" onclick="openCity(event,'Add_new_visit')">Add New Where to go</a></li>
                                <li><a class="taplinks" onclick="openCity(event,'Add_new_bus_company')">Add New Bus Company</a></li>
                                <li><a class="taplinks" onclick="openCity(event,'Add_new_bus_schedule')">Add New Bus Schedule</a></li>
                                <li><a class="taplinks" onclick="openCity(event,'Add_new_stay')">Add New Where to stay</a></li>
                                <li><a class="taplinks" onclick="openCity(event,'Add_new_hotel_detail')">Add New Hotel Detail</a></li>
                                <li><a class="taplinks" onclick="openCity(event,'Add_new_room_type')">Add New Room Type</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li class="logout">
                        <a>
                            <h3>Logout</h3>
                        </a>
                    </li> -->
                </ul>

            </div>
        </aside>

        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <h2></h2>
            </div>

            <div class="insights">

                <div class="sales">
                    <span class="material-symbols-outlined">hotel</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Hotels</h3>
                            <?php
                            include '../IncludeFile/Dbcon.php';
                            $qw = 'SELECT COUNT(*) AS TotalHotels
                            FROM tblhotel';
                            $rw = $dbCon->query($qw);
                            $rew = $rw->fetch_assoc();
                            echo '<h1>' . $rew["TotalHotels"] . '</h1>';

                            ?>

                        </div>

                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- end of sales -->
                <div class="expenses">
                    <span class="material-symbols-outlined">map</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Place To Visit</h3>
                            <?php
                            $qw = 'SELECT COUNT(*) AS TotalPlace
                            FROM tblvisit';
                            $rw = $dbCon->query($qw);
                            $rew = $rw->fetch_assoc();
                            echo '<h1>' . $rew["TotalPlace"] . '</h1>';

                            ?>
                        </div>

                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- end of expenses -->
                <div class="income">
                    <span class="material-symbols-outlined">trending_up</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Trending</h3>
                            <?php
                            $qw = 'SELECT COUNT(*) AS TotalTrending
                            FROM tbltrending';
                            $rw = $dbCon->query($qw);
                            $rew = $rw->fetch_assoc();
                            echo '<h1>' . $rew["TotalTrending"] . '</h1>';

                            ?>
                        </div>

                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- end of income -->
            </div>

            <!-- table -->

            <div class="tabcontent" id="Trending">
                <h2>Trending</h2>
                <div class="trending">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th colspan="2">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $qw = 'SELECT * FROM tbltrending';
                            $rw = $dbCon->query($qw);
                            if ($rw->num_rows > 0) {
                                while ($row = $rw->fetch_assoc()) {
                                    echo '
                                    <tr >
                                        <td>' . $row["TrendingID"] . '</td>
                                        <td>' . $row["Title"] . '</td>
                                        <td>' . $row["Description"] . '</td>
                                        <td><img src="' . $row["ImgUrl"] . '" alt=""></td>
                                        <td><a href="../IncludeFile/update-trending.php?fdID=' . $row["TrendingID"] . '"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                        <td><a href="../IncludeFile/delete.php?fdID=' . $row["TrendingID"] . '&dId=1"><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                    ';
                                }
                                $rw->free_result();
                            } else
                                echo '0 result';

                            ?>


                            <!-- <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr> -->

                        </tbody>
                    </table>
                </div>

            </div>

            <div class="tabcontent" id="Food">
                <h2>Food</h2>
                <div class="food">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Food</th>
                                <th>Description</th>
                                <th>Location</th>
                                <th>Image</th>
                                <th colspan="2">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $qw = 'select * from tblfood';
                            $rw = $dbCon->query($qw);
                            if ($rw->num_rows > 0) {
                                while ($row = $rw->fetch_assoc()) {
                                    echo '
                                    <tr>
                                        <td>' . $row["FoodID"] . '</td>
                                        <td>' . $row["Title"] . '</td>
                                        <td>' . $row["Description"] . '</td>
                                        <td>' . $row["Location"] . '</td>
                                        <td><img src="' . $row["ImgUrl"] . '"></td>
                                        <td><a href="../IncludeFile/update-food.php?fdID=' . $row["FoodID"] . '"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                        <td><a href="../IncludeFile/delete.php?fdID=' . $row["FoodID"] . '&dId=2"><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                    ';
                                }
                                $rw->free_result();
                            } else
                                echo '0 result';

                            ?>

                            <!-- <tr>
                            <td>Foldable Mini Drone</td>
                            <td>83787</td>
                            <td>Due</td>
                            <td class="waning">Pending</td>
                            <td class="primary">Details</td>
                        </tr> -->

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tabcontent" id="Where_to_go">
                <h2>Where to go</h2>
                <div class="visit">
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Address</th>
                                <th>Recommend</th>

                                <th>Location</th>
                                <th>Open Hour</th>
                                <th>Description</th>
                                <th>ImageUrl</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $qw = 'SELECT
                            v.VisitID as ID,
                                v.Title as VisitTitle,
                                v.ImgUrl,
                                vn.Title as Address,
                                MAX(v.Recommend) as MaxRecommend,
                                MAX(v.Description) as MaxDescription,
                                MAX(v.Location) as MaxLocation,
                                MAX(v.OpenHour) as MaxOpenHour
                            FROM tblVisit as v
                            INNER JOIN tblVisitName as vn ON v.VisitNameID = vn.VisitNameID
                            GROUP BY v.ImgUrl, vn.Title, v.Title order by v.VisitID desc;
                            ;
                        ;
                        ';
                            $rw = $dbCon->query($qw);
                            if ($rw->num_rows > 0) {
                                while ($row = $rw->fetch_assoc()) {
                                    echo '
                                        <tr>
                                            <td>' . $row["VisitTitle"] . '</td>
                                            <td>' . $row["Address"] . '</td>
                                            <td>' . $row["MaxRecommend"] . '</td>
                                            <td>' . $row["MaxLocation"] . '</td>
                                            <td>' . $row["MaxOpenHour"] . '</td>
                                            <td>' . $row["MaxDescription"] . '</td>
                                            <td><img src="' . $row["ImgUrl"] . '" alt=""></td>
                                            <td><a href="../IncludeFile/update-visit.php?fdID=' . $row["ID"] . '"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                            <td><a href="../IncludeFile/delete.php?fdID=' . $row["ID"] . '&dId=3"><i class="fa-solid fa-trash"></i></a></td>
                                        </tr>
                                        ';
                                }
                                $rw->free_result();
                            } else
                                echo '0 result';

                            ?>


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tabcontent" id="bus_company">
                <h2>Bus Company</h2>
                <div class="bus-company">
                    <table>
                        <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Price</th>
                                <th>Transportation</th>
                                <th>Facilities</th>
                                <th>Contact</th>
                                <th>Website</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $qw = 'SELECT * FROM tblbuscompany order by BusCompanyID desc';
                            $rw = $dbCon->query($qw);
                            if ($rw->num_rows > 0) {
                                while ($row = $rw->fetch_assoc()) {
                                    echo '
                                        <tr>
                                            <td>' . $row["CompanyName"] . '</td>
                                            <td>' . $row["Price"] . '</td>
                                            <td>' . $row["Transportation"] . '</td>
                                            <td>' . $row["Facilities"] . '</td>
                                            <td>' . $row["Contact"] . '</td>
                                            <td>' . $row["Website"] . '</td>
                                            <td>' . $row["Description"] . '</td>
                                            <td><img src="' . $row["ImgUrl"] . '" alt=""></td>
                                            <td><a href="../IncludeFile/update-bus-company.php?fdID=' . $row["BusCompanyID"] . '"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                            <td><a href="../IncludeFile/delete.php?fdID=' . $row["BusCompanyID"] . '&dId=4"><i class="fa-solid fa-trash"></i></a></td>
                                        </tr>
                                        ';
                                }
                                $rw->free_result();
                            } else
                                echo '0 result';
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tabcontent" id="bus_schedule">
                <h2>Bus Schedules</h2>
                <div class="bus-schedule">
                    <table>
                        <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Departure</th>
                                <th>Destination</th>
                                <th>Type</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $qw = 'SELECT bs.ScheduleID, b.CompanyName , bs.Departure,bs.Destination,bs.Type from tblbusschedule as bs INNER JOIN tblbuscompany as b on bs.BusCompanyID = b.BusCompanyID order by bs.ScheduleID desc';
                            $rw = $dbCon->query($qw);
                            if ($rw->num_rows > 0) {
                                while ($row = $rw->fetch_assoc()) {
                                    echo '
                                        <tr>
                                            <td>' . $row["CompanyName"] . '</td>
                                            <td>' . $row["Departure"] . '</td>
                                            <td>' . $row["Destination"] . '</td>
                                            <td>' . $row["Type"] . '</td>
                                            <td><a href="../IncludeFile/update-bus-schedule.php?fdID=' . $row["ScheduleID"] . '"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                            <td><a href="../IncludeFile/delete.php?fdID=' . $row["ScheduleID"] . '&dId=5"><i class="fa-solid fa-trash"></i></a></td>
                                        </tr>
                                        ';
                                }
                                $rw->free_result();
                            } else
                                echo '0 result';
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tabcontent" id="hotels">
                <h2>Hotels</h2>

                <div class="hotels">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Address</th>
                                <th>Image 1</th>
                                <th>Image 2</th>
                                <th>Image 3</th>
                                <th>Image 4</th>
                                <th>Image 5</th>
                                <th>Award</th>
                                <th>Facilities</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $qw = "SELECT h.HotelID,hn.Title as Address,h.Title,h.ImgUrl1,h.ImgUrl2,h.ImgUrl3,h.ImgUrl4,h.ImgUrl5,h.Award,h.Facilities FROM tblhotel as h INNER JOIN tblhotelname as hn on h.HotelNameID= hn.HotelNameID ORDER by h.HotelID Desc ";
                            $rw = $dbCon->query($qw);
                            if ($rw->num_rows > 0) {
                                while ($row = $rw->fetch_assoc()) {
                                    echo '
                                    <tr>
                                        <td>' . $row["HotelID"] . '</td>
                                        <td>' . $row["Title"] . '</td>
                                        <td>' . $row["Address"] . '</td>
                                        <td><img src="' . $row["ImgUrl1"] . '" alt=""></td>
                                        <td><img src="' . $row["ImgUrl2"] . '" alt=""></td>
                                        <td><img src="' . $row["ImgUrl3"] . '" alt=""></td>
                                        <td><img src="' . $row["ImgUrl4"] . '" alt=""></td>
                                        <td><img src="' . $row["ImgUrl5"] . '" alt=""></td>
                                        <td>' . $row["Award"] . '</td>
                                        <td>' . $row["Facilities"] . '</td>
                                        <td><a href="../IncludeFile/update-hotel.php?fdID=' . $row["HotelID"] . '"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                        <td><a href="../IncludeFile/delete.php?fdID=' . $row["HotelID"] . '&dId=6"><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>  
                                        ';
                                }
                                $rw->free_result();
                            } else
                                echo '0 result';
                            ?>

                        </tbody>
                    </table>
                </div>

            </div>

            <div class="tabcontent" id="hotels_detail">
                <h2>Hotels Detail</h2>
                <div class="hotels-detail">
                    <table>
                        <thead>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Include</th>
                            <th>Nearby</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <!-- <th>Email</th>
                            <th>Websit</th> -->
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>

                            <?php
                            $qw = 'SELECT h.Title , hd.* FROM tblhoteldetail as hd INNER JOIN tblhotel as h on hd.HotelID = h.HotelID ORDER by hd.DetailID desc';
                            $rw = $dbCon->query($qw);
                            if ($rw->num_rows > 0) {
                                while ($row = $rw->fetch_assoc()) {
                                    echo '
                                            <tr>
                                                <td>' . $row["Title"] . '</td>
                                                <td>' . $row["Price"] . '</td>
                                                <td>' . $row["Include"] . '</td>
                                                <td>' . $row["Nearby"] . '</td>
                                                <td>' . $row["Address"] . '</td>
                                                <td>' . $row["PhoneNumber"] . '</td>
                                                
                                                <td><a href="../IncludeFile/update-hotel-detail.php?fdID=' . $row["DetailID"] . '"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                                <td><a href="../IncludeFile/delete.php?fdID=' . $row["DetailID"] . '&dId=7"><i class="fa-solid fa-trash"></i></a></td>
                                            </tr>
                                            ';
                                }
                                $rw->free_result();
                            } else
                                echo '0 result';

                            ?>


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tabcontent" id="room_type">
                <h2>Room Type</h2>
                <div class="room-type">
                    <table>
                        <thead>
                            <tr>
                                <th>Hotel Name</th>
                                <th>Type Room</th>
                                <th>Image Room</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $qw = 'SELECT rt.RoomTypeID, h.Title,rt.RoomType,rt.ImgUrl
                            FROM
                                ((tblhotel h
                            INNER JOIN
                                tblhoteldetail hd ON h.HotelID = hd.HotelID)
                            INNER JOIN
                                tblroomtype rt ON hd.DetailID = rt.DetailID)
                                ';
                            $rw = $dbCon->query($qw);
                            if ($rw->num_rows > 0) {
                                while ($row = $rw->fetch_assoc()) {
                                    echo '
                                        <tr>
                                            <td>' . $row["Title"] . '</td>
                                            <td>' . $row["RoomType"] . '</td>
                                            <td><img src="' . $row["ImgUrl"] . '" alt=""></td>
                                            <td><a href="../IncludeFile/update-room-type.php?fdID=' . $row["RoomTypeID"] . '"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                            <td><a href="../IncludeFile/delete.php?fdID=' . $row["RoomTypeID"] . '&dId=8"><i class="fa-solid fa-trash"></i></a></td>
                                        </tr>
                                        ';
                                }
                                $rw->free_result();
                            } else
                                echo '0 result';

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>


            <!-- add new -->

            <div class="tabcontent" id="Add_new_trending">
                <div class="add-new add-new-trending">
                    <div class="title-main">
                        <h2>Add New Trending</h2>
                    </div>
                    <form action="../IncludeFile/add-new-trending.php" method="post" enctype="multipart/form-data">
                        <div class="list">
                            <label for="title">Title</label>
                            <input type="text" name="title_trending" id="title">
                        </div>
                        <div class="list">
                            <label for="imgurl">Image</label>
                            <input type="file" name="imgurl_trending" id="imgurl">
                        </div>
                        <div class="list">
                            <label for="description">Description</label>
                            <textarea name="description_trending" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="btn">
                            <input type="submit" value="submit" name="cmdSubmit">
                        </div>
                    </form>
                </div>
            </div>

            <div class="tabcontent" id="Add_new_food">
                <div class="add-new add-new-food">
                    <div class="title-main">
                        <h2>Add New Foods</h2>
                    </div>
                    <form action="../IncludeFile/add-new-food.php" method="post" enctype="multipart/form-data">
                        <div class="list">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title">
                        </div>

                        <div class="list">
                            <label for="location">location</label>
                            <input type="text" name="location" id="location">
                        </div>
                        <div class="list">
                            <label for="imgurl">Image</label>
                            <input type="file" name="imgurl" id="imgurl">
                        </div>
                        <div class="list">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <div class="btn">
                            <input type="submit" value="submit" name="cmdSubmit">
                        </div>
                    </form>
                </div>

            </div>

            <div class="tabcontent" id="Add_new_visit">
                <div class="add-new add-new-visit">
                    <div class="title-main">
                        <h2>Add New Visit</h2>
                    </div>
                    <form action="../IncludeFile/add-new-visit.php" method="post" enctype="multipart/form-data">
                        <div class="list">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div class="list">
                            <label for="visitname">Location</label>
                            <?php

                            $qw = 'SELECT * FROM tblvisitname';
                            $rft = $dbCon->query($qw);
                            if ($rft->num_rows > 0) {
                                echo '<select name="visitname" id="vistiname">';

                                while ($roft = $rft->fetch_assoc())
                                    echo ('"<option value="' . $roft["VisitNameID"] . '" >' . $roft["Title"] . '</option>"');

                                echo '</select>';
                            } else
                                echo "0 results";

                            ?>

                        </div>
                        <div class="list">
                            <label for="recommend">Recommend</label>
                            <input type="text" name="recommend" id="recommend">
                        </div>
                        <div class="list">
                            <label for="openhour">Open Hour</label>
                            <input type="text" name="openhour" id="openhour">
                        </div>
                        <div class="list">
                            <label for="location">Location</label>
                            <input type="text" name="location" id="location">
                        </div>
                        <div class="list">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description">
                        </div>
                        <div class="list">
                            <label for="imgurl">Image</label>
                            <input type="file" name="imgurl" id="imgurl">
                        </div>
                        <div class="btn">
                            <input type="submit" value="submit" name="cmdSubmit">
                        </div>
                    </form>
                </div>
            </div>

            <div class="tabcontent" id="Add_new_bus_company">
                <div class="add-new add-new-bus-company">
                    <div class="title-main">
                        <h2>Add New Bus Company</h2>
                    </div>
                    <form action="../IncludeFile/add-new-bus-company.php" method="post" enctype="multipart/form-data">
                        <div class="box">
                            <div class="list">
                                <label for="companyname">Name</label>
                                <input type="text" name="companyname" id="companyname">
                            </div>
                            <div class="list">
                                <label for="contact">Contact</label>
                                <input type="text" name="contact" id="contact">
                            </div>
                            <div class="list">
                                <label for="website">Website</label>
                                <input type="text" name="website" id="website">
                            </div>
                            <div class="list">
                                <label for="imgurl">Image</label>
                                <input type="file" name="imgurl" id="imgurl">
                            </div>
                            <div class="btn">
                                <input type="submit" value="submit" name="cmdSubmit">
                            </div>
                        </div>
                        <div class="box">
                            <div class="list">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price">
                            </div>
                            <div class="list">
                                <label for="transportation">Transportation</label>
                                <input type="text" name="transportation" id="transportation">
                            </div>
                            <div class="list">
                                <label for="facilities">Facilities</label>
                                <input type="text" name="facilities" id="facilities">
                            </div>
                            <div class="list">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10"></textarea>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

            <div class="tabcontent" id="Add_new_bus_schedule">
                <div class="add-new add-new-bus-schedule">
                    <div class="title-main">
                        <h2>Add New Schedule</h2>
                    </div>
                    <form action="../IncludeFile/add-new-bus-schedule.php" method="post" enctype="multipart/form-data">
                        <div class="list">
                            <label for="companyname">Company Name</label>
                            <?php
                            $qw = 'SELECT BusCompanyID,CompanyName FROM tblbuscompany';
                            $rft = $dbCon->query($qw);
                            if ($rft->num_rows > 0) {
                                echo '<select name="companyname" id="companyname">';

                                while ($roft = $rft->fetch_assoc())
                                    echo ('"<option value="' . $roft["BusCompanyID"] . '" >' . $roft["CompanyName"] . '</option>"');

                                echo '</select>';
                            } else
                                echo "0 results";

                            ?>

                        </div>
                        <div class="list">
                            <label for="departure">Departure</label>
                            <input type="text" name="departure" id="departure">
                        </div>
                        <div class="list">
                            <label for="destination">Destination</label>
                            <input type="text" name="destination" id="destination">
                        </div>
                        <div class="list">
                            <label for="type">Type</label>
                            <input type="text" name="type" id="type">
                        </div>
                        <div class="btn">
                            <input type="submit" value="submit" name="cmdSubmit">
                        </div>
                    </form>
                </div>
            </div>

            <div class="tabcontent" id="Add_new_stay">
                <div class="add-new add-new-hotel">
                    <div class="title-main">
                        <h2>Add New Hotels</h2>
                    </div>
                    <form action="../IncludeFile/add-new-hotel.php" method="post" enctype="multipart/form-data">
                        <div class="box">
                            <div class="list">
                                <label for="title">Title Hotel</label>
                                <input type="text" name="title" id="title">
                            </div>
                            <div class="list">
                                <label for="hotelname">Location</label>
                                <?php

                                $qw = 'SELECT * FROM tblhotelname';
                                $rft = $dbCon->query($qw);
                                if ($rft->num_rows > 0) {
                                    echo '<select name="hotelname" id="hotelname">';

                                    while ($roft = $rft->fetch_assoc())
                                        echo ('"<option value="' . $roft["HotelNameID"] . '" >' . $roft["Title"] . '</option>"');

                                    echo '</select>';
                                } else
                                    echo "0 results";

                                ?>



                            </div>
                            <div class="list">
                                <label for="imgurl1">Image</label>
                                <input type="file" name="imgurl1" id="imgurl1">
                            </div>

                        </div>
                        <div class="box">
                            <div class="list">

                                <label for="imgurl4">Slide 4</label>
                                <input type="file" name="imgurl4" id="imgurl4">
                            </div>
                            <div class="list">
                                <label for="imgurl5">Slide 5</label>
                                <input type="file" name="imgurl5" id="imgurl5">
                            </div>
                        </div>
                        <div class="box">
                            <div class="list">
                                <label for="imgurl2">Slide 2</label>
                                <input type="file" name="imgurl2" id="imgurl2">
                            </div>
                            <div class="list">
                                <label for="imgurl3">Slide 3</label>
                                <input type="file" name="imgurl3" id="imgurl3">
                            </div>
                        </div>

                        <div class="box">
                            <div class="list">
                                <label for="award">Award</label>
                                <textarea name="award" id="award" cols="30" rows="5"></textarea>
                            </div>
                            <div class="list">
                                <label for="facilities">Facilities</label>
                                <textarea name="facilities" id="facilities" cols="30" rows="10"></textarea>

                            </div>
                        </div>
                        <div class="btn">
                            <input type="submit" value="submit" name="cmdSubmit">
                        </div>
                    </form>
                </div>

            </div>

            <div class="tabcontent" id="Add_new_hotel_detail">
                <div class="add-new add-new-hotel-detail">
                    <div class="title-main">
                        <h2>Add New Hotel Detail</h2>
                    </div>
                    <form action="../IncludeFile/add-new-hotel-detail.php" method="post" enctype="multipart/form-data">
                        <div class="list">
                            <label for="hotelname">Hotel Name</label>
                            <?php

                            $qw = 'SELECT HotelID,Title FROM tblhotel';
                            $rft = $dbCon->query($qw);
                            if ($rft->num_rows > 0) {
                                echo '<select name="hotelname" id="hotelname">';

                                while ($roft = $rft->fetch_assoc())
                                    echo ('"<option value="' . $roft["HotelID"] . '" >' . $roft["Title"] . '</option>"');

                                echo '</select>';
                            } else
                                echo "0 results";

                            ?>

                        </div>
                        <div class="list">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price">
                        </div>
                        <div class="list">
                            <label for="include">Include</label>
                            <input type="text" name="include" id="include">
                        </div>
                        <div class="list">
                            <label for="nearby">Near By</label>
                            <input type="text" name="nearby" id="nearby">
                        </div>
                        <div class="list">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address">
                        </div>
                        <div class="list">
                            <label for="phonenumber">Phone Number</label>
                            <input type="text" name="phonenumber" id="phonenumber">
                        </div>
                        <div class="list">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email">
                        </div>
                        <div class="list">
                            <label for="website">Website</label>
                            <input type="text" name="website" id="website">
                        </div>
                        <div class="btn">
                            <input type="submit" value="submit" name="cmdSubmit">
                        </div>
                    </form>
                </div>
            </div>

            <div class="tabcontent" id="Add_new_room_type">
                <div class="add-new add-new-room-type">
                    <div class="title-main">
                        <h2>Add New Room Type</h2>
                    </div>
                    <form action="../IncludeFile/add-new-room-type.php" method="post" enctype="multipart/form-data">
                        <div class="list">
                            <label for="hotelname">Hotel Name</label>
                            <?php

                            $qw = 'SELECT h.Title,hd.DetailID FROM tblhoteldetail as hd INNER JOIN tblhotel as h on h.HotelID = hd.HotelID';
                            $rft = $dbCon->query($qw);
                            if ($rft->num_rows > 0) {
                                echo '<select name="hotelname" id="hotelname">';

                                while ($roft = $rft->fetch_assoc())
                                    echo ('"<option value="' . $roft["DetailID"] . '" >' . $roft["Title"] . '</option>"');

                                echo '</select>';
                            } else
                                echo "0 results";

                            ?>
                        </div>
                        <div class="list">
                            <label for="roomtype">Room Type</label>
                            <input type="text" name="roomtype" id="roomtype">
                        </div>
                        <div class="list">
                            <label for="imgurl">Image</label>
                            <input type="file" name="imgurl" id="imgurl">
                        </div>
                        <div class="btn">
                            <input type="submit" value="submit" name="cmdSubmit">
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <!-- end of main -->


    </div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../Jquery/jquery-3.6.3.min.js"></script>
<script src="../Jquery/jqueryAdmin.js"></script>


</html>