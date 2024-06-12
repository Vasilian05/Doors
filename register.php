<?php include_once "includes/header.php"; ?>

<h1 class="text-center mt-5">Създай Акаунт</h1>

<form method="POST" class="w-50 m-auto">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Име</label>
    <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Фирма</label>
    <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Град</label>
    <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Адрес</label>
    <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Имейл</label>
    <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Парола</label>
    <input required type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input required type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label-dark" for="exampleCheck1">Приемам условията за поверителност</label>
  </div>
  <button type="submit" class="btn btn-outline-dark">Регистрирай се</button>
</form>

<?php include_once "includes/footer.php"; ?> 