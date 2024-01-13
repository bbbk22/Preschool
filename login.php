<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body>
    <section class="home">
        <div class="form_container">
            <div class="form login_form">
                <form action="#">
                    <h2>Login</h2>
                    <div class="input_box">
                        <input type="email" name="" id="" placeholder="Enter your email" required>
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" name="" id="" placeholder="Enter your password" required>
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <div class="option_field">
                        <span class="checkbox">
                            <input type="checkbox" name="" id="check">
                            <label for="check">Remember me</label>
                        </span>
                        <a href="" class="forgot_pw">Forgot password?</a>
                    </div>
                    <button class="button">Login Now</button>

                </form>
            </div>

            <div class="form forgot_password">
                <form action="#">
                    <h2>Change password</h2>
                    <div class="input_box">
                        <input type="email" name="" id="" placeholder="Enter your email" required>
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" name="" id="" placeholder="Enter your new password" required>
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>
                    <div class="input_box">
                        <input type="password" name="" id="" placeholder="Confirm your password" required>
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <button class="button">Confirm</button>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>