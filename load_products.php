<?php
include_once "classes/doors.class.php";
$doors = new Doors();

// Retrieve filters from POST data
$selectedPrices = isset($_POST['prices']) ? $_POST['prices'] : [];

$filteredProducts = $doors->getFilteredProducts($selectedPrices);

?>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
    <?php foreach ($filteredProducts as $product): ?>
        <div class="col mt-5">
            <div class="card m-auto w-75 border-0">
                <img src="<?php echo $product['image']; ?>" class="card-img-top img-fluid w-50 m-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['name']; ?></h5>
                    <p>Цена: <?php echo $product['price']; ?>лв</p>
                    <p><?php echo $product['short_description']; ?></p>
                    <a href="product.php?category=<?php echo $category; ?>&id=<?php echo isset($product['id']); ?>" class="btn btn-outline-dark">Виж повече</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

