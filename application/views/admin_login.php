<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets\frontend\css\bootstrap.css') ?>">
    <style>
        body {
             background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            background-image: url('background-image.jpg'); /* Replace 'background-image.jpg' with the URL of your background image */
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }
        .header {
            text-align: center;
            font-size: 30px;
            margin: 20px 0;
            color: #333;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            margin-top: 100px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-btn:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        var BASE_URL = "<?php echo base_url(); ?>"
    </script>
</head>
<body>

</div>
<div class="header">Locker Room</div>
    <div class="container">
        <h2 class="text-center">Admin Login</h2>
        <!-- <form action="login.php" method="POST">  -->
            <!-- Replace "login.php" with the actual server-side script to handle the login process -->
            <div class="form-group">
                <label for="user_id">User ID:</label>
                <input type="text" id="email" name="user_id" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn" id="loginButton">Login</button>
        <!-- </form> -->
    </div>
    </div>
    <script src="<?php echo base_url('assets/frontend/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/frontend/js/admin_login.js') ?>"></script>
</body>
</html>
