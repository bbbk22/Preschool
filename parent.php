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

            <a href="schedule.php">schedule</a>
            <a href="menu.php">menu</a>
        </nav>

        <form action="" method="get">
            <button name="log_out" class="btn">Log Out</button>
        </form>
    </header>

    <!-- header section ends -->

    <!-- home section starts -->


    <section class="parent" id="parent">

        <div id="child" class="parent-box-container container">
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
            <form action="">
                <div class="input-box">
                    <textarea name="sendMessafe" id="" placeholder="Send your Message..."></textarea>
                    <button name="send_message" class="btn">Send Message</button>
                </div>
            </form>
        </div>
        <div id="dashboardContent" class="parent-box-container">
            <div id="schedule" class="dashboard-box-container">
                <div class="dashboard-box-container-item">
                    <h2 class="dashboard-box-container-item-title">
                        Today's Schedule: 8:30AM
                    </h2>
                    <span class="dashboard-box-container-item-span">
                        Circle Time
                    </span>
                    <span class="dashboard-box-container-item-icon">
                        <img src="schedule.png" alt="">
                    </span>
                </div>
            </div>
            <!-- <div id="menu" class="dashboard-box-container">
                <div class="dashboard-box-container-item">
                    <h2 class="dashboard-box-container-item-title">
                        Today's Menu:
                    </h2>
                    <span class="dashboard-box-container-item-span">
                        Breakfast: Milk, Pancakes & Bananas
                        <br>
                        Lunch: Chicken Soup, Pasta, Cheese
                    </span>
                    <span class="dashboard-box-container-item-icon">
                        <img src="menuu.png" alt="">
                    </span>
                </div>
            </div> -->
            <div id="schedule" class="dashboard-box-container">
                <div class="dashboard-box-container-item">
                    
                    <span class="dashboard-box-container-item-span">
                        Breakfast
                    </span>
                    <div class="checkbox-wrapper-31">
                  <input type="checkbox"/>
                 <svg viewBox="0 0 35.6 35.6">
                 <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
                 <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
                  <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
                  </svg>
                  </div>
                </div>
            </div>
            <div id="schedule" class="dashboard-box-container">
                <div class="dashboard-box-container-item">
                    
                    <span class="dashboard-box-container-item-span">
                        Lunch
                    </span>
                    <div class="checkbox-wrapper-31">
                  <input type="checkbox"/>
                 <svg viewBox="0 0 35.6 35.6">
                 <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
                 <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
                  <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
                  </svg>
                  </div>
                </div>
            </div>
            <div id="schedule" class="dashboard-box-container">
                <div class="dashboard-box-container-item">
                    
                    <span class="dashboard-box-container-item-span">
                        Sleep
                    </span>
                    <div class="checkbox-wrapper-31">
                  <input type="checkbox"/>
                 <svg viewBox="0 0 35.6 35.6">
                 <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
                 <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
                  <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
                  </svg>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <!-- home section ends -->



</body>

</html>