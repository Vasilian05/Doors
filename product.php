<?php 
include_once 'classes/doors.class.php';



$door_id = isset($_GET['id']) ? $_GET['id'] : '';
$category = isset($_GET['category']) ? $_GET['category'] : '';

$door = new Doors();
$door_data = $door->getDoor($door_id);

//fetch the meta data
$page_title =  $door_data[0]['page_title'];
$meta_description =  $door_data[0]['meta_description'];

//include the header once the metadata fields are set
include_once 'includes/header.php'; 

?>
<div class="container my-4">
<div class="row">
  <!-- Product Image Column (Left) -->
  <div class="col-md-4 mb-4">
    <div class="product-image-container position-relative">
      <img src="/images/ART-05-1.jpg" alt="Входна врата" class="img-fluid rounded shadow">
    </div>
  </div>

  <!-- Content Column (Right) -->
  <div class="col-md-8">
    <div class="product-card">
      <!-- Card Header with Price -->
      <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0">Информация за продукта</h3>
        <div class="product-info">
          <h4 class="text-dark mb-0">800 лв.</h4>
          <span class="text-muted">VDA 06-2</span>
        </div>
      </div>
      
      <!-- Card Body with Tabs -->
      <div class="card-body p-0">
        <!-- Tab Navigation -->
        <ul class="nav nav-tabs px-3 pt-3" id="productTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab">
              Детайли
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="measurements-tab" data-bs-toggle="tab" data-bs-target="#measurements" type="button" role="tab">
              Размери
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="accessories-tab" data-bs-toggle="tab" data-bs-target="#accessories" type="button" role="tab">
              Аксесоари
            </button>
          </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content p-3">
          <!-- Details Tab -->
          <div class="tab-pane fade show active" id="details" role="tabpanel">
            <p>Модерна входна врата с изчистен вертикален дизайн – стил и сигурност в едно. Съчетава топлината на естествената дървесина с модерна индустриална визия.</p>
          </div>

          <!-- Measurements Tab -->
          <div class="tab-pane fade" id="measurements" role="tabpanel">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Широчина (cm)</label>
                  <input type="text" class="form-control" value="90" readonly>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Височина (cm)</label>
                  <input type="text" class="form-control" value="210" readonly>
                </div>
              </div>
            </div>
          </div>

          <!-- Accessories Tab -->
          <div class="tab-pane fade" id="accessories" role="tabpanel">
            <p>Достъпни аксесоари за вашата врата:</p>
            <ul class="mb-0">
              <li>Допълнителна ключалка</li>
              <li>Декоративни щиктове</li>
              <li>Автоматичен затваряч</li>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- Card Footer with Contact Button -->
      <div class="card-footer text-center">
        <button class="btn btn-outline-dark btn-lg px-5">
          Свържете се с нас
        </button>
      </div>
    </div>
  </div>
</div>
</div>

<style>
/* Card Styles */
.product-card {
background: white;
border-radius: 8px;
box-shadow: 0 4px 12px rgba(0,0,0,0.08);
overflow: hidden;
}

.card-header {
padding: 1.5rem;
background-color: #f8f9fa;
border-bottom: 1px solid #e0e0e0;
}

.card-title {
margin: 0;
font-size: 1.5rem;
color: #383E42;
}

.product-info {
text-align: right;
}

.product-info h4 {
font-size: 1.5rem;
}


.card-footer {
padding: 1.5rem;
background-color: #f8f9fa;
border-top: 1px solid #e0e0e0;
}

/* Tab Styles */
.nav-tabs {
border-bottom: 2px solid #dee2e6;
padding: 0 1rem;
margin-bottom: 0;
}

.nav-tabs .nav-link {
font-weight: 500;
color: #000;
border: none;
padding: 12px 20px;
}

.nav-tabs .nav-link.active {
color: #000;
border-bottom: 3px solid #000;
background: transparent;
}

.tab-content {
min-height: 200px;
padding: 1.5rem !important;
}

/* Product Image Container */
.product-image-container {
position: relative;
border-radius: 8px;
overflow: hidden;
}

@media (max-width: 768px) {
.product-image-container {
  margin-bottom: 20px;
}

.product-card {
  margin-top: 20px;
}

.card-header {
  flex-direction: column;
  align-items: flex-start !important;
}

.product-info {
  text-align: left;
  margin-top: 1rem;
}
}
</style>
<?php
// Product schema
echo '<script type="application/ld+json">';
echo $door->generateProductStructuredData($door_id);
echo '</script>';
 include_once 'includes/footer.php'; ?>