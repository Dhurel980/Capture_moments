<?php
include 'confer.php'; // Database connection

$search_category = $_GET['category'] ?? '';
$search_photographer = $_GET['photographer_name'] ?? '';

$sql = "SELECT * FROM gallery WHERE 1=1";
if ($search_category) {
    $sql .= " AND category='$search_category'";
}
if ($search_photographer) {
    $sql .= " AND photographer_name LIKE '%$search_photographer%'";
}
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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

        .search-form {
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .search-form label {
            font-weight: bold;
        }

        .search-form input, .search-form select {
            padding: 10px;
            width: calc(50% - 10px);
            margin-right: 10px;
        }

        .search-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
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

    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
    <h1>Image Gallery</h1>

    <!-- Search Form -->
    <form class="search-form" action="gallery.php" method="GET">
        <label for="category">Search by Category:</label>
        <select name="category">
            <option value="">All</option>
            <option value="Wildlife" <?php if($search_category == 'Wildlife') echo 'selected'; ?>>Wildlife</option>
            <option value="Landscape" <?php if($search_category == 'Landscape') echo 'selected'; ?>>Landscape</option>
            <option value="Cultural" <?php if($search_category == 'Cultural') echo 'selected'; ?>>Cultural</option>
            <option value="Football" <?php if($search_category == 'Football') echo 'selected'; ?>>Football</option>
            <option value="Commercial" <?php if($search_category == 'Commercial') echo 'selected'; ?>>Commercial</option>
            <option value="Other" <?php if($search_category == 'Other') echo 'selected'; ?>>Other</option>
        </select>

        <label for="photographer_name">Photographer Name:</label>
        <input type="text" name="photographer_name" value="<?php echo $search_photographer; ?>">

        <input type="submit" value="Search">
    </form>

    <!-- Display Images -->
    <div class="grid">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <div class="card">
                <img src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['title']; ?>">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $row['title']; ?></h3>
                    <p class="card-text"><?php echo $row['description']; ?></p>
                    <p class="card-text">Category: <?php echo $row['category']; ?></p>
                    <p class="card-text">Photographer: <?php echo $row['photographer_name']; ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
