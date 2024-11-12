<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Sign Up</title>
</head>
<body>
    <nav>
        <ul>
        <li><a href="index.php"><b>Food</b></a></li>
            <li><a href="about.php"><b>About</b></a></li>
            <li><a href="marvinpricing.php"><b>Recipts</b></a></li>
            
            <li><a href="marvinlogin.php"><b>Sign Up/Login</b></a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="marvinsignup.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="lmarvinlogin.php" style="color: lightblue;">Login</a></p>
    </div>
</body>
</html>