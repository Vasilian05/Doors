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
    <label for="exampleInputEmail1" class="form-label">Телефон</label>
    <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <label class="form-label">Категория</label>
            <select required name="category" class="form-select mb-3" aria-label="Default select example">
            <option selected value=''>Вид акаунт</option>
            <option value="interior">Дистрибутор</option>
            <option value="exterior">Админ</option>
            </select>
  <button type="submit" class="btn btn-outline-dark">Регистрирай се</button>
</form>

<?php include_once "includes/footer.php"; ?> 