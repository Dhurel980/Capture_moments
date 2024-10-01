<?php
session_start(); // Start the session to store user information

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "capture_moments";
    $port = 3307; // Custom port number

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['login'])) {
        $name = $_POST['username'];
        $pwd = $_POST['password'];

        // Prepared statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM login WHERE name = ? AND password = ?");
        $stmt->bind_param("ss", $name, $pwd);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Login successful, set session
            $_SESSION['username'] = $name;

            // Redirect to the admin dashboard
            header('Location: admin_panel.php');
            exit;
        } else {
            echo 'Login failed. Invalid username or password.';
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: grey;
        }

        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            background-color: #2c3e50;
            border-radius: 3px;
        }

        #heading {
            text-align: center;
            color: #1abc9c;
            border-bottom: 2px solid silver;
            margin-bottom: 20px;
        }

        .form {
            margin: 0 20px;
            text-align: center;
            padding-bottom: 15px;
        }
        .textfield {
            width: 100%;
            border-radius: 3px;
            height: 50px;
            font-size: 18px;
            padding-left: 20px;
            box-sizing: border-box;
            border: 2px solid silver;
            margin: 8px 0;
        }

        .btn {
            width: 100%;
            height: 40px;
            background-color: #1abc9c;
            border-radius: 5px;
            font-size: 18px;
            margin: 8px 0;
            color: white;
            border: 0;
            cursor: pointer;
        }

        .btn:hover {
            background-color: skyblue;
        }

        a {
            text-decoration: none;
            color: #1abc9c;
        }
    </style>
</head>
<body>
    <div class="center">
        <div id="heading">
            <h1>Capture Moments</h1>
            <h2>Login</h2>
        </div>
        <form action="" method="POST" autocomplete="off">
            <div class="form">
                <input type="text" name="username" placeholder="Username" class="textfield" required>
                <input type="password" name="password" placeholder="Password" class="textfield" required>
                <a href="#" class="fpass" onclick="message()">Forgot password?</a> <br>

                <input type="submit" name="login" value="Login" class="btn">
            </div>
        </form>
    </div>

    <script>
        function message() {
            alert("Please contact your admin");
        }
    </script>
</body>
</html>
