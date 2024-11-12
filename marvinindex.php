<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Home Page - WELCOME TO OUR HOTEL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            color: white;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        .container {
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, minmax(200px, 1fr));
            gap: 5px;
            margin: 15px 0;
        }
        .gallery img {
            width: 70%;
            height: 75%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
            transition: transform 0.3s;
            align: center;
        }
        .gallery img:hover {
            transform: scale(1.05); /* Zoom effect on hover */
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="marvinindex.php"><b>Food</b></a></li>
            
            <li><a href="marvinpricing.php"><b>Receipts</b></a></li>
            
            <li><a href="marvinlogin1.php"><b>Sign Up/Login</b></a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>YOU'RE WELCOME</h1>
        <div class="gallery">
            <img src="pie.jpg" alt="pie">
            <img src="burger.jpg" alt="burger">
            <img src="tea.jpg" alt="tea">
            <img src="milk.jpg" alt="milk">
            <img src="pizza" alt="pizza">
            <img src="pie2" alt="pie2">
        </div>
        <h3 style="color: cyan;"><i>Your comfort is our priority</i></style></h3>
    </div>
</body>
</html>