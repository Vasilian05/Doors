<?php
include_once "classes/doors.class.php";

// Fetch the selected filters from the AJAX request
$filters = isset($_POST['filters']) ? $_POST['filters'] : [];

var_dump($filters);
$doors = new Doors();

// If filters are applied, pass them to the function
if (!empty($filters)) {
    $data = $doors->getFilteredProducts($filters);
} else {
    // If no filters are selected, fetch all products
    $data = $doors->getProducts(1);  // Assuming this method fetches all products without filters
}?>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
    <?php foreach ($data as $door): ?>
        <div class="col mt-5">
            <div class="card m-auto w-75 border-0">
                <img src="<?php echo $door['image']; ?>" class="card-img-top img-fluid w-50 m-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $door['name']; ?></h5>
                    <p>Цена: <?php echo $door['price']; ?>лв</p>
                    <p><?php echo $door['short_description']; ?></p>
                    <a href="product.php?category=<?php echo $category; ?>&id=<?php echo isset($door['id']); ?>" class="btn btn-outline-dark">Виж повече</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
