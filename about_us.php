<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Captured Moments</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .about-section {
            width: 85%;
            margin: 80px;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }

        .about-section h2 {
            text-align: center;
            font-size: 2.5em;
            color: #2c3e50;
            margin-bottom: 30px;
            position: relative;
        }

        .about-section h2::after {
            content: '';
            width: 80px;
            height: 3px;
            background-color: #1abc9c;
            display: block;
            margin: 10px auto 0;
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 40px;
        }

        .about-content img {
            max-width: 100px;
            max-height: 100px;
            border-radius: 12px;
        }

        .about-section .about-content #paragraph {
            Align-items: left;

        }

        .about-text {
            max-width: 900px;
        }

        .about-text p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #666;
            text-align: center;
        }

        /* Purchasing Section */
        .purchase-section {
            margin-top: 50px;
            text-align: center;
        }

        .purchase-section h2 {
            font-size: 2.5em;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .purchase-section p {
            font-size: 1.2em;
            color: #666;
            max-width: 800px;
            margin: 0 auto 30px;
        }

        .purchase-section button {
            background-color: #1abc9c;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 1.2em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .purchase-section button:hover {
            background-color: #16a085;
        }

        footer {
            background-color: #34495e;
            color: #ecf0f1;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <?php include "header.php"; ?>

    <!-- About Section -->
    <div class="about-section">
        <h2>About Captured Moments</h2>
        <div class="about-content">
            <img src="uploads/logo.jpg" alt="Captured Moments Photography">
            <div class="about-text">
                <p id="paragraph">
                    At <strong>Captured Moments</strong>, we believe that every photograph tells a story, and we are dedicated to capturing those stories with precision, creativity, and passion. From wildlife photography that brings the beauty of nature to life to stunning portraits that reflect the unique personalities of our clients, we excel in various photography styles.
                </p>
                <p id="paragraph">
                    With over a decade of experience in the photography industry, our team has worked on projects ranging from commercial photography for renowned brands to personal portraits and landscape photography that showcases the wonders of the world.
                </p>
            </div>
        </div>
    </div>

    <!-- Picture Purchasing Section -->
    <div class="about-section purchase-section">
        <h2>Purchase Our Photographs</h2>
        <p>
            Our stunning collection of wildlife, landscape, and portrait photography is available for purchase. Whether you're looking to add a touch of nature to your home or want a unique portrait, our high-quality prints are perfect for any space.
        </p>
        <p>
            All our photos are available in various sizes and formats, including framed prints, canvas wraps, and digital downloads. You can browse through our online gallery and select the perfect piece for your collection.
        </p>
        <p>
            additional information can be obtain from contacting us at <a href="contact.php">contact us</a>.
        </p>
        <button><a href="gallery.php">Gallery</a></button>
    </div>

    <!-- Footer Section -->
    <?php include "footer.php"; ?>

</body>

</html>
