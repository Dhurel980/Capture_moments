<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience - Captured Moments</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

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
            border-radius: 50%;
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

        /* Footer Styles
        footer {
            background-color: #34495e;
            color: #ecf0f1;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        } */
    </style>
</head>

<body>

    <!-- Header Section -->
    <?php include "header.php"; ?>

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
            <h3>Commercial Photography</h3>
            <span>2017 - Present</span>
            <p>Our team has worked with top brands to create impactful images for advertising campaigns, product launches, and more.</p>
            <ul>
                <li>Product photography for e-commerce and marketing materials.</li>
                <li>Corporate event coverage, including conferences and seminars.</li>
                <li>Collaborations with marketing agencies for brand shoots.</li>
            </ul>
        </div>

        <div class="experience-item">
            <h3>Portrait Photography</h3>
            <span>2016 - Present</span>
            <p>We excel at capturing the essence of individuals and families, providing high-quality portrait sessions in studio and on-location.</p>
            <ul>
                <li>Professional headshots for corporate profiles and LinkedIn.</li>
                <li>Family and newborn photography with a personal touch.</li>
                <li>Creative portrait sessions tailored to individual preferences.</li>
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
            <div class="award-logo">
                <img src="uploads/award.jpg" alt="Award Logo 3">
            </div>
            <div class="award-description">
                <h2>Top 10 Photographers of the Decade</h2>
                <p>This prestigious accolade was awarded to [Photographer's Name] for consistently delivering top-quality photography over the past decade, showcasing their influence on the industry.</p>
            </div>
        </div>
        
        <div class="award-item">
            <div class="award-description">
                <p>more....</p>
            </div>
        </div>
    </div>



    <!-- Footer Section -->
    <?php include "footer.php"; ?>

</body>

</html>
