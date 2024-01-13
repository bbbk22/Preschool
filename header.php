<?php
include('dbconnect.php');
session_start();
if (isset($_POST['login_user'])) {
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    $query = "SELECT * FROM parent WHERE email = '$loginEmail' AND password = '$loginPassword'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $parentRow = mysqli_fetch_assoc($result);
        $_SESSION['full_name'] = $parentRow['full_name'];
        $_SESSION['parent_id'] = $parentRow['parent_id'];
        $parentId = $_SESSION['parent_id'];

        $childQuery = "SELECT * FROM child WHERE parent_id = '$parentId'";
        $childResult = mysqli_query($conn, $childQuery);

        $childRow = mysqli_fetch_assoc($childResult);
        print_r($childRow);
        $_SESSION['child_name'] = $childRow['child_name'];
        $_SESSION['child_gender'] = $childRow['gender'];
        header('location: parent.php');
        exit();
    }
}
?>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-school"></i> Little Learners</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#education">education</a>
        <a href="#teacher">teacher</a>
        <a href="#gallery">gallery</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <div class="fas fa-user" id="login-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <form action="" class="login-form" method="post">
        <h3>login now</h3>
        <input name="loginEmail" type="email" placeholder="your email" class="box">
        <input name="loginPassword" type="password" placeholder="your password" class="box">
        <p>forget your password <a href="#">click here</a> </p>
        <input type="submit" name="login_user" value="login now" class="btn">
        <p>dont have account? <a href="register.php">create account</a></p>
    </form>
</header>