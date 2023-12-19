<?php include '../IncludeFile/Header.php' ?>

<body>
    <?php include '../IncludeFile/navbar.php' ?>

    <!-- banner -->
    <div class="banner Home">
        <h2>Welcome to <span>Travel Quest !</span></h2>
    </div>
    <!-- slider -->
    <div class="slider">
        <div class="title">
            <h1>TRENDING NOW <span>!!!</span></h1>
        </div>
        <div class="slider-container">
            <div class="slider-images">
                <?php
                include '../IncludeFile/Dbcon.php';
                $qw = 'SELECT * FROM tbltrending Order by TrendingID Desc limit 7 ';
                $rw = $dbCon->query($qw);
                if ($rw->num_rows > 0) {
                    while ($row = $rw->fetch_assoc()) {
                        echo '
                        <div class="slider-img">
                            <img src="' . $row["ImgUrl"] . '" alt="1" />
                            <h1>' . $row["Title"] . '</h1>
                            <div class="details">
                                <h2>' . $row["Title"] . '</h2>
                                <p></p>
                            </div>
                        </div>
                    ';
                    }
                    $rw->free_result();
                } else
                    echo '';
                $dbCon->close();
                ?>
            </div>
        </div>
    </div>


    <div class="trending">
        <?Php
        include '../IncludeFile/Dbcon.php';
        $qw = 'SELECT * FROM tbltrending order by TrendingID DESC Limit 7';
        $rw = $dbCon->query($qw);
        if ($rw->num_rows > 0) {
            while ($row = $rw->fetch_assoc()) {
                echo '
                    <div class="box">
                        <div class="box-image">
                            <img src="' . $row["ImgUrl"] . '" alt="">
                        </div>
                        <div class="box-detail">
                            <div class="box-description">
                                <div class="title">
                                    <h2>' . $row["Title"] . '</h2>
                                </div>
                                <div class="des">
                                    <p>' . $row["Description"] . '</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
            }
            $rw->free_result();
        } else
            echo '0 result';
        $dbCon->close();

        ?>





    </div>

    <div class="food">
        <div class="title">
            <h1>LET GRAB SOME FOODS <span>!!!</span></h1>
        </div>
        <div class="group-food">

            <?php
            include '../IncludeFile/Dbcon.php';
            $qw = 'SELECT * FROM tblfood  ORDER by FoodID DESC limit 4';
            $rw = $dbCon->query($qw);
            if ($rw->num_rows > 0) {
                while ($row = $rw->fetch_assoc()) {
                    echo '
                    <div class="box-food">
                        <div class="box-image">
                            <img src="' . $row["ImgUrl"] . '" alt="">
                        </div>
                        <div class="box-detail">
                            <div class="detail">
                                <div class="title">
                                    <h3>' . $row["Title"] . '</h3>
                                </div>
                                <div class="des">
                                    <p>
                                       ' . $row["Description"] . '
                                    </p>
                                </div>
                                <div class="location">
                                    <p>
                                       ទីតាំង​៖ ' . $row["Location"] . '
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    ';
                }
                $rw->free_result();
            } else
                echo '0 result';
            $dbCon->close();

            ?>



        </div>
    </div>

    <?php include '../IncludeFile/Footer.php' ?>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../Jquery/jquery-3.6.3.min.js"></script>
<script src="../Jquery/jquery.js"></script>

</html>