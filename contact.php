<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Captured Moments</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .contact-form {
            width: 50%;
            margin: 50px auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }

        .contact-form h2 {
            margin-bottom: 30px;
            font-size: 2.2em;
            text-align: center;
            color: #2c3e50;
            font-weight: bold;
            position: relative;
        }

        .contact-form h2::after {
            content: '';
            width: 50px;
            height: 3px;
            background-color: #1abc9c;
            display: block;
            margin: 10px auto 0;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 1.1em;
            background-color: #f8f8f8;
            transition: border-color 0.3s ease;
        }

        .contact-form input[type="text"]:focus,
        .contact-form input[type="email"]:focus,
        .contact-form textarea:focus {
            border-color: #1abc9c;
            outline: none;
        }

        .contact-form input[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #1abc9c;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.2em;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .contact-form input[type="submit"]:hover {
            background-color: #16a085;
            transform: translateY(-2px);
        }

        .contact-form p {
            text-align: center;
            font-size: 1.1em;
            color: #27ae60;
            font-weight: bold;
            margin-top: 20px;
        }

        .contact-form p.error {
            color: #e74c3c;
        }
    </style>
    <script>
        function validateForm() {
            var name = document.forms["contactForm"]["name"].value;
            var email = document.forms["contactForm"]["email"].value;
            var subject = document.forms["contactForm"]["subject"].value;
            var message = document.forms["contactForm"]["message"].value;

            if (name == "" || email == "" || subject == "" || message == "") {
                alert("All fields must be filled out");
                return false;
            }

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address");
                return false;
            }
        }
    </script>
</head>
<body>

    <?php include 'header.php'; ?>
    <!-- Contact Form Section -->
    <div class="contact-form">
        <h2>Contact Us</h2>
        <form name="contactForm" action="" method="POST" onsubmit="return validateForm()">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <input type="submit" name="submit" value="Send Message">
        </form>

        <?php
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

            // Prepare and bind
            $stmt = $conn->prepare("CALL insert_data(?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $subject, $message);

            // Set parameters and execute
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            
            if ($stmt->execute()) {
                echo "<p>Thank you for your message. We will get back to you shortly.</p>";
            } else {
                echo "<p class='error'>Error: " . $stmt->error . "</p>";
            }

            // Close connection
            $stmt->close();
            $conn->close();
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
