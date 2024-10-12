<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the Captured Moments photography portfolio, showcasing various categories like Wildlife, Landscape, and more by professional photographers.">
    <meta name="keywords" content="portfolio, team members, experiences & skills, about us, contact">
    <meta name="robots" content="index, follow">
    <title>Portfolio - Captured Moments</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* introduction */
        #intro {
            text-align: center;
        }

        /* Portfolio Section */
        #portfolio {
            padding: 15px;
            text-align: center;
            background-color: #fff;
        }

        #portfolio h2 {
            margin-bottom: 20px;
        }

        .portfolio-items {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .portfolio-item {
            width: 350px;
            margin: 10px;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
        }

        .portfolio-item img {
            width: auto;
            height: 250px;
            border-radius: 5px;
        }

        .portfolio-item h3 {
            margin: 10px 0 5px;
        }

        .portfolio-item p {
            font-size: 14px;
        }

        /* Team Section */
        .team-section {
            margin-top: 50px;
        }

        .team-section h2 {
            text-align: center;
            font-size: 2.5em;
            color: #2c3e50;
            margin-bottom: 40px;
        }

        .team-grid {
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px; /* Limit the maximum width for large screens */
            padding: 0 20px;
        }

        .team-member {
            background-color: #fff;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            transition: transform 0.3s ease; /* Added transition for hover effects */
        }

        .team-member:hover {
            transform: scale(1.05); /* Slight zoom on hover for interactivity */
        }

        .team-member img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .team-member h3 {
            font-size: 1.5em;
            color: #34495e;
            margin-bottom: 10px;
        }

        .team-member p {
            font-size: 1.1em;
            color: #666;
            line-height: 1.6;
        }

        .team-member a {
            font-size: 1.2em;
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        /* Responsive Design Adjustments */
        @media (max-width: 768px) {
            .team-section h2 {
                font-size: 2em;
            }

            .team-member img {
                width: 100px;
                height: 100px;
            }

            .team-member h3 {
                font-size: 1.3em;
            }

            .team-member p {
                font-size: 1em;
            }
        }

        @media (max-width: 480px) {
            .team-section h2 {
                font-size: 1.8em;
            }

            .team-member img {
                width: 80px;
                height: 80px;
            }

            .team-member h3 {
                font-size: 1.2em;
            }

            .team-member p {
                font-size: 0.9em;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }
        }


        /* experiences*/
        .experience-section {
            width: 70%;
            margin: 50px auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            text-align: left;
        }

        .experience-section h2 {
            text-align: center;
            font-size: 2.5em;
            color: #2c3e50;
            margin-bottom: 30px;
            position: relative;
        }

        .experience-section h2::after {
            content: '';
            width: 80px;
            height: 3px;
            background-color: #1abc9c;
            display: block;
            margin: 10px auto 0;
        }

        .experience-item {
            margin-bottom: 40px;
        }

        .experience-item h3 {
            font-size: 1.8em;
            color: #34495e;
            margin-bottom: 10px;
        }

        .experience-item p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 5px;
            color: #666;
        }

        .experience-item span {
            display: block;
            font-size: 1em;
            color: #999;
            margin-bottom: 15px;
        }

        .experience-item ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        .experience-item ul li {
            font-size: 1.1em;
            line-height: 1.5;
            margin-bottom: 10px;
            list-style-type: none;
        }

        /* Achievements Section */
        .award-section {
            width: 70%;
            margin: 50px auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }

        .award-section h1 {
            text-align: center;
            font-size: 2.5em;
            color: #2c3e50;
            margin-bottom: 40px;
            position: relative;
        }

        .award-section h1::after {
            content: '';
            width: 80px;
            height: 3px;
            background-color: #1abc9c;
            display: block;
            margin: 10px auto 0;
        }

        .award-item {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }

        .award-logo {
            width: 100px;
            height: 100px;
            margin-right: 20px;
        }

        .award-logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* border-radius: 50%; */
        }

        .award-description {
            max-width: 800px;
        }

        .award-description h2 {
            font-size: 1.8em;
            color: #34495e;
            margin-bottom: 10px;
        }

        .award-description p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #666;
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <!-- introduction part -->
    <section id="intro">
        <h2>Welcome to Captured Moments</h2>
        <h4> <i>Discover the art of storytelling through our lens. At Captured Moments, we capture the wild beauty of animals, 
            the intensity of football, and the breathtaking allure of stunning landscapes. Each photo tells a unique story, 
            celebrating the extraordinary in the everyday. Dive into our world, where every moment is a masterpiece.</i></h4>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio">
        <h2>Our Work</h2>
        <div class="portfolio-items">
            <div class="portfolio-item">
                <a href="gallery.php"><img src="uploads\img.a.1.jpeg" alt="Panda Photo"></a>
                <h3>Wildlife Photography</h3>
                <p>A captivating collection of wildlife moments, showcasing the beauty of nature.</p>
            </div>
            <div class="portfolio-item">
                <a href="gallery.php"><img src="uploads\img1.1.jpeg" alt="landscape Photo"></a>
                <h3>landscape Photography</h3>
                <p>A beautiful collection of landscapes captured by our team.</p>
            </div>
            <div class="portfolio-item">
                <a href="gallery.php"><img src="uploads\football.3.jpg" alt="Football Photo"></a>
                <h3>Football Photography</h3>
                <p>An intense collection of dynamic football moments, capturing the spirit of the game.</p>
            </div>
            <div class="portfolio-item">
                <a href="gallery.php"><img src="uploads\img99.jpg" alt="Commercial Photo"></a>
                <h3>Commercial Photography</h3>
                <p>An intense collection of dynamic football moments, capturing the spirit of the game.</p>
            </div>
            <div class="portfolio-item">
                <a href="gallery.php"><img src="uploads\cultural.3.jpeg" alt="Cultural Photo"></a>
                <h3>Cultural Photography</h3>
                <p>An intense collection of dynamic football moments, capturing the spirit of the game.</p>
            </div>
            <!-- Add more portfolio items here -->
        </div>
    </section>

    <!-- Team Section -->
    <div class="about-section team-section">
        <h2>Meet Our Team</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="uploads/Kopildai.jpg" alt="Kopil Somai - Lead Wildlife photographer">
                <h3>Kopil Somai</h3>
                <p>Kopil is a seasoned wildlife photographer with over 15 years of experience. His work has been featured in National Geographic and BBC Wildlife Magazine.</p>
            </div>

            <div class="team-member">
                <img src="uploads/rohitdai.jpg" alt="Rohit Reshmi Magar - Football Photographer expert">
                <h3>Rohit Reshmi Magar</h3>
                <p>Rohit is an expert who has a keen eye for capturing the essence of his subjects. He specializes in creative studio and outdoor photography mainly in Football. He actively contributes in capturing football moments.</p>
            </div>
            
            <div class="team-member">
                <img src="uploads/hemdai.jpg" alt="Hem kaucha - Cultural Specialist">
                <h3>Hem kaucha</h3>
                <p>Hem's love for his culture has taken him across Nepal, capturing the beauty of cultural traditions. His work has been featured in numerous government and non-government magazines and papers.</p>
            </div>
            
            <div class="team-member">
                <a href="member.php">more...</a>
            </div>
        </div>
    </div>

    
    <!-- Experience Section -->
    <div class="experience-section">
        <h2>Our Experience</h2>

        <div class="experience-item">
            <h3>Animal Photography</h3>
            <span>2015 - Present</span>
            <p>We have covered over 200 wildlife shoots, capturing the beauty of animals in their natural habitats.</p>
            <ul>
                <li>Specialize in capturing endangered species and rare wildlife moments.</li>
                <li>Expertise in both macro and telephoto wildlife photography.</li>
                <li>Work featured in various wildlife magazines and exhibitions.</li>
            </ul>
        </div>

        <div class="experience-item">
            <h3>Travel and Landscape Photography</h3>
            <span>2018 - Present</span>
            <p>Our passion for travel has taken us to stunning locations, where we have captured the beauty of nature and diverse cultures.</p>
            <ul>
                <li>Documentary-style travel photography for blogs and magazines.</li>
                <li>Fine art landscape photography for exhibitions and sales.</li>
                <li>Collaborations with travel agencies and tourism boards.</li>
            </ul>
        </div>

        <div class="experience-item">
            <a href="experience.php">more....</a>
        </div>

    </div>
        <!-- Achievements Section -->
    <div class="award-section">
        <h1>Achievements</h1>

        <div class="award-item">
            <div class="award-logo">
                <img src="uploads/maxresdefault.jpg" alt="Award Logo 1">
            </div>
            <div class="award-description">
                <h2>Best Wildlife Photographer of the Year</h2>
                <p>This award recognizes the exceptional skill and dedication of [Photographer's Name] in capturing the beauty of wildlife. The award was presented by the International Photography Awards in 2022.</p>
            </div>
        </div>

        <div class="award-item">
            <div class="award-logo">
                <img src="uploads/certificate.jpg" alt="Award Logo 2">
            </div>
            <div class="award-description">
                <h2>Excellence in Landscape Photography</h2>
                <p>[Photographer's Name] was honored with this award for outstanding contributions to landscape photography, highlighting their ability to convey the grandeur of nature.</p>
            </div>
        </div>
        
        <div class="award-item">
            <div class="award-description">
                <p> <a href="experience.php">more....</a></p>
            </div>
        </div>
    </div>
    <!-- Footer Section -->
    <?php include 'footer.php'; ?>

</body>
</html>
