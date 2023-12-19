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
    $qwAll = 'SELECT * FROM tblbuscompany WHERE BusCompanyID =' . $sfId;
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
                <div class="add-new add-new-bus-company">
                    <div class="title-main">
                        <h2>Update Bus Company</h2>
                    </div>
                    <form action="../IncludeFile/update.php?uid=<?php echo $row["BusCompanyID"] ?>&oid=4" method="post" enctype="multipart/form-data">
                        <div class="box">
                            <div class="list">
                                <label for="companyname">Name</label>
                                <input type="text" name="companyname" id="companyname" value="<?php echo $row["CompanyName"] ?>">
                            </div>
                            <div class="list">
                                <label for="contact">Contact</label>
                                <input type="text" name="contact" id="contact" value="<?php echo $row["Contact"] ?>">
                            </div>
                            <div class="list">
                                <label for="website">Website</label>
                                <input type="text" name="website" id="website" value="<?php echo $row["Website"] ?>">
                            </div>
                            <div class="list">
                                <label for="imgurl">Image</label>
                                <input type="file" name="imgurl" id="imgurl" value="<?php echo $row["ImgUrl"] ?>">
                            </div>
                            <div class="btn">
                                <input type="submit" value="submit" name="cmdSubmit">
                            </div>
                        </div>
                        <div class="box">
                            <div class="list">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" value="<?php echo $row["Price"] ?>">
                            </div>
                            <div class="list">
                                <label for="transportation">Transportation</label>
                                <input type="text" name="transportation" id="transportation" value="<?php echo $row["Transportation"] ?>">
                            </div>
                            <div class="list">
                                <label for="facilities">Facilities</label>
                                <input type="text" name="facilities" id="facilities" value="<?php echo $row["Facilities"] ?>">
                            </div>
                            <div class="list">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10"><?php echo $row["Description"] ?></textarea>
                            </div>
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