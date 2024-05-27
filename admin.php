<?php include_once "includes/header.php";
include_once "classes/products.class.php";

if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $image = $_POST['image'];
    $door = new Product($name, $category, $description);

    echo $door->uploadImage($image);

}
?>
<form method="POST" class="m-auto w-50 mt-5">
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
            <option value="1">Интериорна</option>
            <option value="2">Екстериорна</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Снимка</label>
            <input required type="file" class="form-control" name="image">
        </div>

        <button type="submit" name="btn" class="btn btn-outline-dark">Качи продукт</button>
      </form>


<?php include_once "includes/footer.php";?>