<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Login & Register | Ludiflex</title>
</head>
<body>
    <div class="wrapper">
        <div class="form-header">
            <div class="titles">
                <div class="title-login">Login</div>
                <div class="title-register">Register</div>
            </div>
        </div>
        <!-- Erroor container -->
        <div class="error-message ">Error Test</div>

        <!-- LOGIN FORM -->
        <form action="#" method="POST" class="login-form" autocomplete="off">
            <div class="input-box">
                <input type="text" name="log-email" class="input-field" id="log-email" required>
                <label for="log-email" class="label">Email</label>
                <i class='bx bx-envelope icon'></i>
            </div>
            <div class="input-box">
                <input type="password" name="log-password" class="input-field" id="log-pass" required>
                <label for="log-pass" class="label">Password</label>
                <i class='bx bx-lock-alt icon' ></i>
            </div>
            <div class="form-cols">
                <div class="col-1"></div>
                <div class="col-2">
                    <a href="#">Forgot password?</a>
                </div>
            </div>
            <div class="input-box">
                <button class="btn-submit" name="login" id="SignInBtn">Sign In <i class='bx bx-log-in' ></i></button>
            </div>
            <div class="switch-form">
                <span>Don't have an account? <a href="#" onclick="registerFunction()">Register</a></span>
            </div>
        </form>

        <!-- REGISTER FORM -->
        <form action="#" method="POST" class="register-form" autocomplete="off">
            <div class="input-box">
                <input type="text" name="reg-name"  class="input-field" id="reg-name" required>
                <label for="reg-name" class="label">Username</label>
                <i class='bx bx-user icon' ></i>
            </div>
            <div class="input-box">
                <input type="text" name="reg-email" class="input-field" id="reg-email" required>
                <label for="reg-email" class="label">Email</label>
                <i class='bx bx-envelope icon'></i>
            </div>
            <div class="input-box">
                <input type="password" name="reg-password" class="input-field" id="reg-pass" required>
                <label for="reg-pass" class="label">Password</label>
                <i class='bx bx-lock-alt icon' ></i>
            </div>
            <div class="form-cols">
                <div class="col-1">
                    <input type="checkbox" id="agree">
                    <label for="agree"> I agree to terms & conditions</label>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="input-box">
                <button class="btn-submit" name="register" id="SignUpBtn">Sign Up <i class='bx bx-user-plus'></i></button>
            </div>
            <div class="switch-form">
                <span>Already have an account? <a href="#" onclick="loginFunction()">Login</a></span>
            </div>
        </form>
    </div>

    <script src="js/script.js"></script>
    <script src="js/auth.js"></script>
</body>
</html>