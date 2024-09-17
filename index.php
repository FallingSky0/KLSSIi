<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to homepage</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .header {
            text-align: center;
        }
        .header img {
            max-width: 7%;
            height: auto;
        }
        .loginbox {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="images/payroll.png" alt="Payroll Image">
    </div>
    <div class="loginbox">
        <h3>Log in to here</h3>
        
        <form method="post" action="newfile.php">
            <p>Username</p>
            <input type="text" name="username" placeholder="admin">
            <p>Password</p>
            <input type="password" name="password" placeholder="*****">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>