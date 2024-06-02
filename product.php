<?php 
include_once 'includes/header.php'; 
include_once 'classes/doors.class.php';

$door_id = isset($_GET['id']) ? $_GET['id'] : '';

$door = new Doors();
$door_data = $door->getDoor($door_id);

print_r($door_data);
?>

<div class="container-fluid">
  <div class="row justify-content-evenly row-cols-1 row-cols-md-2">
    <div class="col text-center">
      <img src="<?php echo $door_data[0]['image']?>" class="img-fluid" alt="">
    </div>
    <div class="col">
      <h1><?php echo $door_data[0]['name'] ?></h1>
      <p><?php echo $door_data[0]['description'] ?></p>
      <a href="#" class="btn btn-outline-dark">Свържи се с нас</a>
    </div>
  </div>
</div>

<style>
    nav{
        visibility: hidden;
    }
</style>
<?php include_once 'includes/footer.php'; ?>