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
                            <a href="product.php?category=<?php echo $category; ?>&id=<?php echo $door['door_id']; ?>" class="btn btn-outline-dark">Виж повече</a>
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

Marvel
Captain America: The First Avenger
Iron Man 
Iron Man 2 
The Incredible Hulk 
Thor  - six months before Avengers
The Avengers 
Iron Man 3  - six months after The Avengers
Thor: The Dark World - after Avengers but before Ultron
Captain America: The Winter Soldier - after Avengers but before Ultron
Guardians of the Galaxy 
Guardians of the Galaxy 2 
Avengers: Age of Ultron 
Ant-Man 
Captain America: Civil War  - after Ultron and before Infinity War
Black Widow (2016, excluding post-credits scene) - right after Civil War
Spider-Man: Homecoming - after Civil War and before Infinity War
Doctor Strange 
Black Panther 
Thor: Ragnarok - after Ultron and before Infinity War
Avengers: Infinity War 
Ant-Man and the Wasp  - takes place at the same time as Infinity War since the post-credit scene takes place during the snap.
Avengers: Endgame 
Shang-Chi and the Legend of the Ten Rings 
Spider-Man: Far From Home 
Eternals 
Spider-Man: No Way Home 
Dr. Strange in the Multiverse of Madness 
Thor: Love and Thunder 
Black Panther: Wakanda Forever 
Ant-Man: Quantumania 
Guardians of the Galaxy: Vol 3 

<?php include_once "includes/footer.php";?>