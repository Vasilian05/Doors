<?php 
include_once 'includes/header.php'; 
include_once 'classes/doors.class.php';



$door_id = isset($_GET['id']) ? $_GET['id'] : '';
$category = isset($_GET['category']) ? $_GET['category'] : '';

$door = new Doors();
$door_data = $door->getDoor($door_id);
$page_title =  $door_data[0]['page_title'];
$meta_description =  $door_data[0]['meta_description'];
?>
<div class="conent">
    <div class="container-fluid">
        <h1 class="mt-3"><?php echo $display_cat =  $category=="interior" ? "Интериорни": "Екстериорни";?> врати ArtDecorDoors</h1>
      <div class="row justify-content-evenly row-cols-1 row-cols-md-2 mt-5">
        <div class="col-lg-4 col-md-6 text-center">
          <img src="<?php echo $door_data[0]['image']?>" class="img-fluid" alt="Врати, Интериорни врати, външни врати, врати за баня, двулицеви врати, Врати София">
        </div>
        <div class="col-lg-8 col-md-6">
          <h2><?php echo $door_data[0]['name'] ?></h2>
          <h4><?php echo $door_data[0]['price']?>лв</h4> 
          <p><?php echo nl2br($door_data[0]['description']);?></p>
          
          <a href="contacts.php" class="btn btn-outline-dark">Свържи се с нас</a>
        </div>
      </div>
    </div>

</div>

<style>

</style>
<?php include_once 'includes/footer.php'; ?>