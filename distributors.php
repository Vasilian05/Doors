<?php include_once "includes/header.php"; ?>
<?php include_once "classes/distributor.class.php"; ?>

<?php
$distribution = new Distributor();
$distribution = $distribution->getDistributors();
?>
<div class="content">
    <h1 class="mt-5 text-center">Нашите Дистрибутори</h1>
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
            </tr>
            <?php } ?>
          </tbody>
        </table>
    
</div>
<?php }
?>

</div>

<?php include_once "includes/footer.php"; ?>


