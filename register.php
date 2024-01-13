<?php include('dbconnect.php');
session_start();

if (isset($_POST['register_user'])) {
    $name = $_POST['enterName'];
    $email = $_POST['enterEmail'];
    $phoneNumber = $_POST['enterPhoneNumber'];
    $address = $_POST['enterAddress'];

    $childName = $_POST['enterChildName'];
    $childDOB = $_POST['enterChildDOB'];
    $childGender = $_POST['gender'];

    $password = $_POST['enterPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    $insertParent = "INSERT INTO parent (full_name, email, phone_number, address, password) VALUES ('$name', '$email', '$phoneNumber', '$address', '$password')";
    $insertChild = "INSERT INTO child (parent_id, child_name, gender, date_of_birth) VALUES ((SELECT parent_id FROM parent WHERE email = '$email' AND password = '$password'), '$childName', '$childGender', '$childDOB')";

    if ($confirmPassword == $password) {
        mysqli_query($conn, $insertParent);
        mysqli_query($conn, $insertChild);
    }

    header('location: parent.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="script.js" defer></script>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- lightgallery css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="register">
        <div class="row">
            <form id="registerForm" action="" method="post">
                <h3>Create Account</h3>
                <h4>Parent Info</h4>
                <div class="inputBox">
                    <input required type="text" name="enterName" placeholder="your name">
                    <input required type="email" name="enterEmail" placeholder="your email">
                    <input required type="tel" name="enterPhoneNumber" id="enterPhoneNumber" placeholder="phone number">
                    <input required type="text" name="enterAddress" id="enterAddress" placeholder="your address">
                </div>
                <h4>Child Info</h4>
                <div class="inputBox">
                    <input required type="text" name="enterChildName" placeholder="child name">
                    <input required type="date" name="enterChildDOB" placeholder="date of birth">
                </div>
                <div class="inputBox">
                    <span class="inputSpan">
                        <input required type="radio" name="gender" id="male" value="male">
                        <label for="male">male</label>
                    </span>
                    <span class="inputSpan">
                        <input required type="radio" name="gender" id="female" value="female">
                        <label for="female">female</label>
                    </span>
                </div>
                <h4>Set password</h4>
                <div class="inputBox">
                    <input required type="password" name="enterPassword" id="enterPassword" placeholder="password">
                    <input required type="password" name="confirmPassword" id="confirmPassword"
                        placeholder="confirm password">
                </div>
                <button id="registerButton" name="register_user" type="submit" class="btn">Create Account</button>
            </form>
        </div>
    </section>
</body>

</html>