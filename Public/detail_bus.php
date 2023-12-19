<?php include '../IncludeFile/Header.php' ?>

<body>
    <?php include '../IncludeFile/navbar.php' ?>

    <div class="main-box-detail-bus">
        <div class="box-left">
            <div class="title">
                <h1>Bus company recommend by tourists</h1>
            </div>
            <?php
            include '../IncludeFile/Dbcon.php';
            $rfId = $_GET["fdId"];
            $qw = 'SELECT * FROM tblbuscompany WHERE BusCompanyID = ' . $rfId;
            $rw = $dbCon->query($qw);

            if ($rw->num_rows > 0) {
                while ($row = $rw->fetch_assoc()) {
                    echo '
                            <div class="box">
                                <div class="image">
                                    <img src="' . $row["ImgUrl"] . '" alt="">
                                </div>
                                <div class="title">
                                    <h2>' . $row["CompanyName"] . '</h2>
                                </div>
                                <div class="detail">
                                    <div class="price">
                                        <h3>Price: </h3> <p>' . $row["Price"] . '</p>
                                    </div>';
                }
                $rw->free_result();
            } else
                echo '0 result';
            ?>
            <div class="destination">
                <div class="title">
                    <h3>Destination: </h3>
                </div>
                <div class="table">
                    <table>
                        <tbody>
                            <?php
                            $qw = 'SELECT * FROM tblbusschedule where BusCompanyID =' . $rfId;
                            $rw = $dbCon->query($qw);
                            if ($rw->num_rows > 0) {
                                while ($row = $rw->fetch_assoc()) {
                                    echo '
                                        <tr>
                                            <td>' . $row["Departure"] . '</td>
                                            <td>-</td>
                                            <td>' . $row["Destination"] . '</td>
                                            <td>' . $row["Type"] . '</td>
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
            <?php
            $rfId = $_GET["fdId"];
            $qw = 'SELECT * FROM tblbuscompany WHERE BusCompanyID = ' . $rfId;
            $rw = $dbCon->query($qw);

            if ($rw->num_rows > 0) {
                while ($row = $rw->fetch_assoc()) {
                    echo '
                                        <div class="transportation">
                                            <div class="title">
                                                <h3>Transportation: </h3>
                                            </div>
                                            <div class="description">
                                                <p>' . $row["Transportation"] . '</p>
                                            </div>
                                        </div>
                                        <div class="facilities">
                                            <div class="title">
                                                <h3>Facilities: </h3>
                                            </div>
                                            <div class="description">
                                                <p>' . $row["Facilities"] . '</p>
                                            </div>
                                        </div>
                    
                                        <div class="contact">
                                            <div class="title">
                                                <h3>Contact: </h3>
                                            </div>
                                            <div class="description">
                                                <p>' . $row["Contact"] . '</p>
                                            </div>
                                        </div>
                                        <div class="website">
                                            <div class="title">
                                                <h3>Website: </h3>
                                            </div>
                                            <div class="description">
                                                <p>' . $row["Website"] . '</p>
                                            </div>
                                        </div>
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
            <div class="title">
                <h1>Other Companies</h1>
            </div>
            <?php
            $qw = 'SELECT * FROM tblbuscompany order by BusCompanyID Desc';
            $rw = $dbCon->query($qw);

            if ($rw->num_rows > 0) {
                while ($row = $rw->fetch_assoc()) {
                    echo '
                    <a href="detail_bus.php?fdId=' . $row["BusCompanyID"] . '">
                        <div class="box">
                            <div class="title">
                                <h2>' . $row["CompanyName"] . '</h2>
                            </div>
                            <div class="image">
                                <img src="' . $row["ImgUrl"] . '" alt="">
                                <div class="description">
                                    <p>' . $row["Description"] . '</p>
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
    </div>

    <?php include '../IncludeFile/Footer.php' ?>
</body>