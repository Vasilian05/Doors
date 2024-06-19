<?php 
include_once 'includes/header.php'; 
include_once 'classes/doors.class.php';

$door_id = isset($_GET['id']) ? $_GET['id'] : '';
$category = isset($_GET['category']) ? $_GET['category'] : '';

$door = new Doors();
$door_data = $door->getDoor($door_id);


?>
<div class="conent">
    <div class="container-fluid">
        <h1 class="mt-3"><?php echo $display_cat =  $category=="interior" ? "Интериорни": "Екстериорни";?> врати ArtDecorDoors</h1>
      <div class="row justify-content-evenly row-cols-1 row-cols-md-2 mt-5">
        <div class="col-lg-4 col-md-6 text-center">
          <img src="<?php echo $door_data[0]['image']?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 col-md-6">
          <h2><?php echo $door_data[0]['name'] ?></h2>
          <p><?php echo $door_data[0]['description'] ?></p>
          <a href="#" class="btn btn-outline-dark">Свържи се с нас</a>
        </div>
      </div>
    </div>

</div>

<style>

</style>
<?php include_once 'includes/footer.php'; ?>