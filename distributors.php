<?php include_once "includes/header.php"; ?>
<?php include_once "classes/distributor.class.php"; ?>

<?php
$distribution = new Distributor();
$distribution = $distribution->getDistributors();
?>
<div class="content">
    <h1 class="page-title">Нашите Дистрибутори</h1>
    <?php 
    if(count($distribution) > 0){ ?>
    
        <h2 class="section-title">Дистрибутори</h2>
        <div class="table-container">
            <table class="distributors-table">
              <thead>
                <tr>
                  <th>Фирма</th>
                  <th>Град</th>
                  <th>Адрес</th>
                  <th>Телефон</th>
                  <th>Имейл</th>
                </tr>
              </thead>
              <tbody>
                <?php for($i = 0; $i < count($distribution); $i++) { ?>
                <tr>
                  <td><?php echo $distribution[$i]['company']?></td>
                  <td><?php echo $distribution[$i]['city']?></td>
                  <td><?php echo $distribution[$i]['address']?></td>
                  <td><?php echo $distribution[$i]['phone']?></td>
                  <td><?php echo $distribution[$i]['email']?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
        </div>

        <!-- Distributor CTA Section -->
    <div class="distributor-cta">
            <div class="cta-container">
                <!-- Left Column (Title) -->
                <div class="cta-text">
                    <h2>Искаш да станеш дистрибутор на ArtDecorDoors?</h2>
                </div>
                
                <!-- Right Column (Benefits List) -->
                <div class="cta-benefits">
                    <h3>Какво предлагаме:</h3>
                    <ul class="benefits-list">
                        <li>
                            <span class="benefit-title">Атрактивни търговски отстъпки</span>
                            <span class="benefit-desc">Получаваш специални цени и възможност за печалба още от първата продажба.</span>
                        </li>
                        <li>
                            <span class="benefit-title">Богато продуктово портфолио</span>
                            <span class="benefit-desc">Врати в различни цветове, стилове и размери, подходящи за всеки интериор.</span>
                        </li>
                        <li>
                            <span class="benefit-title">Бърза доставка</span>
                            <span class="benefit-desc">Работим с утвърдени логистични партньори, за да получаваш поръчките си навреме.</span>
                        </li>
                        <li>
                            <span class="benefit-title">Маркетингова подкрепа</span>
                            <span class="benefit-desc">Ще ти предоставим професионални снимки, каталози, мостри и рекламни материали.</span>
                        </li>
                        <li>
                            <span class="benefit-title">Поддръжка и обучение</span>
                            <span class="benefit-desc">Екипът ни е на разположение за техническа помощ, съвети по продажби и обучение за продуктите.</span>
                        </li>
                    </ul>
                    <button class="cta-button btn btn-outline-dark">Кандидатствай сега</button>
                </div>
            </div>
      </div>
    <?php } ?>
  <!-- Transition Element -->
  <div class="section-transition">
  </div>

  <div class="suitability-section">
    <h3 class="section-title">Подходящо ли е за теб?</h3>
    <div class="checklist">
      <div class="check-item">
        <span class="check-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
        <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0"/>
        <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708"/>
      </svg></span>
        <span>Имаш магазин или шоурум за врати, строителни материали или интериорен дизайн</span>
      </div>
      <div class="check-item">
        <span class="check-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
        <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0"/>
        <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708"/>
      </svg></span>
        <span>Искаш да разшириш асортимента си с качествени продукти</span>
      </div>
      <div class="check-item">
        <span class="check-icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
          <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0"/>
          <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708"/>
        </svg></span>
        <span>Стремиш се към партньорство с коректен и стабилен вносител</span>
      </div>
      <!-- Repeat for other items -->
  </div>
  </div>
  <!-- Testimonials Section -->
<div class="testimonials-section">
  <h2 class="section-title">Отзиви от нашите дистрибутори</h2>
  <div class="testimonials-container">
    <div class="testimonials-track">
      <!-- Testimonial Items (Double set for infinite loop) -->
      <div class="testimonial-card">
        <div class="testimonial-content">
          <p>"Работим с ArtDecor Doors от 5 години и сме изключително доволни от качеството и професионализма."</p>
          <div class="author">- Елеонора Николова, Елегант-21</div>
        </div>
      </div>
      <!-- Testimonial Items (Double set for infinite loop) -->
      <div class="testimonial-card">
        <div class="testimonial-content">
          <p>"Впечатлени сме от професионализма и вниманието към всеки детайл. Работата с тях е удоволствие, 
            а печалбите са стабилни."</p>
          <div class="author">- Dir Door</div>
        </div>
      </div>
      <!-- Testimonial Items (Double set for infinite loop) -->
      <div class="testimonial-card">
        <div class="testimonial-content">
          <p>"Като дистрибутор получаваме отлични търговски условия и винаги можем да разчитаме на екипа за съдействие. 
            Клиентите ни харесват модерния дизайн и здравината на вратите."</p>
          <div class="author">- ЕС ТРЕЙД</div>
        </div>
      </div>
      <!-- Testimonial Items (Double set for infinite loop) -->
      <div class="testimonial-card">
        <div class="testimonial-content">
          <p>"ArtDecor Doors е символ на качество. Нямаме нито една рекламация от клиенти 
            — това говори само по себе си!"</p>
          <div class="author">- Vidov Commerce</div>
        </div>
      </div>
      <!-- Repeat 7 more testimonials -->
      <div class="testimonial-card">
        <div class="testimonial-content">
          <p>"Дистрибуцията с ArtDecor Doors ни помогна да разширим бизнеса си в региона. Поддръжката и бързите 
            доставки правят всичко лесно и приятно."</p>
          <div class="author">- Brahmen</div>
        </div>
      </div>
      <!-- Duplicate the same 8 testimonials -->
      <div class="testimonial-card">
        <div class="testimonial-content">
          <p>"Сътрудничеството с ArtDecor Doors беше най-доброто бизнес решение за нашия магазин за интериорни решения. 
            Асортиментът е богат, а условията — отлични."</p>
          <div class="author">- Георги Иванов, Елегант-21</div>
        </div>
      </div>
    </div>
  </div>
</div>


</div>

<style>
/* Base Styles */
.content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}

.page-title {
    text-align: center;
    font-size: 2.5rem;
    color: #2F3438;
    margin-bottom: 2rem;
}

.section-title {
    text-align: center;
    font-size: 1.8rem;
    color: #383E42;
    margin: 2rem 0;
}

/* Table Styles */
.table-container {
    overflow-x: auto;
    margin: 2rem 0;
}

.distributors-table {
    width: 100%;
    border-collapse: collapse;
    margin: 0 auto;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.distributors-table th {
    background-color: #383E42;
    color: white;
    padding: 1rem;
    text-align: left;
}

.distributors-table td {
    padding: 0.8rem 1rem;
    border-bottom: 1px solid #e0e0e0;
}

.distributors-table tr:nth-child(even) {
    background-color: #f8f9fa;
}

.distributors-table tr:hover {
    background-color: #e9ecef;
}

/* CTA Section Styles */
.distributor-cta {
    background-color: #f8f9fa;
    padding: 3rem 0;
    margin-top: 3rem;
}

.cta-container {
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
}

.cta-text {
    flex: 1;
    min-width: 300px;
    display: flex;
    align-items: center;
}

.cta-text h2 {
    font-size: 2rem;
    color: #2F3438;
    line-height: 1.3;
}

.cta-benefits {
    flex: 1;
    min-width: 300px;
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.benefits-list {
    list-style: none;
    padding: 0;
    margin: 1.5rem 0;
}

.benefits-list li {
    margin-bottom: 1.5rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid #eee;
}

.benefits-list li:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.benefit-title {
    display: block;
    font-weight: bold;
    color: #383E42;
    margin-bottom: 0.5rem;
    font-size: 1.1rem;
}

.benefit-desc {
    display: block;
    color: #555;
    line-height: 1.5;
}


/* Responsive Adjustments */
@media (max-width: 768px) {
    .cta-container {
        flex-direction: column;
    }
    
    .cta-text {
        text-align: center;
    }
    
    .cta-text h2 {
        font-size: 1.8rem;
    }
}
.suitability-section {
  background: white;
  padding: 25px;
  margin: 30px auto;
  width: 75%;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  border-radius: 8px;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.5s ease 0.2s;

}

.check-item {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  margin-bottom: 16px;
  line-height: 1.5;
}

.check-icon {
  font-size: 1.2em;
  flex-shrink: 0;
}


.transition-icon {
  transform: translateY(-50%);
  opacity: 0.8;
}


.gradient-container {
  width: 100%;
  margin: 0 auto;
  position: relative;
}

/* Gradient element */
.content-gradient {
  height: 0;
  background: linear-gradient(to bottom, #f8f9fa, #e9ecef);
  transition: height 0.6s ease-out;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
}

.animated-gradient {
  height: 0;
  background: linear-gradient(to bottom, #f8f9fa, #e9ecef);
  transition: height 0.6s ease-out;
  width: 100%;
  margin: 0 auto;
}

.suitability-card {
  background: white;
  padding: 30px;
  margin: 0 auto 40px;
  width: 75%;
  margin-top: 40px;
  border-radius: 0 0 8px 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.5s ease 0.2s; /* Delayed slightly */
}

.suitability-card.visible {
  opacity: 1;
  transform: translateY(0);
}

/* Existing styles from your design */
.distributor-card {
  width: 75%;
  margin: 0 auto;
  background: white;
  padding: 25px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  border-radius: 8px 8px 0 0;
}

.suitability-section.visible {
  opacity: 1;
  transform: translateY(0);
}

/* Ensure gradient is initially hidden */
.animated-gradient {
  height: 0;
  overflow: hidden;
}

/* Full Width Testimonials Section */
.testimonials-section {
  width: 100vw;
  position: relative;
  left: 50%;
  right: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
  background: #f8f9fa;
  padding: 60px 0;
  overflow: hidden;
}

/* Center-aligned heading */
.section-title {
  text-align: center;
  width: 75%;
  margin: 0 auto 40px;
  color: #383E42;
  font-size: 2rem;
}

/* Carousel Container */
.testimonials-container {
  width: 100%;
  overflow: hidden;
  position: relative;
}

/* Scrolling Track */
.testimonials-track {
  display: flex;
  gap: 30px;
  width: max-content;
  animation: scroll 40s linear infinite;
  padding: 0 20px; /* Prevents cards from touching edges */
}

/* Individual Testimonial Cards */
.testimonial-card {
  flex: 0 0 calc(100vw / 3 - 40px); /* 3 cards with gap adjustment */
  max-width: calc(100vw / 3 - 40px);
  background: white;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  margin-right: 10px;
}

.testimonial-content p {
  font-style: italic;
  margin-bottom: 15px;
  line-height: 1.6;
  font-size: 1.1rem;
}

.author {
  font-weight: bold;
  color: #383E42;
  font-size: 1rem;
}

/* Animation */
@keyframes scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

/* Pause on hover */
.testimonials-track:hover {
  animation-play-state: paused;
}

/* Responsive Adjustments */
@media (max-width: 1200px) {
  .testimonial-card {
    flex: 0 0 calc(100vw / 2 - 60px); /* 2 cards on tablet */
    max-width: calc(100vw / 2 - 60px);
  }
}

@media (max-width: 768px) {
  .testimonial-card {
    flex: 0 0 calc(100vw - 80px); /* 1 card on mobile */
    max-width: calc(100vw - 80px);
    padding: 25px;
  }
  
  .section-title {
    width: 85%;
    font-size: 1.8rem;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const gradient = document.querySelector('.section-transition');
  const card = document.querySelector('.suitability-section');
  
  // Convert gradient to animated-gradient style
  gradient.classList.add('animated-gradient');
  gradient.style.height = '0';
  
  const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
      gradient.style.height = '40px';
      setTimeout(() => {
        card.classList.add('visible');
      }, 600);
    }
  }, {threshold: 0.1});

  observer.observe(card);
});

document.addEventListener('DOMContentLoaded', function() {
  const gradient = document.querySelector('.content-gradient');
  const card = document.querySelector('.suitability-card');
  
  const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
      // Set gradient height to card height + spacing
      gradient.style.height = (card.offsetHeight + 40) + 'px';
      card.classList.add('visible');
    }
  }, {threshold: 0.1});

  observer.observe(card);
});
</script>
<?php include_once "includes/footer.php"; ?>