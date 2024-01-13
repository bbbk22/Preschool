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
    <style>
        body{
            margin:0;
            padding:20px;
        }
        *{
            box-sizing: border-box;
        }
        section{
            padding-top: 90px;
            background-image: url(backgroundmenu.png);
        }
        .table{
            width: 100%;
            border-collapse: collapse;
        }

        .table td, .table th{
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .table th{
            background-color: darkblue;
            color: #ffffff;
        }
        .table tbody tr:nth-child(even){
            background-color: #f5f5f5;
        }

        /* responsive */
        @media(max-width: 500px){
            .table thead{
                display: none;
            }
            .table, .table tbody, .table tr, .table td{
                display:block;
                width: 100%;
            }

            .table tr{
                margin-bottom:15px;
            }

            .table td{
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            .table td::before{
                content: attr(data-label);
                position: absolute;
                left:0;
                width: 50%;
                padding-left: 15px;
                font-size: 10px;
                font-weight: bold;
                text-align: left;
            }
        }
    </style>
</head>

<body>

    <!-- header section starts -->

    <header class="header" style="">
        <a href="index.php" class="logo"> <i class="fas fa-school"></i>
            Little Learners
        </a>
        <nav class="navbar">
            <a href="parent.php">Child</a>
            <a href="schedule.php">schedule</a>
            <a href="menu.php">menu</a>
        </nav>

        <form action="" method="get">
            <button name="log_out" class="btn">Log Out</button>
        </form>
    </header>

    <section>
        <table class="table"> 
            <thead>
                <th>#</th>
                <th>Breakfast</th>
                <th>Lunch</th>
            </thead>
            <tbody>
                <tr>
                    <td data-label="#">Monday</td>
                    <td data-label="Breakfast">Milk,Pancakes,Bananas</td>
                    <td data-label="Lunch">Chicken soup,Pasta,Cheese</td>
                   
                </tr>
                <tr>
                    <td data-label="#">Tuesday</td>
                    <td data-label="Breakfast">Cereal,Waffles,Pears</td>
                    <td data-label="Lunch">Potato,Rice,Carrots</td>
                </tr>
                <tr>
                    <td data-label="#">Wednesday</td>
                    <td data-label="Breakfast">Eggs(omelet),Yougurt,Toast</td>
                    <td data-label="Lunch">Beef Stew,Noodles,Fresh Vegetables</td>
                </tr>
                <tr>
                    <td data-label="#">Thursday</td>
                    <td data-label="Breakfast">Oatmeal,Pancakes,Milk</td>
                    <td data-label="Lunch">FastFood,French Fries,Salad</td>
                </tr>
                <tr>
                    <td data-label="#">Friday</td>
                    <td data-label="Breakfast">Scrambled Eggs,Orange Juice, Muffin</td>
                    <td data-label="Lunch">Pizza,Spaghetti,Pineapple</td>
                </tr>
            </tbody>
        </table>
    </section>
</body>
</html>