<?php include_once 'includes/header.php'; 
include_once 'classes/createProduct.class.php'; 
?>


<div class="container-fluid" style="min-height: 100vh; margin-top: 15vh;">

    <form method='POST' class="m-auto col-6">
        <div class="mb-3">
            <select required class="form-select" aria-label="Default select example">
            <option selected value=''>Category</option>
            <option value="1">Interior</option>
            <option value="2">Exterior</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input required type="text" class="form-control">
        </div>
      <div class="mb-3">
        <label class="form-label">description</label>
        <input required type="text" class="form-control">
      </div>
      <div class="input-group mb-3">
      <input type="file" class="form-control">
      <label required class="input-group-text" for="inputGroupFile02">Upload</label>
    </div>
      <button type="submit" class="btn btn-outline-dark">Submit</button>
    </form>
</div>









<?php
include_once 'includes/footer.php'; ?>