<?php
include 'confer.php'; // Database connection

// Handle form submission for adding new images
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_image'])) {
    $photographer_name = $conn->real_escape_string($_POST['photographer_name']);
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);
    $category = $conn->real_escape_string($_POST['category']);
    
    // Handle image upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    // Insert into database
    $sql = "INSERT INTO gallery (photographer_name, title, description, category, image_path) 
            VALUES ('$photographer_name', '$title', '$description', '$category', '$target_file')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Handle deletion
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM gallery WHERE id=$id");
    header("Location: admin_gallery.php");
}

// Handle update
if (isset($_POST['update_image'])) {
    $id = intval($_POST['id']);
    $photographer_name = $conn->real_escape_string($_POST['photographer_name']);
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);
    $category = $conn->real_escape_string($_POST['category']);
    
    $conn->query("UPDATE gallery SET photographer_name='$photographer_name', title='$title', description='$description', category='$category' WHERE id=$id");
    header("Location: admin_gallery.php");
}

// Fetch all gallery items for display
$gallery_items = $conn->query("SELECT * FROM gallery");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Gallery Management</title>
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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        input[type="text"], textarea, input[type="file"], select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        img {
            max-width: 100px;
            height: auto;
            border-radius: 4px;
        }

        .actions a {
            margin-right: 10px;
            text-decoration: none;
            color: #007BFF;
        }

        .actions a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
    <h1>Admin Gallery Management</h1>
    
    <!-- Form to upload image -->
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="add_image" value="1">
        <label for="photographer_name">Photographer Name:</label>
        <input type="text" name="photographer_name" required>

        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="description">Description:</label>
        <textarea name="description" rows="4" required></textarea>

        <label for="category">Category:</label>
        <select name="category" required>
            <option value="Wildlife">Wildlife</option>
            <option value="Landscape">Landscape</option>
            <option value="Cultural">Cultural</option>
            <option value="Football">Football</option>
            <option value="Commercial">Commercial</option>
            <option value="Other">Other</option>
        </select>

        <label for="image">Upload Image:</label>
        <input type="file" name="image" accept="image/*" required>

        <input type="submit" value="Upload Image">
    </form>

    <!-- Display existing images -->
    <h2>Gallery Images</h2>
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Photographer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $gallery_items->fetch_assoc()) : ?>
                <tr>
                    <td><img src="<?php echo $row['image_path']; ?>" alt="Image"></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['photographer_name']; ?></td>
                    <td class="actions">
                        <a href="admin_gallery.php?delete=<?php echo $row['id']; ?>">Delete</a>
                        <a href="admin_gallery.php?edit=<?php echo $row['id']; ?>">Edit</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <?php
    // Edit form for a specific image
    if (isset($_GET['edit'])) {
        $id = intval($_GET['edit']);
        $edit_result = $conn->query("SELECT * FROM gallery WHERE id=$id");
        $edit_row = $edit_result->fetch_assoc();
    ?>
        <h2>Edit Image</h2>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $edit_row['id']; ?>">
            <input type="hidden" name="update_image" value="1">

            <label for="photographer_name">Photographer Name:</label>
            <input type="text" name="photographer_name" value="<?php echo $edit_row['photographer_name']; ?>" required>

            <label for="title">Title:</label>
            <input type="text" name="title" value="<?php echo $edit_row['title']; ?>" required>

            <label for="description">Description:</label>
            <textarea name="description" rows="4" required><?php echo $edit_row['description']; ?></textarea>

            <label for="category">Category:</label>
            <select name="category" required>
                <option value="Wildlife" <?php if($edit_row['category'] == 'Wildlife') echo 'selected'; ?>>Wildlife</option>
                <option value="Landscape" <?php if($edit_row['category'] == 'Landscape') echo 'selected'; ?>>Landscape</option>
                <option value="Football" <?php if($edit_row['category'] == 'Football') echo 'selected'; ?>>Football</option>
                <option value="Cultural" <?php if($edit_row['category'] == 'Cultural') echo 'selected'; ?>>Cultural</option>
                <option value="Commercial" <?php if($edit_row['category'] == 'Commercial') echo 'selected'; ?>>Commercial</option>
                <option value="Other" <?php if($edit_row['category'] == 'Other') echo 'selected'; ?>>Other</option>
            </select>

            <input type="submit" value="Update Image">
        </form>
    <?php } ?>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
