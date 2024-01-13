<?php
session_start();
if (isset($_GET['log_out'])) {
    session_destroy();
    unset($_SESSION['parent_id']);
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Learners</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- lightgallery css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- header section starts -->

    <header class="header" style="">
        <a href="index.php" class="logo"> <i class="fas fa-school"></i>
            Little Learners
        </a>
        <nav class="navbar">
            <a href="#child">child</a>
            <a href="#schedule">schedule</a>
            <a href="#menu">menu</a>
        </nav>

        <form action="" method="get">
            <button name="log_out" class="btn">Log Out</button>
        </form>
    </header>

    <!-- header section ends -->

    <!-- home section starts -->


    <section class="parent" id="parent">

        <div id="child" class="parent-box-container">
            <div class="child-image-box">
                <img src="
                <?php if ($_SESSION['child_gender'] == 'male') {
                    echo "boy.jpg";
                } else {
                    echo "girl.jpg";
                } ?>
                " alt="">
            </div>
            <h2 class="child-name">
                <?php echo $_SESSION['child_name'] ?>
            </h2>
        </div>

        <div id="schedule" class="box-container">
            <h2 class="schedule-title">
                Schedule
            </h2>
        </div>
    </section>

    <!-- home section ends -->



</body>

</html>