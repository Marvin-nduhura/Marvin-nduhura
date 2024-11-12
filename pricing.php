<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Room Pricing</title>
    <style>
        .room-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 20px;
        }
        .room {
            display: flex; /* Use flexbox for the room layout */
            flex-direction: column; /* Stack children vertically */
            justify-content: space-between; /* Space between items */
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 10px;
            padding: 20px;
            text-align: center; /* Center text */
            width: 250px;
            height: 200px;
        }
        .room img {
            width: 100%; /* Make the image responsive */
            height: 65%; /* Maintain aspect ratio */
            border-radius: 10px;
        }
        .room h3 {
            margin: 0; /* Remove default margin */
            padding: 10px 0; /* Add padding for spacing */
            color: blue;
        }
        .room p {
            font-size: 1.2em;
            color: #333;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php"><b>Home</b></a></li>
            <li><a href="about.php"><b>About</b></a></li>
            <li><a href="marvinpricing.php"><b>Reciepts</b></a></li>
            
            <li><a href="marvinlogin.php"><b>Sign Up/Login</b></a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Room Pricing</h1>
        <div class="room-container">
            <div class="room">
                <img src="Pricing/single.jpg" alt="Single Room">
                <h3>Single Room</h3>
                <p>$100 per night</p>
            </div>
            <div class="room">
                <img src="Pricing/double.jpg" alt="Double Room">
                <h3>Double Room</h3>
                <p>$150 per night</p>
            </div>
            <div class="room">
                <img src="Pricing/condo.jpg" alt="Condominium">
                <h3>Condominium</h3>
                <p>$250 per night</p>
            </div>
        </div>
    </div>
</body>
</html>