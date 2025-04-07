<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Интериорни и Входни врати'; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'Входни и интериорни врати АртДекорДоор. Потопете се в нашето разнообразие от врати, които ще подновят вашия интериор.'; ?>">
    <meta name="author" content="Hadezz Groupd LTD">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css"/>
</head>
<body>
    <?php session_start(); 
    ?>
<nav class=" navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">ArtDoors</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Начало</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">За нас</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Врати
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Интериорни</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="products.php?subcategory=vario">Варио</a></li>
                <li><a class="dropdown-item" href="products.php?subcategory=best">Бест</a></li>
              </ul>
            </li>
            <li><a class="dropdown-item" href="products.php?category=exterior">Входни</a></li>
            <li><a class="dropdown-item" href="products.php?category=facing">Облицовки</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="distributors.php">Дистрибутори</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacts.php">Контакти</a>
        </li>
      </ul>
      <?php if(isset($_SESSION['user_type'])){
        if($_SESSION['user_type'] == "admin"){?>
        <form method="POST" class="ms-auto">
          <button name="admin-menu" class="btn btn-outline-dark  ">Меню</button>
        </form>
        <?php } } ?>
    </div>
</nav>

<?php 
if(isset($_SESSION['user_type'])){
if($_SESSION['user_type'] == "admin"){
?>
<div class="offcanvas offcanvas-start <?php if(isset($_POST["admin-menu"])){echo "show";} ?>" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasLabel">Админ панел</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <ul class="list-group">
  <li class="list-group-item"><a href="admin.php">Админ страница</a></li>
  <li class="list-group-item"><a href="register.php">Дистрибутори</a></li>

</ul>
  </div>
</div>
<?php
} }
?>
<style>
  a {
  color: black;
  text-decoration: none;
 }

 a:active {
  text-decoration: underline;
 }

 /* Enable submenu dropdowns */
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: 0.1rem;
  margin-right: 0.1rem;
  display: none;
  position: absolute;
}

.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}
</style>