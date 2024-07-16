<?php
// Array of image names without extension
$images = ["image1", "image2", "image3"];

// Function to generate image links based on selected type
function generateImageLinks($images, $type) {
    $imageLinks = [];
    foreach ($images as $image) {
        $imageLinks[] = $image . '.' . $type;
    }
    return $imageLinks;
}

// Get the selected image type from the user input
$selectedType = isset($_GET['type']) ? $_GET['type'] : 'jpg';

// Validate the selected type
if (!in_array($selectedType, ['jpg', 'webp'])) {
    $selectedType = 'jpg'; // Default to 'jpg' if invalid type is provided
}

// Generate image links
$imageLinks = generateImageLinks($images, $selectedType);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Image Type</title>
</head>
<body>
    <h1>Select Image Type</h1>
    <form method="get">
        <label for="type">Choose an image type:</label>
        <select name="type" id="type">
            <option value="jpg" <?php echo $selectedType == 'jpg' ? 'selected' : ''; ?>>JPG</option>
            <option value="webp" <?php echo $selectedType == 'webp' ? 'selected' : ''; ?>>WEBP</option>
        </select>
        <button type="submit">Submit</button>
    </form>

    <h2>Image Links</h2>
    <ul>
        <?php foreach ($imageLinks as $link): ?>
            <li><a href="<?php echo htmlspecialchars($link); ?>"><?php echo htmlspecialchars($link); ?></a></li>
        <?php endforeach; ?>
    </ul>

    <h1>This is heding  </h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam temporibus eum ex laudantium dolorum, tempora, magnam voluptate eligendi beatae atque obcaecati velit perspiciatis fuga recusandae possimus dicta quidem, veniam consectetur animi dignissimos qui?</p>
</body>
</html>
