

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swasthya Ayu Login</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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

        .login-container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 300px;
            margin-top: 80px;
        }

        .login-container h1 {
            text-align: center;
            font-weight: bolder;
            margin: 20px 0;
            font-size: 35px;
        }

        input[type="text"],
        input[type="password"] {
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

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
        }

        .register-link a:hover {
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
    
    <div class="login-container">
        <h1>Login</h1>
        <form id="loginForm" method="post" action="pbllogin.php">
            <input type="text" name="username" id="username" placeholder="Username" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit" name="login_Btn">Login</button>
        </form>
        <div class="register-link">
            <p>Not registered? <a href="pblregister.php">Create an account</a></p>
        </div>
    </div>
</body>
</html>
<?php
// Connect to MySQL using MySQLi
$conn = new mysqli("localhost", "root", "", "swasthyaayu_login");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if login button is pressed
if (isset($_POST['login_Btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL Query to fetch user details
    $sql = "SELECT * FROM logindetails WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $resultPassword = $row['password'];

        // Verify password
        if ($password === $resultPassword) {
            header("Location: predictingpbl.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Username not found. Please register.');</script>";
    }

    $stmt->close();
}

$conn->close();
?>