<?php include '../IncludeFile/Header.php' ?>

<body>

    <?php include '../IncludeFile/navbar.php' ?>
    <?php

    include '../IncludeFile/Dbcon.php';

    $rfId = $_GET["fdID"];
    $bID = $_GET["bid"];
    $qery = 'SELECT * FROM tblvisitname WHERE VisitNameID=' . $bID;
    $rwid = $dbCon->query($qery);
    if ($rwid->num_rows > 0) {
        while ($rowid = $rwid->fetch_assoc()) {
            echo '
        <div class="banner banner' . $rowid["VisitNameID"] . '">
            <h2>' . $rowid["Title"] . '</h2>
        </div>
        ';
        }
        $rwid->free_result();
    }

    ?>

    <!-- <div class="banner Thailand">
        <h2>THAILAND</h2>
    </div> -->

    <div class="main-box-detail">
        <div class="box-left">
            <?php
            $qw = 'SELECT * FROM tblvisit WHERE VisitID =' . $rfId;
            $rw = $dbCon->query($qw);
            if ($rw->num_rows > 0) {
                while ($row = $rw->fetch_assoc()) {
                    echo '
                        <div class="box-main-contain">
                            <div class="title">
                                <h1>' . $row["Title"] . '</h1>
                            </div>
                            <div class="image">
                                <img src="' . $row["ImgUrl"] . '" alt="">
                            </div>
                            <div class="recommend">
                                <h2>Recommend : <span>' . $row["Recommend"] . '</span></h2>
                            </div>
                            <div class="description">
                                <h3>
                                    ' . $row["Description"] . '
                                </h3>
                            </div>
                            <div class="location">
                                <h2>Location : <span>' . $row["Location"] . '</span></h2>
                            </div>
                            <div class="open">
                                <h2>Open : <span>' . $row["OpenHour"] . '</span></h2>
                            </div>
                        </div>
                        
                        ';
                }
                $rw->free_result();
            } else
                echo '0 result';
            ?>

        </div>
        <div class="box-right">
            <div class="title-right">
                <h1>Other Places</h1>
            </div>

            <?php
            $qw = 'SELECT * FROM tblvisit where VisitNameID = ' . $bID;
            $rw = $dbCon->query($qw);

            if ($rw->num_rows > 0) {
                while ($row = $rw->fetch_assoc()) {
                    echo '
                        <div class="box">
                            <a href="detail_place_to_visit.php?fdID=' . $row["VisitID"] . '&bid=' . $bID . '">
                                <div class="title">
                                    <h3>' . $row["Title"] . '</h3>
                                </div>
                                <div class="image">
                                    <img src="' . $row["ImgUrl"] . '" alt="">
                                </div>
                                <div class="description">
                                    <h4>' . $row["Description"] . '</h4>
                                </div>
                            </a>
                        </div>

                        ';
                }
                $rw->free_result();
            } else
                echo '0 result';


            ?>




        </div>
    </div>
    <?php include '../IncludeFile/Footer.php' ?>
</body>

</html>