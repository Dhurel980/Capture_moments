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
            background-color: #1a535c;
            color: #ecf0f1;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .logo {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo img {
            border-radius: 50%;
        }

        .logo h1 {
            margin: 0;
            font-size: 24px;
        }

        .logo p {
            margin: 0;
            font-size: 14px;
            color: #bdc3c7;
            text-align: center;
        }

        .head-nav {
            margin: 0;
            padding-left: 15px;
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
            margin-left: 15px;
        }

        nav ul li a {
            color: #ecf0f1;

            font-size: 16px;
            padding: 5px 10px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #34495e;
            border-radius: 5px;
        }

        a {
            text-decoration: none;
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            .logo h1 {
                font-size: 28px;
            }

            nav {
                width: 100%;
                text-align: left;
                margin-top: 10px;
            }

            nav ul li {
                display: block;
                margin: 5px 0;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 15px;
            }

            .logo h1 {
                font-size: 22px;
            }

            .logo p {
                font-size: 12px;
            }

            nav ul li {
                margin-left: 10px;
            }

            nav ul li a {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="uploads/logo.jpg" alt="Captured Moments Logo" height="50">
            <div class="head-nav">
                <a href="portfolio.php"><h1>Captured Moments</h1></a>
                <p>Photography by Professionals</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="member.php">Member</a></li>
                <li><a href="experience.php">Experience & Skills</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
