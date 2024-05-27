<?php include_once "includes/header.php";?>


<form action="POST">
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Име</label>   
          <input required type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
          <label class="form-label">Описание</label>
          <input required type="text" class="form-control" name="description">
        </div>
        <div class="mb-3">
            <select required class="form-select" aria-label="Default select example">
            <option selected value=''>Category</option>
            <option value="1">Интериорна</option>
            <option value="2">Екстериорна</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Снимка</label>
            <input required type="file" class="form-control" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


<?php include_once "includes/footer.php";?>