<?php include_once "includes/header.php"; 
include_once "classes/products.class.php";
include_once "classes/doors.class.php";
include_once "classes/users.class.php"; 
?>
<?php
if($_SESSION['user_type'] != "admin"){
    header("location:index.php");
}

// get the door to be edited
$door_id = 23;
$doors = new Doors();
$edited_product = $doors->getDoor($door_id); // change later on to id from session (coming from admin page)

if(isset($_POST['update'])){
    $new_name = $_POST['name'];
    $new_price = $_POST['price'];
    $new_description = $_POST['description'];
    $new_short_description = $_POST['short_description'];
    $new_category = $_POST['category'];

    $products = new Product( $new_name, $new_category,  $new_description, $edited_product[0]['image'],  $new_short_description);
    $products->editDoor($door_id, $new_price);
}

?>
<div class="content">

    <form method="POST" class="form m-auto w-50 mt-5" enctype="multipart/form-data">
        <h1 class="text-center">Редактирай продукт</h1>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Име</label>   
              <input required type="text" class="form-control" name="name" value="<?php echo $edited_product[0]['name']; ?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Цена</label>   
              <input required type="text" class="form-control" name="price" value="<?php echo $edited_product[0]['price']; ?>">
            </div>
            <div class="mb-3">
              <label class="form-label">Описание</label>
              <textarea required type="text" class="form-control"  name="description"><?php echo $edited_product[0]['description']; ?></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">Кратко oписание</label>
              <textarea required type="text" id="tiny" class="form-control" name="short_description"><?php echo $edited_product[0]['short_description']; ?></textarea>
            </div>
            <div class="mb-3">
            <label class="form-label">Категория</label>
                <select required name="category" class="form-select" aria-label="Default select example">
                <option value=''>Категория</option>
                <option selected value="interior">Интериорни</option>
                <option value="exterior">Екстериорни</option>
                <option value="facing">Облицовки</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Снимка (не променяй)</label>
                <input type="file" class="form-control" name="image" > 
            </div>
    
            <button type="submit" name="update" class="btn btn-outline-dark">Запази</button>
          </form>





<?php include_once "includes/footer.php"; ?> 