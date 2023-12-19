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
    $qwAll = 'SELECT * FROM tblfood WHERE FoodID =' . $sfId;
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


            <div class="tabcontent" id="Add_new_food">
                <div class="add-new add-new-food">
                    <div class="title-main">
                        <h2>Update Foods</h2>
                    </div>
                    <form action="../IncludeFile/update.php?uid=<?php echo $row["FoodID"] ?>&oid=2" method="post" enctype="multipart/form-data">
                        <div class="list">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="<?php echo $row["Title"]?>">
                        </div>

                        <div class="list">
                            <label for="location">location</label>
                            <input type="text" name="location" id="location" value="<?php echo $row["Location"] ?>">
                        </div>
                        <div class="list">
                            <label for="imgurl">Image</label>
                            <input type="file" name="imgurl" id="imgurl">
                        </div>
                        <div class="list">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10"><?php echo $row["Description"] ?></textarea>
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