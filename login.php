<?php include_once 'includes/header.php';?> 

<div class="content">
    <h1 class="text-center mt-5">Влез в профила си</h1>
    <form class="w-50 m-auto">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Имейл</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Парола</label>
        <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-outline-dark">Влез</button>
    </form>
    
</div>



<?php include_once 'includes/footer.php';?>