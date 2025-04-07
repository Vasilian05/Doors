<?php
include_once "classes/doors.class.php";

// Retrieve filters from POST data
$selectedPrices = isset($_POST['prices']) ? $_POST['prices'] : [];
$selectedBrands = isset($_POST['brands']) ? $_POST['brands'] : [];


$doors = new Doors();

// If filters are applied, pass them to the function
if (!empty($selectedPrices) || !empty($selectedBrands)) {
    $data = $doors->getFilteredProducts($selectedPrices, $selectedBrands);
    
} else {
    // If no filters are selected, fetch all products
    
    $data = $doors->getProducts(1); 
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
                    <a href="product.php?category=<?php echo $category; ?>&id=<?php echo $door['door_id']; ?>" class="btn btn-outline-dark">Виж повече</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
