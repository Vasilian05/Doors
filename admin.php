<?php include_once "includes/header.php";
include_once "classes/products.class.php";

if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $image = $_FILES['image'];
    $door = new Product($name, $category, $description, $_FILES["image"]);

    $door->addItem();
}
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
            <option value="interior">Интериорна</option>
            <option value="exterior">Екстериорна</option>
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
      <table class="table w-75 m-auto">
  <thead>
    <tr>
      <th scope="col">Име</th>
      <th scope="col">Категория</th>
      <th scope="col">Премахни</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
    </tr>
  </tbody>
</table>S
      </section>
<?php include_once "includes/footer.php";?>