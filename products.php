<?php include_once "classes/doors.class.php"; ?>


<?php

$doors = new Doors();
// Retrieve the selected category from the URL parameters
$category = isset($_GET['category']) ? $_GET['category'] : '';
//

// Generate content based on the selected category
if ($category === 'interior') {
    // Generate content for interior doors
    $page_title = "Интериорни врати – Стил и Качество за Вашия Дом";
    $meta_description = "Разгледайте богатата ни селекция от интериорни врати, проектирани за съвременни интериори. Намерете перфектното съчетание от модерен дизайн, функционалност и издръжливост за вашия дом.";
    echo "<h2>Интериорни Врати</h2>";
    $data = $doors->getProducts(1);
    // Place your code here to fetch and display interior door items from the database or any other data source
} else if ($category === 'exterior') {
    // Generate content for exterior doors
    $page_title = "Входни врати – Стил и Качество за Вашия Дом";
    $meta_description = "Разгледайте богатата ни селекция от Входни врати, проектирани за съвременни интериори. Намерете перфектното съчетание от модерен дизайн, функционалност и издръжливост за вашия дом.";
    echo "<h2>Входни Врати</h2>";
    $data = $doors->getProducts(2);
    // Place your code here to fetch and display exterior door items from the database or any other data source
}
include_once "includes/header.php";
?>
<div class'container-fluid">
     <div class="row">
        <!-- Left Column: Accordion -->
        <div class="col-md-2 mt-5">
            <div class="accordion accordion-flush mt-5">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Filter by price
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Filter by brand
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Filter by colour
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Products -->
        <div class="col-md-10">
            <section class="products mt-5">

                <!-- Hide Filters Button -->
                <div class="d-flex justify-content-end mt-3">
                    <button type="button" class="btn btn-outline-dark hide me-3">Hide filters <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
                    </svg></button>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                    <?php foreach($data as $door): ?>
                        <div class="col mt-5">
                            <div class="card m-auto w-75 border-0">
                                <img src="<?php echo $door['image']; ?>" class="card-img-top img-fluid w-50 m-auto" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $door['name'] ?></h5>
                                    <p>Цена: <?php echo  $door['price']?>лв</p>
                                    <p><?php echo $door['short_description']?></p>
                                    <a href="product.php?category=<?php echo $category; ?>&id=<?php echo isset($door['door_id']) ? $door["door_id"] :  $door["facing_id"]; ?>" class="btn btn-outline-dark">Виж повече</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </div>
</div>
<script>
    

document.addEventListener("DOMContentLoaded", function () {
    const hideButton = document.querySelector(".hide");
    const filtersSection = document.querySelector(".col-md-2"); // The filter column
    const productsSection = document.querySelector(".col-md-10"); // The product column

    hideButton.addEventListener("click", function () {
    if (filtersSection.style.display === "none") {
        filtersSection.style.display = "block";
        productsSection.classList.remove("col-md-12");
        productsSection.classList.add("col-md-10");
        hideButton.innerHTML = `Hide filters 
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
            </svg>`;
    } else {
        filtersSection.style.display = "none";
        productsSection.classList.remove("col-md-10");
        productsSection.classList.add("col-md-12");
        hideButton.innerHTML = `Show filters 
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
            </svg>`;
    }
});

});




</script>
<style>
    .hide:hover svg {
    fill: white; /* Change the icon color to white on hover */ 
</style>
<?php 
if(isset($_GET['door_id'])){
    echo "it's set";
}
?>
<?php include_once "includes/footer.php";?>