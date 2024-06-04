<?php include 'includes/header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/index.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    
    
</head>
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
    
    
    </section>
    
    
    <section class="products mt-5">
    
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col mt-3">
                    <div class="card m-auto" style="width: 18rem;">
                    <img src="images/ART-02-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Врата 1</h5>
                        <p class="card-text">Врата е масивна, с прости линии, без украса, създава впечатление за мистерия и непроницаемост.</p>
                        <a href="#" class="btn btn-outline-dark">Виж повече</a>
                    </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card m-auto" style="width: 18rem;">
                    <img src="images/ART-04-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Врата 2</h5>
                        <p class="card-text">Врата е масивна, с прости линии, без украса, създава впечатление за мистерия и непроницаемост.</p>
                        <a href="#" class="btn btn-outline-dark">Виж повече</a>
                    </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card m-auto" style="width: 18rem;">
                    <img src="images/ART-05-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Врата 3</h5>
                        <p class="card-text">врата е масивна, с прости линии, без украса, създава впечатление за мистерия и непроницаемост.</p>
                        <a href="#" class="btn btn-outline-dark">Виж повече</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>

    </div>    
    <!-- Slider main container -->
<div class="swiper-container">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>

<script>
    const swiper = new Swiper('.swiper-container', {

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<?php include 'includes/footer.php' ?>