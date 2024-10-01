



<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Get the logged-in username from the session
$operatorName = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Captured Moments</title>

    <style>
                * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f9;
            color: #333;
        }

        /* General container and layout styles */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Admin panel styles */
        #admin {
            padding: 20px;
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #admin h2 {
            margin-bottom: 20px;
            color: #e50914;
        }

        h3 {
            margin-bottom: 15px;
            font-size: 18px;
            color: #444;
        }

        p {
            font-size: 14px;
            margin-bottom: 20px;
            color: #777;
        }

        button {
            background-color: #e50914;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            font-size: 14px;
        }

        button a {
            text-decoration: none;
            color: #fff;
        }

        button:hover {
            background-color: #d40813;
        }

        .main {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .main h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .main p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <!-- Admin header -->
    <?php include "adminheader.php"; ?>

    <!-- Main welcome section -->
    <div class="main container">
        <h1>Welcome, <?php echo htmlspecialchars($operatorName); ?>!</h1>
        <p>
            This is your admin dashboard where you can manage and maintain the key features of the Captured Moments website.
            Here, you have access to upload images to the gallery, manage team portfolios, and keep contact information up-to-date.
        </p>
    </div>

    <!-- Gallery Management Section -->
    <section id="admin" class="container">
        <h2>Gallery Management</h2>
        <p>
            Upload new images, categorize them, and manage the existing gallery content. This section helps you keep the visual portfolio of Captured Moments 
            in top-notch form. Simply click on the button below to start managing the gallery.
        </p> <br>
        <button><a href="admin_gallery.php">Manage Gallery</a></button>
        
    </section>

    <!-- Portfolio Management Section -->
    <section id="admin" class="container">
        <h2>Portfolio Management</h2>
        <p>
            Manage the portfolios of individual photographers and team members. Keep their work organized and present their unique talents effectively.
        </p> <br>
        <button><a href="#">Manage Portfolio</a></button>
    </section>

    <!-- Contact Management Section -->
    <section id="admin" class="container">
        <h2>Contact Information</h2>
        <p>
            Ensure that potential clients and business partners can easily reach the right people. Update the contact details and ensure everything is accurate.
        </p>
        <button><a href="#">Manage Contact</a></button>
    </section>

    <!-- Include Footer -->
    <?php include "footer.php"; ?>

</body>
</html>
