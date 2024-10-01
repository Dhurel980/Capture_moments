<?php
// Team members data
$teamMembers = [
    [
        'id' => 1,
        'name' => "Pritam Dhurel",
        'role' => "Senior Photographer",
        'avatar' => "uploads/me.jpg",
        'currentWork' => "Landscape Photography",
        'futureWork' => "Expanding into Landscape vediography",
        'exampleImage' => "uploads/img1.1.jpeg",
        'experience' => "10 years in professional photography",
        'facebook' => "https://www.facebook.com/dhurel.pritam/",
        'github' => "https://github.com/Dhurel980/",        
    ],

    [
        'id' => 2,
        'name' => "Kopil Somai",
        'role' => "Nature and Wildlife Photographer",
        'avatar' => "uploads/kopildai.jpg",
        'currentWork' => "National Geographic Assignments",
        'futureWork' => "Documentary Film Making",
        'exampleImage' => "uploads/animal.1.jpeg",
        'experience' => "12 years in Wildlife photography",
        'facebook' => "https://www.facebook.com/kopil.somai",
        'github' => "#",    
    ],

    [
        'id' => 3,
        'name' => "Rohit Reshmi",
        'role' => "Football Photography",
        'avatar' => "uploads/rohitdai.jpg",
        'currentWork' => "Studio Portraits and Headshots",
        'futureWork' => "Exploring Fine Art Photography",
        'exampleImage' => "uploads/football.2.jpg",
        'experience' => "8 years specializing in Games photography(Football)",
        'facebook' => "https://www.facebook.com/profile.php?id=100009373132646",
        'github' => "#",     
    ],

    [
        'id' => 4,
        'name' => "Hem kaucha magar",
        'role' => "Culture Photography",
        'avatar' => "uploads/hemdai.jpg",
        'currentWork' => "Nepal ministry of culture",
        'futureWork' => "Documentary Film Making on nepal's culture",
        'exampleImage' => "uploads/cultural.3.jpeg",
        'experience' => "12 years in Cultural photography",
        'facebook' => "https://www.facebook.com/xinchanmgr",
        'github' => "#",    
    ],

    [
        'id' => 5,
        'name' => "Nishan Dhurel",
        'role' => "Commercial Photographer",
        'avatar' => "#",
        'currentWork' => "Red bull advertisement",
        'futureWork' => "animation advertisement",
        'exampleImage' => "uploads/.jpg",
        'experience' => "12 years in commercial photography",
        'facebook' => "#",
        'github' => "#",    
    ],

    [
        'id' => 6,
        'name' => "shyam rana",
        'role' => "Nature and Wildlife Photographer",
        'avatar' => "/path/to/charlie-avatar.jpg",
        'currentWork' => "National Geographic Assignments",
        'futureWork' => "Documentary Film Making",
        'exampleImage' => "/path/to/charlie-example.jpg",
        'experience' => "12 years in nature photography",
        'facebook' => "#",
        'github' => "#",    
    ],

    [
        'id' => 7,
        'name' => "Preson gurung",
        'role' => "Nature and Wildlife Photographer",
        'avatar' => "/path/to/charlie-avatar.jpg",
        'currentWork' => "National Geographic Assignments",
        'futureWork' => "Documentary Film Making",
        'exampleImage' => "/path/to/charlie-example.jpg",
        'experience' => "12 years in nature photography",
        'facebook' => "#",
        'github' => "#",    
    ],
    
    [
        'id' => 8,
        'name' => "Sisinta Chetri",
        'role' => "junior Photographer",
        'avatar' => "#",
        'currentWork' => "Landscape Photography",
        'futureWork' => "Expanding into Landscape vediography",
        'exampleImage' => "uploads/img1.1.jpeg",
        'experience' => "5 years in professional photography",
        'facebook' => "#",
        'github' => "#",        
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captured Moments - Our Team</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 20px;
            margin: 10px 0;
        }

        .card-text {
            color: #777;
            font-size: 14px;
        }

        .social-icons {
            margin-top: 10px;
        }

        .social-icons img {
            width: 24px;
            height: 24px;
            margin-right: 8px;
            cursor: pointer;
        }

        /* Modal Styles */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
            width: 90%;
            max-width: 550px;
            position: relative;
            margin: 20px 0;
        }

        .modal-content h2 {
            font-size: 24px;
            /* margin-bottom: 10px; */
        }

        .modal-content img {
            width: 100%;
            /* height: 470px; */
            /* margin-bottom: 20px; */
            border-radius: 8px;
            /* object-fit: scale-down; */
        }

        .modal-content p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .modal-social-icons {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .modal-social-icons img {
            width: 20px;
            height: 20px;
            margin-right: 8px;
            vertical-align: middle;

        }

        .modal-close {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
    <h1>Our Team</h1>
    <div class="grid">
        <?php foreach ($teamMembers as $member): ?>
            <div class="card" onclick="openModal(<?= $member['id'] ?>)">
                <img src="<?= $member['avatar'] ?>" alt="<?= $member['name'] ?>">
                <div class="card-body">
                    <h2 class="card-title"><?= $member['name'] ?></h2>
                    <p class="card-text"><?= $member['role'] ?></p>
                    <p class="card-text">Current work: <?= $member['currentWork'] ?></p>
                    <div class="social-icons">
                        <a href="<?= $member['facebook'] ?>"><img src="uploads/th.jpg" alt="Facebook"></a>
                        <a href="<?= $member['github'] ?>"><img src="uploads/git.jpg" alt="GitHub"></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal Structure -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="modal-close" onclick="closeModal()">&times;</span>
        <div id="modalContent"></div>
    </div>
</div>

<script>
    // Open modal function
    function openModal(memberId) {
        const members = <?= json_encode($teamMembers) ?>;
        const member = members.find(m => m.id === memberId);
        const modalContent = `
            <h2>${member.name}</h2>
            <p>${member.role}</p>
            <img src="${member.exampleImage}" alt="Work example">
            <p><strong>Current Work:</strong> ${member.currentWork}</p>
            <p><strong>Future Work:</strong> ${member.futureWork}</p>
            <p><strong>Experience:</strong> ${member.experience}</p>
            <div class="modal-social-icons">
                <a href="${member.facebook}" class="text-blue-500 underline"><img src="uploads/th.jpg" alt="Facebook"> </a>
                <a href="${member.github}" class="text-blue-500 underline"><img src="uploads/git.jpg" alt="Facebook"></a>
            </div>
        `;
        document.getElementById('modalContent').innerHTML = modalContent;
        document.getElementById('modal').classList.add('active');
    }

    // Close modal function
    function closeModal() {
        document.getElementById('modal').classList.remove('active');
    }
</script>
<?php include 'footer.php'; ?>
</body>
</html>

