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
    $qwAll = 'SELECT * FROM tblbusschedule WHERE ScheduleID =' . $sfId;
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
                <div class="add-new add-new-bus-schedule">
                    <div class="title-main">
                        <h2>Update Bus Schedule</h2>
                    </div>
                    <form action="../IncludeFile/update.php?uid=<?php echo $row["ScheduleID"] ?>&oid=5" method="post" enctype="multipart/form-data">
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
                            <input type="text" name="departure" id="departure" value="<?php echo $row["Departure"] ?>">
                        </div>
                        <div class="list">
                            <label for="destination">Destination</label>
                            <input type="text" name="destination" id="destination" value="<?php echo $row["Destination"] ?>">
                        </div>
                        <div class="list">
                            <label for="type">Type</label>
                            <input type="text" name="type" id="type" value="<?php echo $row["Type"] ?>">
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