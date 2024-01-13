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
            padding-top: 50px;
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
            <a href="#schedule">schedule</a>
            <a href="#menu">menu</a>
        </nav>

        <form action="" method="get">
            <button name="log_out" class="btn">Log Out</button>
        </form>
    </header>
    <section>
        <table class="table"> 
            <thead>
                <th>#</th>
                <th>08:00AM-08:30AM</th>
                <th>08:30AM-09:00AM</th>
                <th>09:30AM-10:00AM</th>
                <th>10:00AM-11:00AM</th>
                <th>11:00AM-11:30AM</th>
                <th>11:30AM-12:00PM</th>
                <th>12:00PM-13:00PM</th>
                <th>13:00PM-13:30PM</th>
                <th>--15:00PM</th>
                <th>15:00PM-15:40PM</th>
                <th>15:40PM-16:00PM</th>
            </thead>
            <tbody>
                <tr>
                    <td data-label="#">Monday</td>
                    <td data-label="08:00AM-08:30AM">Arrival-Welcoming</td>
                    <td data-label="08:30AM-09:00AM">Circle Time</td>
                    <td data-label="09:30AM-10:00AM">Breakfast</td>
                    <td data-label="10:00AM-11:00AM">Drawing</td>
                    <td data-label="11:00AM-11:30AM">Alphabet</td>
                    <td data-label="11:30AM-12:00PM">Numbers</td>
                    <td data-label="12:00PM-13:00PM">Lunch</td>
                    <td data-label="13:00PM-13:30PM">Getting ready for Nap</td>
                    <td data-label="--15:00PM">Nap time</td>
                    <td data-label="15:00PM-15:40PM">Centers</td>
                    <td data-label="15:40PM-16:00PM">Clean Up</td>
                </tr>
                <tr>
                    <td data-label="#">Tuesday</td>
                    <td data-label="08:00AM-08:30AM">Arrival-Welcoming</td>
                    <td data-label="08:30AM-09:00AM">Circle Time</td>
                    <td data-label="09:30AM-10:00AM">Breakfast</td>
                    <td data-label="10:00AM-11:00AM">Music</td>
                    <td data-label="11:00AM-11:30AM">Alphabet</td>
                    <td data-label="11:30AM-12:00PM">Numbers</td>
                    <td data-label="12:00PM-13:00PM">Lunch</td>
                    <td data-label="13:00PM-13:30PM">Getting ready for Nap</td>
                    <td data-label="--15:00PM">Nap time</td>
                    <td data-label="15:00PM-15:40PM">Centers</td>
                    <td data-label="15:40PM-16:00PM">Clean Up</td>
                </tr>
                <tr>
                    <td data-label="#">Wednesday</td>
                    <td data-label="08:00AM-08:30AM">Arrival-Welcoming</td>
                    <td data-label="08:30AM-09:00AM">Circle Time</td>
                    <td data-label="09:30AM-10:00AM">Breakfast</td>
                    <td data-label="10:00AM-11:00AM">Painting</td>
                    <td data-label="11:00AM-11:30AM">Alphabet</td>
                    <td data-label="11:30AM-12:00PM">Numbers</td>
                    <td data-label="12:00PM-13:00PM">Lunch</td>
                    <td data-label="13:00PM-13:30PM">Getting ready for Nap</td>
                    <td data-label="--15:00PM">Nap time</td>
                    <td data-label="15:00PM-15:40PM">Centers</td>
                    <td data-label="15:40PM-16:00PM">Clean Up</td>
                </tr>
                <tr>
                    <td data-label="#">Thursday</td>
                    <td data-label="08:00AM-08:30AM">Arrival-Welcoming</td>
                    <td data-label="08:30AM-09:00AM">Circle Time</td>
                    <td data-label="09:30AM-10:00AM">Breakfast</td>
                    <td data-label="10:00AM-11:00AM">Movie</td>
                    <td data-label="11:00AM-11:30AM">Alphabet</td>
                    <td data-label="11:30AM-12:00PM">Numbers</td>
                    <td data-label="12:00PM-13:00PM">Lunch</td>
                    <td data-label="13:00PM-13:30PM">Getting ready for Nap</td>
                    <td data-label="--15:00PM">Nap time</td>
                    <td data-label="15:00PM-15:40PM">Centers</td>
                    <td data-label="15:40PM-16:00PM">Clean Up</td>
                </tr>
                <tr>
                    <td data-label="#">Friday</td>
                    <td data-label="08:00AM-08:30AM">Arrival-Welcoming</td>
                    <td data-label="08:30AM-09:00AM">Circle Time</td>
                    <td data-label="09:30AM-10:00AM">Breakfast</td>
                    <td data-label="10:00AM-11:00AM">Cooking</td>
                    <td data-label="11:00AM-11:30AM">Alphabet</td>
                    <td data-label="11:30AM-12:00PM">Numbers</td>
                    <td data-label="12:00PM-13:00PM">Lunch</td>
                    <td data-label="13:00PM-13:30PM">Getting ready for Nap</td>
                    <td data-label="--15:00PM">Nap time</td>
                    <td data-label="15:00PM-15:40PM">Centers</td>
                    <td data-label="15:40PM-16:00PM">Clean Up</td>
                </tr>
            </tbody>
        </table>
    </section>
</body>
</html>