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
    <?php
    include 'Dbcon.php';
    $sfId = $_GET["fdID"];
    $qwAll = 'SELECT * FROM tblhoteldetail WHERE DetailID =' . $sfId;
    $rwAll = $dbCon->query($qwAll);
    $row = $rwAll->fetch_assoc();
    ?>
</head>

<body>
    <div class="container update">
        <!-- right -->


        <main>
            <h1>Dashboard</h1>

            <div class="date">
                <h2></h2>
            </div>


            <div class="tabcontent" >
                <div class="add-new add-new-hotel-detail">
                    <div class="title-main">
                        <h2>Update Hotel Detail</h2>
                    </div>
                    <form action="../IncludeFile/update.php?uid=<?php echo $row["DetailID"] ?>&oid=7" method="post" enctype="multipart/form-data">
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
                            <input type="text" name="price" id="price" value="<?php echo $row["Price"] ?>">
                        </div>
                        <div class="list">
                            <label for="include">Include</label>
                            <input type="text" name="include" id="include" value="<?php echo $row["Include"] ?>"">
                        </div>
                        <div class="list">
                            <label for="nearby">Near By</label>
                            <input type="text" name="nearby" id="nearby" value="<?php echo $row["Nearby"] ?>">
                        </div>
                        <div class="list">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" value="<?php echo $row["Address"] ?>">
                        </div>
                        <div class="list">
                            <label for="phonenumber">Phone Number</label>
                            <input type="text" name="phonenumber" id="phonenumber" value="<?php echo $row["PhoneNumber"] ?>">
                        </div>
                        <div class="list">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" value="<?php echo $row["Email"] ?>">
                        </div>
                        <div class="list">
                            <label for="website">Website</label>
                            <input type="text" name="website" id="website" value="<?php echo $row["Website"] ?>">
                        </div>
                        <div class="btn">
                            <input type="submit" value="submit" name="cmdSubmit">
                        </div>
                    </form>
                </div>
            </div>

        </main>


    </div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../Jquery/jquery-3.6.3.min.js"></script>
<script src="../Jquery/jqueryAdmin.js"></script>


</html>