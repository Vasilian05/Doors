<?php include_once "includes/header.php"; ?>

<?php
// Retrieve the selected category from the URL parameters
$category = isset($_GET['category']) ? $_GET['category'] : '';

// Generate content based on the selected category
if ($category === 'interior') {
    // Generate content for interior doors
    echo "<h2>Интериорни Врати</h2>";
    // Place your code here to fetch and display interior door items from the database or any other data source
} elseif ($category === 'exterior') {
    // Generate content for exterior doors
    echo "<h2>Exterior Doors</h2>";
    // Place your code here to fetch and display exterior door items from the database or any other data source
} else {
    // Handle invalid category or no category selected
    echo "<p>No category selected or invalid category.</p>";
}
?>


<style>
    body {
        margin-top:100px;
    }
</style>