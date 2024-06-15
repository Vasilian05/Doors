<?php include_once "includes/header.php"; 
include_once "classes/users.class.php"; 
include_once "classes/distributor.class.php"; 

$distribution = new Distributor();
$distribution = $distribution->getDistributors();
if($_SESSION['user_type'] != "admin"){
    header("location:index.php");
}
if(isset($_POST['submit'])){
    
    //Posted values
    $name = $_POST['name'];
    $company = $_POST['company'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_type = $_POST['user_type'];
    $pass = $_POST['pass'];

   
    $user = new User();
    $user->setRegisterDetails($name, $company, $address, $city, $phone, $email, $user_type);

    //if the user type is admin set a password
    if($user_type == "admin"){
        $user->setPass($pass);
    }

    if($user->AddUser() != ""){
        $errors = $user->AddUser();
    }
    
}

if(isset($_POST['remove_distributor'])){
    $user_id = $_POST['remove_distributor_id'];
    $deleted_user = new Distributor();
    $deleted_user->deleteDistributor($user_id);
}

?>
<div class="content">
    <h1 class="text-center mt-5">Добавяне на партнюри</h1>
    
    <form method="POST" class="w-50 m-auto">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Име</label>
        <input required type="text" name="name" class="form-control <?php echo $errors['name'] != '' ?  'is-invalid' :  "" ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div class="invalid-feedback">
              <?php echo $errors['name']?>
        </div>
      </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Фирма</label>
        <input required type="text" name="company" class="form-control <?php echo $errors['company'] != '' ?  'is-invalid' :  "" ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div class="invalid-feedback">
              <?php echo $errors['company']?>
        </div>
      </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Град</label>
        <input required type="text" name="city" class="form-control <?php echo $errors['city'] != '' ?  'is-invalid' :  "" ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div class="invalid-feedback">
              <?php echo $errors['city']?>
        </div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Адрес</label>
        <input required type="text" name="address" class="form-control <?php echo $errors['address'] != '' ?  'is-invalid' :  "" ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div class="invalid-feedback">
              <?php echo $errors['address']?>
        </div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Имейл</label>
        <input required type="email" name="email" class="form-control <?php echo $errors['email'] != '' ?  'is-invalid' :  "" ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div class="invalid-feedback">
              <?php echo $errors['email']?>
        </div>
      </div>
      <div>
        <label for="exampleInputEmail1" class="form-label">Телефон</label>
        <input type="tel" id="phone" name="phone" class="form-control" placeholder="00-000-0000" pattern="[0-9]{2}-[0-9]{3}-[0-9]{4}" required>
        <small class="mb-3">формат: 00-000-0000</small><br><br>
      </div>
      <label class="form-label">Категория</label>
                <select required name="user_type" class="form-select mb-3" aria-label="Default select example">
                <option selected value=''>Вид акаунт</option>
                <option value="distributor">Дистрибутор</option>
                <option value="admin">Админ</option>
                </select>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Парола</label>
            <input  type="password" name="pass" class="form-control <?php //echo $errors['email'] != '' ?  'is-invalid' :  "" ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small class="mb-3">Задължително само за админ акаунти</small><br><br>
        <div class="invalid-feedback">
              <?php echo $errors['email']?>
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-outline-dark">Създай акаунт</button>
    </form>
    
    <?php 
    if(count($distribution) > 0){ ?>
    
        <h3 class="m-5 text-center">Дистрибутори</h3>
        <table class="table table-striped w-75 m-auto">
          <thead>
            <tr>
              <th scope="col">Фирма</th>
              <th scope="col">Град</th>
              <th scope="col">Адрес</th>
              <th scope="col">Телефон</th>
              <th scope="col">Имейл</th>
              <th scope="col">Премахни</th>
            </tr>
          </thead>
          <tbody>
            <?php for($i = 0; $i < count($distribution); $i++) {
                ?>
            <tr>
              <th scope="row"><?php echo $distribution[$i]['company']?></th>
              <td><?php echo $distribution[$i]['city']?></td>
              <td><?php echo $distribution[$i]['address']?></td>
              <td><?php echo $distribution[$i]['phone']?></td>
              <td><?php echo $distribution[$i]['email']?></td>
              <td>
                <form method="POST">
                    <input type="hidden" name="remove_distributor_id" value="<?php echo $distribution[$i]['user_id']?>">
                    <button type="submit" name="remove_distributor" class="btn btn-outline-dark">Премахни</button>
                </form>
                
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
    
</div>
<?php }
?>
<?php include_once "includes/footer.php"; ?> 