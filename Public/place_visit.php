<?php include '../IncludeFile/Header.php' ?>

<body>
    <?php include '../IncludeFile/navbar.php' ?>

    <?php
    include '../IncludeFile/Dbcon.php';

    $rfId = $_GET["fdID"];
    $qery = 'SELECT * FROM tblvisitname WHERE VisitNameID=' . $rfId;
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



    <main>
        <div class="containBox">
            <?php
            $qw = 'SELECT * FROM tblvisit where VisitNameID = "' . $rfId . '" order by VisitID Desc';
            $rw = $dbCon->query($qw);

            if ($rw->num_rows > 0) {
                while ($row = $rw->fetch_assoc()) {
                    echo '
                        <a href="detail_place_to_visit.php?fdID=' . $row["VisitID"] . '&bid=' . $rfId . '">

                            <div class="box-contain">
                                <div class="box-title">
                                    <h3>' . $row["Title"] . '</h3>
                                </div>
                                <div class="box-image">
                                    <div class="image">
                                        <img src="' . $row["ImgUrl"] . '" alt="">
                                    </div>
                                    <div class="description">
                                        <div class="recommend">
                                            <i class="fa-solid fa-tag"></i>
                                            <h4>' . $row["Recommend"] . '</h4>
                                        </div>
                                        <div class="detail">
                                            <p>' . $row["Description"] . '</p>
                                        </div>
                                        <div class="localtion">
                                            <h4>Location : <span>' . $row["Location"] . '</span> </h4>
                                            <h4>Open : <span>' . $row["OpenHour"] . '</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        ';
                }
                $rw->free_result();
            } else
                echo '0 result';
            ?>



        </div>
    </main>

    <?php include '../IncludeFile/Footer.php' ?>
</body>

</html>