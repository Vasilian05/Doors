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
</style>

<?php include_once "includes/footer.php"; ?>