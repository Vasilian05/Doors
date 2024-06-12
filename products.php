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
} else if ($category == "facing"){
    // Handle invalid category or no category selected
    $data = $doors->getFacing(3);
    echo "<p>No category selected or invalid category.</p>";
}

?>

<section class="products mt-5">
    <div class="container-fluid text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            <?php foreach($data as $door): ?>
                <div class="col mt-5">
                    <div class="card m-auto w-75 border-0">
                        <img src="<?php echo $door['image']; ?>" class="card-img-top img-fluid w-50 m-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $door['name'] ?></h5>
                            <p>Моделът се предлага в следните цветове: Орех
                                Размери: 620 <br>
                                Комплекта включва крило, каса, первази, уплътнение, брава, панти
                                В наличност.</p>
                            <a href="product.php?category=<?php echo $category; ?>&id=<?php echo isset($door['door_id']) ? $door["door_id"] :  $door["facing_id"]; ?>" class="btn btn-outline-dark">Виж повече</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php 
if(isset($_GET['door_id'])){
    echo "it's set";
}
?>
<?php include_once "includes/footer.php";?>