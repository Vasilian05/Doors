<?php include_once "includes/header.php";
include_once "classes/products.class.php";
include_once "classes/doors.class.php";

if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $image = $_FILES['image'];
    $item = new Product($name, $category, $description, $_FILES["image"]);

    $item->addItem();
}

    $doors = new Doors();
    $interior = $doors->getProducts(1);
    $exterior = $doors->getProducts(2);
    $facing = $doors->getFacing();
?>
<form method="POST" class="form m-auto w-50 mt-5" enctype="multipart/form-data">
    <h1 class="text-center">Добави продукт</h1>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Име</label>   
          <input required type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
          <label class="form-label">Описание</label>
          <input required type="text" class="form-control" name="description">
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
      <th scope="col">Категория</th>
      <th scope="col">Премахни</th>
    </tr>
  </thead>
  <tbody>
    <?php for($i = 0; $i < count($interior); $i++) {?>
    <tr>
      <th scope="row"><?php echo $interior[$i]['name']?></th>
      <td>Интериорна</td>
      <td>
        <form method="POST">
            <button name="remove" class="btn btn-outline-dark">премахни</button>
        </form>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>
<?php if(count($exterior) > 0) { ?>
        <h5 class="text-center mt-5">Екстериорни</h5>
      <table class="table w-75 m-auto">
  <thead>
    <tr>
      <th scope="col">Име</th>
      <th scope="col">Категория</th>
      <th scope="col">Премахни</th>
    </tr>
  </thead>
  <tbody>
    <?php for($i = 0; $i < count($exterior); $i++) {?>
    <tr>
      <th scope="row"><?php echo $exterior[$i]['name']?></th>
      <td>Екстериорна</td>
      <td>
        <form method="POST">
            <button name="remove" class="btn btn-outline-dark">премахни</button>
        </form>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>
<?php if(count($facing) > 0) { ?>
        <h5 class="text-center mt-5">Облицовки</h5>
      <table class="table w-75 m-auto">
  <thead>
    <tr>
      <th scope="col">Име</th>
      <th scope="col">Категория</th>
      <th scope="col">Премахни</th>
    </tr>
  </thead>
  <tbody>
    <?php for($i = 0; $i < count($facing); $i++) {?>
    <tr>
      <th scope="row"><?php echo $facing[$i]['name']?></th>
      <td>Облицовка</td>
      <td>
        <form method="POST">
            <button name="remove" class="btn btn-outline-dark">премахни</button>
        </form>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>

      </section>
<?php include_once "includes/footer.php";?>