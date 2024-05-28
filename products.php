<?php include_once "includes/header.php"; ?>
<?php include_once "classes/doors.class.php"; ?>

<?php

$doors = new Doors();
// Retrieve the selected category from the URL parameters
$category = isset($_GET['category']) ? $_GET['category'] : '';
//
// Generate content based on the selected category
if ($category === 'interior') {
    // Generate content for interior doors
    echo "<h2>Интериорни Врати</h2>";
    $data = $doors->getProducts(1);
    // Place your code here to fetch and display interior door items from the database or any other data source
} else if ($category === 'exterior') {
    // Generate content for exterior doors
    echo "<h2>Exterior Doors</h2>";
    $data = $doors->getProducts(2);
    // Place your code here to fetch and display exterior door items from the database or any other data source
} else {
    // Handle invalid category or no category selected
    echo "<p>No category selected or invalid category.</p>";
}
?>

<section class="products mt-5">
<div class="container-fluid text-center">
    <div class="row">
        <?php foreach($data as $door): ?>
            <div class="col-md-3 mt-3"> <!-- Adjust col-md-* as needed -->
                <div class="card m-auto w-50">
                    <img src="<?php echo $door['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $door['name'] ?></h5>
                        <a href="#" class="btn btn-outline-dark">Виж повече</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

    
    </section>


<style>
    body {
        margin-top:100px;
    }
    
</style>

<?php include_once "includes/footer.php";?>