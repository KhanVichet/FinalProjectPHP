<?php include '../IncludeFile/Header.php' ?>
<?php
include '../IncludeFile/Dbcon.php';
$rfId = $_GET["fdID"];


?>

<body>
    <?php include '../IncludeFile/navbar.php' ?>
    <?php include '../IncludeFile/Slide.php' ?>


    <div class="slider">

        <?php
        $qw = 'SELECT * FROM `tblhotel` WHERE HotelNameID = ' . $rfId . ' LIMIT 5';
        $rw = $dbCon->query($qw);
        if ($rw->num_rows >= 5) {
            while ($row = $rw->fetch_assoc()) {
                echo '
                <div class="item">
                    <img src="' . $row["ImgUrl1"] . '" alt="">
                </div>


                ';
            }
            $rw->free_result();
        } else
            echo '
                <div class="item">
                    <img src="../Image/Banner/hotel1.jpg" alt="">

                </div>
                <div class="item">
                    <img src="../Image/Banner/hotel2.jpg" alt="">

                </div>
                <div class="item">
                    <img src="../Image/Banner/hotel3.jpg" alt="">

                </div>
                <div class="item">
                    <img src="../Image/Banner/hotel4.jpg" alt="">

                </div>
                <div class="item">
                    <img src="../Image/Banner/hotel5.jpg" alt="">

                </div>
                
                ';

        ?>



    </div>


    <div class="main-box">
        <div class="main-box-hotel">
            <div class="title">
                <h2>HIGHLY RECOMMENDATION PLACE TO STAY</h2>
            </div>

            <?php
            $qw = 'SELECT * FROM tblhotel WHERE HotelNameID = "' . $rfId . '" order by HotelID Desc';
            $rw = $dbCon->query($qw);
            if ($rw->num_rows > 0) {
                while ($row = $rw->fetch_assoc()) {
                    echo '
                    
                   <a href="detail_hotel.php?fdId=' . $row["HotelID"] . '">
                        <div class="box">
                            <div class="box-left">
                                <div class="box-hotel">
                                    <img src="' . $row["ImgUrl1"] . '" alt="">
                                    <div class="title">
                                        <h2>' . $row["Title"] . '</h2>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="box-right">
                                <div class="ranking">
                                    <h2>Award: </h2>
                                    <h3>' . $row["Award"] . '</h3>
                                </div>
                                <div class="facilities">
                                    <h2>Facilities: </h2>
                                    <h3>' . $row["Facilities"] . '</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                   
                   ';
                }
                $rw->free_result();
            } else
                echo '<h2>This location have not been yet hotel for recommendation!</h2>';


            $dbCon->close();
            ?>




        </div>

        <?php include '../IncludeFile/Footer.php' ?>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha512-DUC8yqWf7ez3JD1jszxCWSVB0DMP78eOyBpMa5aJki1bIRARykviOuImIczkxlj1KhVSyS16w2FSQetkD4UU2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="../Jquery/slick.min.js"></script>
<script src="../Jquery/slide.js"></script>

</html>