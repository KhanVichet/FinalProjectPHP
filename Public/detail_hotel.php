<?php include '../IncludeFile/Header.php' ?>

<body>
    <?php include '../IncludeFile/navbar.php' ?>


    <div class="sliderforhotel">
        <div class="list">
            <?php
            include '../IncludeFile/Dbcon.php';
            $rfId = $_GET["fdId"];
            $qw = 'SELECT * FROM tblhotel where HotelID =' . $rfId;
            $rw = $dbCon->query($qw);
            if ($rw->num_rows > 0) {
                while ($row = $rw->fetch_assoc()) {
                    echo '
                    <div class="item">
                        <img src="' . $row["ImgUrl1"] . '" alt="">
                    </div>
                    <div class="item">
                        <img src="' . $row["ImgUrl2"] . '" alt="">
                    </div>
                    <div class="item">
                        <img src="' . $row["ImgUrl3"] . '" alt="">
                    </div>
                    <div class="item">
                        <img src="' . $row["ImgUrl4"] . '" alt="">
                    </div>
                    <div class="item">
                        <img src="' . $row["ImgUrl5"] . '" alt="">
                    </div>
                    ';
                }
                $rw->free_result();
            } else
                echo '<div class="item">
                        <img src="../Image/hotel-pool-view.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="../Image/central-suite-residence.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="../Image/jaya-house-riverpark.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="../Image/hotel-pool-view.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="../Image/khmer-mansion-residence.jpg" alt="">
                    </div>';
                
            ?>

        </div>
        <div class="buttons">
            <button id="prev">
                <i class="fa-solid fa-arrow-left"></i></button>
            <button id="next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <div class="roomtype">
        <div class="box-roomtype">
            <div class="title">
                <h1>ROOM TYPE</h1>
            </div>
            <?php
            $qw = 'SELECT * FROM tblhoteldetail as hd INNER JOIN tblroomtype as r on hd.DetailID=r.DetailID WHERE hd.HotelID=' . $rfId;
            $rw = $dbCon->query($qw);
            if ($rw->num_rows > 0) {
                while ($row = $rw->fetch_assoc()) {
                    echo '
                        <div class="box">
                            <div class="image">
                                <img src="' . $row["ImgUrl"] . '" alt="">
                            </div>
                            <div class="title">
                                <h3>' . $row["RoomType"] . '</h3>
                            </div>
                        </div>
                        ';
                }
                $rw->free_result();
            } else
                echo ' 0 result';
            ?>

        </div>
    </div>


    <div class="description-room">
        <?php
        $qw = 'SELECT * FROM tblhoteldetail as hd INNER JOIN tblroomtype as r on hd.DetailID=r.DetailID WHERE hd.HotelID="' . $rfId . '" GROUP by hd.DetailID';
        $rw = $dbCon->query($qw);
        if ($rw->num_rows > 0) {
            while ($row = $rw->fetch_assoc()) {
                echo '
                <div class="box">
                <div class="room-rates">
                    <div class="title">
                        <h2>ROOM RATES</h2>
                    </div>
                    <div class="description">
                        <div class="list">
                            <div class="title">
                                <h3>Price: </h3>
                            </div>
                            <div class="des">
                                <span>' . $row["Price"] . '</span>
                            </div>
                        </div>
                        <div class="list">
                            <div class="title">
                                <h3>Include: </h3>
                            </div>
                            <div class="des">
                                <span>' . $row["Include"] . '</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="location">
                    <div class="title">
                        <h2>LOCATION</h2>
                    </div>
                    <div class="description">
                        <div class="list">
                            <div class="title">
                                <h3>Nearby: </h3>
                            </div>
                            <div class="des">
                                <span>' . $row["Nearby"] . '</span>
                            </div>
                        </div>
                        <div class="list">
                            <div class="title">
                                <h3>Address: </h3>
                            </div>
                            <div class="des">
                                <span>' . $row["Address"] . '</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact">
                    <div class="title">
                        <h2>CONTACT</h2>
                    </div>
                    <div class="description">
                        <div class="list">
                            <div class="title">
                                <h3>Phone Number: </h3>
                            </div>
                            <div class="des">
                                <span>' . $row["PhoneNumber"] . '</span>
                            </div>
                        </div>
                        <div class="list">
                            <div class="title">
                                <h3>Email : </h3>
                            </div>
                            <div class="des">
                                <span>' . $row["Email"] . '</span>
                            </div>
                        </div>
                        <div class="list">
                            <div class="title">
                                <h3>Website : </h3>
                            </div>
                            <div class="des">
                                <span>' . $row["Website"] . '</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    ';
                $dbCon->close();
            }
            $rw->free_result();
        } else
            echo '0 result';
        ?>

    </div>

    <?php include '../IncludeFile/Footer.php' ?>
</body>
<script src="../Jquery/jquery-3.6.3.min.js"></script>
<script src="../Jquery/jquery.js"></script>



</html>