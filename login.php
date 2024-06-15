<?php include_once 'includes/header.php';?>  
<?php 
if(isset($_POST['login'])){
    include_once 'classes/users.class.php';

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $user = new User;
    $user->setLogin($email, $pass);

    $user_data = $user->checkLogin();
    if(!$user_data){
        $error = true;
    }
}
?>
<div class="content">
    <h1 class="text-center mt-5">Влез в профила си</h1>
    <form class="w-50 m-auto" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Имейл</label>
        <input type="email" name="email" class="form-control <?php echo $error ? 'is-invalid' : ''?>" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Парола</label>
        <input type="password" name="pass" class="form-control <?php echo $error ? 'is-invalid' : ''?>" id="exampleInputPassword1">
        <div class="invalid-feedback">
              Неправилен имейл или парола
        </div>
      </div>
      <button type="submit" name="login" class="btn btn-outline-dark">Влез</button>
    </form>
    
</div>



<?php include_once 'includes/footer.php';?>