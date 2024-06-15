<?php 
include_once 'includes/header.php'; 
include_once 'classes/doors.class.php';

$door_id = isset($_GET['id']) ? $_GET['id'] : '';
$category = isset($_GET['category']) ? $_GET['category'] : '';

$door = new Doors();
$door_data = $door->getDoor($door_id);


?>
<div class="conent">
    <div class="container-fluid">
        <h1 class="mt-3"><?php echo $display_cat =  $category=="interior" ? "Интериорни": "Екстериорни";?> врати ArtDecorDoors</h1>
      <div class="row justify-content-evenly row-cols-1 row-cols-md-2 mt-5">
        <div class="col-lg-4 col-md-6 text-center">
          <img src="<?php echo $door_data[0]['image']?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 col-md-6">
          <h2><?php echo $door_data[0]['name'] ?></h2>
          <p><?php //echo $door_data[0]['description'] ?>Моделът е изработен от висок клас ПВЦ Делукс фолио иновативно на пазара като цвят, цвят променящ се в зависимост от светлината/хамелион/, Орех с леки сребристи нишки. <br><br>
     
     Компбекта включва крило, каса, первази, уплътнение, брава,  панти
     Ширина на крила 70/80, Височина на крилото – 196 см <br><br>
     
     Габаритен размер каса ширина   76/86 <br><br>
     
     Габаритен размер каса височина – 200 см. Необходимият строителен отвор е +2см от размера. <br><br>
     
     Крило 42 мм без фалц – плътен МДФ<br><br>
     
     Рамка на крилото е изработена от масивна дървесина, клиновидно снадена, изчистена от чепове и дефекти.<br><br>
     
     Крилото и касата са покрити с висок клас PVC фолио , особено устойчиво на механични повреди и износване, като е запазен дървесния декор.<br><br>
     
     Скинове 6 мм МДФ<br><br>
     
     Каса от плътен 36 мм МДФ<br><br>
     
     Первази с ширина 8 см двустранно компенсаторни, каса 8 покрива зид до 13 см, каса 14 за зид до 19 см<br><br>
     
     Двоен фриз – 8 см в долният край на крилото позволяващ подрязване до 6 см</p>
          <a href="#" class="btn btn-outline-dark">Свържи се с нас</a>
        </div>
      </div>
    </div>

</div>

<style>

</style>
<?php include_once 'includes/footer.php'; ?>