<?php include 'includes/header.php' ?>
<?php include 'classes/doors.class.php';

$doors = new Doors();
$doors = $doors->getProducts(1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/index.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    
    
</head>
<div class="cintent">
    <main>
        <div class="container-fluid">
    
            <div class="row">
            <div class="main-intro col">
                <h1 class="fs-1">Фабрика за врати <br>ArtDoors</h1>
                <p>номер 1 пройзводител на интериорни и <br>входини врати за страната</p>
                <button type="button" class="btn btn-outline-dark">Научи повече</button>
            </div>
            <div class="col">
                <p>Страхотно отношение и много добро качество, <br> наистина впечатляващо <br><br> - Катя Николова </p>
                <p>Да имаш милост към немилостивите е така подло, <br> както да я очакваш от тях... <br><br> - Иван Вазов </p>
            </div>
            </div>
        </main>
        
        <section class="info">
        
            <div class="container-fluid text-center mt-5">
                <div class="row align-items-start ">
                    <div class="col-md-8 order-md-1 ">
                    <h2>Кои сме ние?</h2>
                    <p class="mt-5 fs-4">Нашата компания е водещ производител на врати, предлагащ широка гама от висококачествени продукти за всеки вкус и стил. Съчетаваме изключителен дизайн със здрави материали и иновативни технологии, за да осигурим функционалност и елегантност. Нашите врати са изработени с внимание към детайла и се предлагат в разнообразие от цветове, размери и структури, което ги прави подходящи за всяко обитание или бизнес среда.</p>
                    </div>
                    <div class="col-md-4 order-md-0">
                        <img src="images/blue-door-room-6toqsy.jpg" class="rounded w-100 float-end blue-door" alt="...">
                    </div>
                </div>
            </div>
        
        <hr>
        </section>
    
        </div>    
        <!-- Slider main container -->
    <!-- Slider main container -->
    <h2 class="text-center mt-5">Потопи се в разнообразието на нашите интериорни врати</h2>
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <?php
                for($i = 0; $i < count($doors); $i++){
    
                    ?>
                    <div class="swiper-slide">
                        <div class="col mt-3">
                        <div class="card m-auto w-75 border-0" style="width: 18rem;">
                        <img src="<?php echo $doors[$i]['image'] ?>" class="card-img-top w-50 m-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $doors[$i]['name']?></h5>
                            <p class="card-text">Врата е масивна, с прости линии, без украса, създава впечатление за мистерия и непроницаемост.</p>
                            <a href="product.php?&id=<?php echo $doors[$i]['door_id']; ?>" class="btn btn-outline-dark">Виж повече</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <?php
                
            }
            ?>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        }
    },
});
</script>


<style>
.swiper-button-prev, .swiper-button-next {
    color: #000 !important; /* Change arrow color to black */
    display: flex;
    justify-content: center;
    align-items: center;
}
.swiper-button-prev::after, .swiper-button-next::after {
    color: #000 !important; /* Ensure the arrow itself is black */
    font-size: 20px; /* Adjust as needed */
}
.swiper-pagination-bullet {
    background: #000 !important; /* Change pagination dots color to black */
}
.swiper-pagination-bullet-active {
    background: #000 !important; /* Change active pagination dot color to black */
}
</style>
<?php include 'includes/footer.php' ?>