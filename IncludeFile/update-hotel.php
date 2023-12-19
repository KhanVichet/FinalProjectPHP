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
    $qwAll = 'SELECT * FROM tblhotel WHERE HotelID =' . $sfId;
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


            <div class="tabcontent">
                <div class="add-new add-new-hotel">
                    <div class="title-main">
                        <h2>Update Hotels</h2>
                    </div>
                    <form action="../IncludeFile/update.php?uid=<?php echo $row["HotelID"] ?>&oid=6" method="post" enctype="multipart/form-data">
                        <div class="box">
                            <div class="list">
                                <label for="title">Title Hotel</label>
                                <input type="text" name="title" id="title" value="<?php echo $row["Title"] ?>">
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
                                <input type="file" name="imgurl1" id="imgurl1" value="<?php echo $row["ImgUrl1"] ?>">
                            </div>

                        </div>
                        <div class="box">
                            <div class="list">

                                <label for="imgurl4">Slide 4</label>
                                <input type="file" name="imgurl4" id="imgurl4" value="<?php echo $row["ImgUrl4"] ?>">
                            </div>
                            <div class="list">
                                <label for="imgurl5">Slide 5</label>
                                <input type="file" name="imgurl5" id="imgurl5" value="<?php echo $row["ImgUrl5"] ?>">
                            </div>
                        </div>
                        <div class="box">
                            <div class="list">
                                <label for="imgurl2">Slide 2</label>
                                <input type="file" name="imgurl2" id="imgurl2" value="<?php echo $row["ImgUrl2"] ?>">
                            </div>
                            <div class="list">
                                <label for="imgurl3">Slide 3</label>
                                <input type="file" name="imgurl3" id="imgurl3" value="<?php echo $row["ImgUrl3"] ?>">
                            </div>
                        </div>

                        <div class="box">
                            <div class="list">
                                <label for="award">Award</label>
                                <textarea name="award" id="award" cols="30" rows="5"><?php echo $row["Award"] ?></textarea>
                            </div>
                            <div class="list">
                                <label for="facilities">Facilities</label>
                                <textarea name="facilities" id="facilities" cols="30" rows="10"><?php echo $row["Facilities"] ?></textarea>

                            </div>
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