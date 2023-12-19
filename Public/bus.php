<?Php include '../IncludeFile/Header.php' ?>

<body>
    <?php include '../IncludeFile/navbar.php' ?>

    <div class="main-box-bus">
        <div class="title">
            <h1>Bus company recommend by tourists</h1>
        </div>

        <?php
        include '../IncludeFile/Dbcon.php';
        $qw = 'SELECT * FROM tblbuscompany order by BusCompanyID Desc';
        $rw = $dbCon->query($qw);

        if ($rw->num_rows > 0) {
            while ($row = $rw->fetch_assoc()) {
                echo '
                    <div class="box">
                        <a href="detail_bus.php?fdId='.$row["BusCompanyID"].'">
                            <div class="image">
                                <img src="' . $row["ImgUrl"] . '" alt="">
                            </div>
                            <div class="title">
                                <h2>' . $row["CompanyName"] . '</h2>
                            </div>
                            <div class="description">
                                <p>' . $row["Description"] . '</p>
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
    <?php include '../IncludeFile/Footer.php' ?>
</body>