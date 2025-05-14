<?php include 'includes/header.php' ?>
<?php include 'classes/doors.class.php';

$doors = new Doors();
$doors = $doors->getProducts(2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Decor Door</title>
    <link rel="stylesheet" href="CSS/index.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    
    
</head>
<div class="cintent">
    <div class="container-fluid">
    
        <div class="hero-section">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1>Склад за врати ArtDoors</h1>
                <p class="hero-subtitle">Вносител на интериорни и входни врати за страната</p>
                <a href="#" class="btn btn-outline-light">Научи повече</a>
            </div>
        </div>
        
        <section class="about-section">
            <div class="about-container">
                <div class="about-content">
                <h2 class="section-subtitle">Научи повече</h2>
                <h3 class="section-title">Кои сме ние?</h3>
                <div class="about-text">
                    <p>Нашата компания е водещ вносител на врати, предлагаща широка гама от висококачествени продукти за всеки вид стил. Съчетаваме изключителен дизайн със здрави материали и иновативни технологии, за да осигурим функционалност и елегантност.</p>
                    <p>Нашите врати са изработени с внимание към детайла и се предлагат в разнообразие от цветове, размери и структури, което ги прави подходящи за всеки дом.</p>
                </div>
                </div>
                <div class="about-image">
                <img src="/images/VDA 100.png" alt="ArtDecor Doors колекция">
                </div>
            </div>
        </section>
    
    <div class="container my-5">
        <h2 class="text-center mb-4">Нашите Категории</h2>

    <div class="row g-4">
        <!-- Interior Doors Tile -->
        <div class="col-md-6">
            <div class="category-tile text-white position-relative rounded-3 h-100" style="background-image: url('Screenshot\ 2025-05-10\ at\ 08.54.40.png');">
                <div class="overlay rounded-3 p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <h3 class="mb-0">Интериорни Врати</h3>
                    </div>
                    <div class="subcategories mt-3">
                        <div class="row g-2">
                            <div class="col-6">
                                <a href="products.php?category=BestDoor" class="subcategory-tile text-white text-center">
                                    <h5>Best Door</h5>
                                    <small>Премиум качество</small>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="products.php?category=VarioDoor" class="subcategory-tile text-white text-center">
                                    <h5>Variodor</h5>
                                    <small>Разнообразие от дизайни</small>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="products.php?category=PerfectDoor" class="subcategory-tile text-white text-center">
                                    <h5>Perfect Door</h5>
                                    <small>Идеална функционалност</small>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="products.php?category=ElitDoor" class="subcategory-tile text-white text-center">
                                    <h5>Elit Door</h5>
                                    <small>Ексклузивни модели</small>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="justify-content-center m-5">
                        <a href="products.php?category=interior" class="btn btn-outline-light mt-auto ">Виж всички интериорни врати</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Exterior Doors Tile -->
        <div class="col-md-6">
            <div class="category-tile text-white position-relative rounded-3 h-100" style="background-image: url('Screenshot\ 2025-05-10\ at\ 08.54.40.png');">
                <div class="overlay rounded-3 p-4 h-100">
                    <div class="d-flex align-items-center mb-3">
                        <h3 class="mb-0">Входни Врати</h3>
                    </div>
                    
                    <div class="subcategories mt-3">
                        <div class="row g-2">
                            <div class="col-12">
                                <a href="products.php?category=ByDoor" class="subcategory-tile text-white text-center">
                                    <h5>ByDoor</h5>
                                    <small>Премиум качество</small>
                                </a>
                            </div>
                            <div class="col-12">
                                <a href="products.php?category=ArtDoor" class="subcategory-tile text-white text-center">
                                    <h5>ArtDoor</h5>
                                    <small>Разнообразие от дизайни</small>
                                </a>
                            </div>
                </div>
            </div>
                    <div class="justify-content-center m-5">
                        <a href="products.php?category=exterior" class="btn btn-outline-light mt-auto ">Виж всички входни врати</a>
                    </div>
        </div>
    </div>
</div>

        </div>    
        <!-- Slider main container -->
    <!-- Slider main container -->
    <h2 class="text-center mt-5">Потопи се в разнообразието на нашите интериорни врати</h2>
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <?php
                for($i = 0; $i < 5; $i++){
    
                    ?>
                    <div class="swiper-slide">
                        <div class="col mt-3">
                        <div class="card m-auto w-75 border-0" style="width: 18rem;">
                        <img src="<?php echo $doors[$i]['image'] ?>" class="card-img-top w-50 m-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $doors[$i]['name']?></h5>
                            <p class="card-text">Врата е масивна, с прости линии, без украса, създава впечатление за мистерия и непроницаемост.</p>
                            <a href="product.php?category=<?php echo "interior";; ?>&id=<?php echo $doors[$i]['door_id'];?>" class="btn btn-outline-dark">Виж повече</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <?php
                
            }
            ?>
        </div>
        <div class="text-center mt-4">
             <a href="products.php?category=exterior"> class="btn btn-outline-dark">Виж всички врати</a>
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
.swiper-pagination {
  margin-top: 30px !important;
  position: relative !important;
}
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

.category-tile {
    background-size: cover;
    background-position: center;
    position: relative;
    min-height: 400px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.category-tile:hover {
    box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.2);
    transform: translateY(-5px);
}

.overlay {
    background: rgba(0, 0, 0, 0.6);
}

.subcategory-tile {
    display: block;
    padding: 1rem;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(6px);
    text-decoration: none;
    height: 100%;
    transition: all 0.3s ease;
}

.subcategory-tile:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-3px);
}

.subcategory-tile h5 {
    font-size: 1.1rem;
    margin-bottom: 0.25rem;
}

.category-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
}

@media (max-width: 768px) {
    .category-tile {
        margin-bottom: 1.5rem;
        min-height: 300px;
    }
}


</style>
<?php include 'includes/footer.php' ?>