<?php include_once "includes/header.php";
include_once "classes/products.class.php";
include_once "classes/doors.class.php";


//make sure only admins can access the page
if($_SESSION['user_type'] != "admin"){
    header("location:index.php");
}

if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $image = $_FILES['image'];
    $short_description = $_POST['short_description'];
    $item = new Product($name, $category, $description, $_FILES["image"], $short_description);

    $item->addItem();
}

//deleting doors from database
if(isset($_POST['remove'])){
    $product_id = $_POST['product'];
    $delete_product = new Doors();
    $delete_product->deleteDoor($product_id);
  
}


//edit item 
if(isset($_POST['edit'])){
 header('location:update.php');
 $_SESSION['Door_id'] = $_POST['product_id'];
}
    //getting all items from database
    $doors = new Doors();
    $interior = $doors->getProducts(1);
    $exterior = $doors->getProducts(2);
?>
<div class="content">

    <form method="POST" class="form m-auto w-50 mt-5" enctype="multipart/form-data">
        <h1 class="text-center">Добави продукт</h1>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Име</label>   
              <input required type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
              <label class="form-label">Описание</label>
              <textarea required type="text" class="form-control"  name="description"></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">Кратко oписание</label>
              <textarea required type="text" id="tiny" class="form-control" name="short_description"></textarea>
            </div>
            <div class="mb-3">
            <label class="form-label">Категория</label>
                <select required name="category" class="form-select" aria-label="Default select example">
                <option selected value=''>Категория</option>
                <option value="interior">Интериорни</option>
                <option value="exterior">Екстериорни</option>
                <option value="facing">Облицовки</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Снимка</label>
                <input required type="file" class="form-control" name="image">
            </div>
    
            <button type="submit" name="btn" class="btn btn-outline-dark">Качи продукт</button>
          </form>
    
          <section class="dashboard mt-5">
            <h3 class="text-center">Инвентар</h3>
            <?php if(count($interior) > 0) { ?>
            <h5 class="text-center mt-5">Интериорни</h5>
          <table class="table w-75 m-auto">
      <thead>
        <tr>
          <th scope="col">Име</th>
          <th scope="col">Снимка</th>
          <th scope="col">Категория</th>
          <th scope="col">Премахни</th>
          <th scope="col">Редактирай</th>
        </tr>
      </thead>
      <tbody>
        <?php for($i = 0; $i < count($interior); $i++) {?>
        <tr>
          <th scope="row"><?php echo $interior[$i]['name']?></th>
          <td><img src="<?php echo $interior[$i]["image"]?>" class="w-25 image-fluid" alt=""></td>
          <td>Интериорна</td>
          <td>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" method="POST">
                <input type="hidden" value="<?php echo $interior[$i]['door_id']?>"  name="product"></input>
                <button name="remove" class="btn btn-outline-dark">премахни</button>
            </form>
          </td>
          <td>
            <!-- Add an edit button here -->
            <form action="" method="POST">
                <input type="hidden" value="<?php echo $interior[$i]['door_id']?>" name="product_id">
                <button name="edit" class="btn btn-outline-dark">редактирай</button>
            </form>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php } ?>
    <?php if(count($exterior) > 0) { ?>
            <h5 class="text-center mt-5">Входни</h5>
          <table class="table w-75 m-auto">
      <thead>
        <tr>
          <th scope="col">Име</th>
          <th scope="col">Снимка</th>
          <th scope="col">Категория</th>
          <th scope="col">Премахни</th>
          <th scope="col">Редактирай</th>
        </tr>
      </thead>
      <tbody>
        <?php for($i = 0; $i < count($exterior); $i++) {?>
        <tr>
          <th scope="row"><?php echo $exterior[$i]['name']?></th>
          <td><img src="<?php echo $exterior[$i]["image"]?>" class="w-25 image-fluid" alt=""></td>
          <td>Входна</td>
          <td>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="hidden" value="<?php echo $exterior[$i]['door_id']?>"  name="product"></input>
                <button name="remove" class="btn btn-outline-dark">премахни</button>
            </form>
          </td>
          <td>
            <!-- Add an edit button here -->
            <form action="" method="POST">
                <input type="hidden" value="<?php echo $exterior[$i]['door_id']?>" name="product_id">
                <button name="edit" class="btn btn-outline-dark">редактирай</button>
            </form>
          </td>
        </tr>
        <?php }?>
      </tbody>
    </table>
    <?php }?>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
      </section>
<?php include_once "includes/footer.php";?>