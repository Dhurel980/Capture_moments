<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captured Moments</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        /* Header Styles */
        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo h1 {
            margin: 0;
            font-size: 34px;
        }

        .logo p {
            margin: 0;
            font-size: 14px;
            color: #bdc3c7;
            text-align: center;
        }

        .head-nav {
            margin: 0;
            padding-left: 30px;
        }

        nav {
            flex-grow: 1;
            text-align: right;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline-block;
            margin-left: 30px;
        }

        nav ul li a {
            color: #ecf0f1;
            text-decoration: none;
            font-size: 16px;
            padding: 5px 10px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #34495e;
            border-radius: 5px;
        }
        .head-nav a {
            text-decoration: none;
            color:  #ecf0f1;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="path-to-your-logo.png" alt="Captured Moments Logo" height="50">
            <div class="head-nav">
                <a href="portfolio.php"><h1>Captured Moments</h1></a>
                <p>Admin Dashboard</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Member</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
