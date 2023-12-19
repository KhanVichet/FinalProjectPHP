<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../Jquery/jquery-3.6.3.min.js"></script>

<?php
include 'Dbcon.php';

$ID = $_GET["fdID"];
$deID = $_GET["dId"];

function deleteTrending($dbCon, $ID)
{


    $query = 'DELETE FROM tbltrending WHERE TrendingID = ' . $ID . '';
    $statement = $dbCon->query($query);



    if ($statement) {
        echo '
            <script>
                $(document).ready(function(){
                    // SweetAlert pop-up for success
                    swal({
                        title: "Success!",
                        text: "The record has been deleted.",
                        icon: "success",
                    });
    
                    // Delayed redirection to admin.php
                    setTimeout(function(){
                        window.location.href = "../Public/admin.php";
                    }, 2000); // 2000 milliseconds (2 seconds) delay
                })
            </script>
            ';
    } else {
        // Handle the case when the deletion fails
        echo '
            <script>
                $(document).ready(function(){
                    // SweetAlert pop-up for failure
                    swal({
                        title: "Error!",
                        text: "Failed to delete the record.",
                        icon: "error",
                    });
    
                    // Delayed redirection to admin.php
                    setTimeout(function(){
                        window.location.href = "../Public/admin.php";
                    }, 2000); // 2000 milliseconds (2 seconds) delay
                })
            </script>
            ';
    }
}


function deleteFood($dbCon, $ID)
{


    $query = 'DELETE FROM tblfood WHERE FoodID = ' . $ID;
    $statement = $dbCon->query($query);



    if ($statement) {
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for success
            swal({
                title: "Success!",
                text: "The record has been deleted.",
                icon: "success",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    } else {
        // Handle the case when the deletion fails
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for failure
            swal({
                title: "Error!",
                text: "Failed to delete the record.",
                icon: "error",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    }
}

function deleteVisit($dbCon, $ID)
{


    $query = 'DELETE FROM tblvisit WHERE VisitID =' . $ID;
    $statement = $dbCon->query($query);



    if ($statement) {
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for success
            swal({
                title: "Success!",
                text: "The record has been deleted.",
                icon: "success",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    } else {
        // Handle the case when the deletion fails
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for failure
            swal({
                title: "Error!",
                text: "Failed to delete the record.",
                icon: "error",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    }
}

function deleteBusCompany($dbCon, $ID)
{


    $query = 'DELETE FROM tblbuscompany WHERE BusCompanyID =' . $ID;
    $statement = $dbCon->query($query);



    if ($statement) {
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for success
            swal({
                title: "Success!",
                text: "The record has been deleted.",
                icon: "success",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    } else {
        // Handle the case when the deletion fails
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for failure
            swal({
                title: "Error!",
                text: "Failed to delete the record.",
                icon: "error",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    }
}
function deleteBusSchedule($dbCon, $ID)
{


    $query = 'DELETE FROM tblbusschedule WHERE ScheduleID = ' . $ID;
    $statement = $dbCon->query($query);



    if ($statement) {
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for success
            swal({
                title: "Success!",
                text: "The record has been deleted.",
                icon: "success",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    } else {
        // Handle the case when the deletion fails
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for failure
            swal({
                title: "Error!",
                text: "Failed to delete the record.",
                icon: "error",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    }
}
function deleteHotels($dbCon, $ID)
{


    $query = 'DELETE FROM tblhotel WHERE HotelID =' . $ID;
    $statement = $dbCon->query($query);



    if ($statement) {
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for success
            swal({
                title: "Success!",
                text: "The record has been deleted.",
                icon: "success",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    } else {
        // Handle the case when the deletion fails
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for failure
            swal({
                title: "Error!",
                text: "Failed to delete the record.",
                icon: "error",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    }
}

function deleteHotelsDetail($dbCon, $ID)
{


    $query = 'DELETE FROM tblhoteldetail WHERE DetailID =' . $ID;
    $statement = $dbCon->query($query);



    if ($statement) {
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for success
            swal({
                title: "Success!",
                text: "The record has been deleted.",
                icon: "success",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    } else {
        // Handle the case when the deletion fails
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for failure
            swal({
                title: "Error!",
                text: "Failed to delete the record.",
                icon: "error",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    }
}
function deleteRoomType($dbCon, $ID)
{


    $query = 'DELETE FROM tblroomtype WHERE RoomTypeID =' . $ID;
    $statement = $dbCon->query($query);



    if ($statement) {
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for success
            swal({
                title: "Success!",
                text: "The record has been deleted.",
                icon: "success",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    } else {
        // Handle the case when the deletion fails
        echo '
    <script>
        $(document).ready(function(){
            // SweetAlert pop-up for failure
            swal({
                title: "Error!",
                text: "Failed to delete the record.",
                icon: "error",
            });

            // Delayed redirection to admin.php
            setTimeout(function(){
                window.location.href = "../Public/admin.php";
            }, 2000); // 2000 milliseconds (3 seconds) delay
        })
    </script>
    ';
    }
}

// Call the deleteTrending function
switch ($deID) {
    case "1":

        deleteTrending($dbCon, $ID);

        break;
    case "2":

        deleteFood($dbCon, $ID);
        break;
    case "3":
        deleteVisit($dbCon, $ID);
        break;
    case "4":
        deleteBusCompany($dbCon, $ID);
        break;
    case "5":
        deleteBusSchedule($dbCon, $ID);
        break;
    case "6":
        deleteHotels($dbCon, $ID);
        break;
    case "7":
        deleteHotelsDetail($dbCon, $ID);
        break;
    case "8":
        deleteRoomType($dbCon, $ID);
        break;

    default:
        header("location:../Public/admin.php");
}
$dbCon->close();
?>