<?php
// Establish database connection
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "swasthyaayu_login"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $user_name = $_POST['username'];
    $user_password = $_POST['password'];

   

    // Insert user into the database (only username and password)
    $sql = "INSERT INTO logindetails (username, password) VALUES ('$user_name', '$user_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        // Redirect to login page after successful registration
        header("Location: pbllogin.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayurvedic Treatment - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
        }

        header {
            width: 100%; 
            height: 100px; 
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding-left: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-image {
            width: 120px;
            height: auto;
            object-fit: contain;
        }

        .logo-text {
            font-size: 24px;
            font-weight: bold;
            font-family: 'Roboto', sans-serif;
            color: darkblue;
            margin-left: 10px;
        }

        .register-container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 350px;
            margin-top: 20px;
        }

        .register-container h2 {
            text-align: center;
            font-weight: bolder;
            margin: 20px 0;
            font-size: 30px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .login-link {
            text-align: center;
            margin-top: 10px;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="https://www.pngarts.com/files/12/Ayurveda-Logo-Free-PNG-Image.png" class="logo-image" alt="AyuCare Logo" />
            <h2 class="logo-text">Swasthya Ayu</h2>
        </div>
    </header>

    <div class="register-container">
        <h2>Create an Account</h2>
        <form action="pblregister.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="pbllogin.php">Login here</a></p>
        </div>
    </div>
</body>
</html>
