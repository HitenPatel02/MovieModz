<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="user_reg_css.css">
</head>
<body>
    <h1>User Registration</h1>
    <form action="user_reg_b_2.php" method="POST">
        <input type="text" name="uname" placeholder="Username" required>
        <input type="email" name="uemail" placeholder="Email" required>
        <input type="tel" name="uphone" placeholder="Phone" required>
        <input type="password" name="upass" placeholder="Password" required>
        <input type="text" name="ufrands" placeholder="Frands Namee" required>
        <input type="submit" value="reg">
    </form>
    
</body>
</html>
