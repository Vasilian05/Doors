<?php 
include_once "classes/products.class.php";
include_once "classes/doors.class.php";
include_once "classes/users.class.php";


//make sure only admins can access the page
if($_SESSION['user_type'] != "admin"){
  header("location:admin.php");
}



// Get door ID from session
$door_id = $_SESSION['Door_id'] ?? null;
if (!$door_id) {
    header("Location: admin.php?error=no_door_id");
    exit();
}

// Get the door to be edited
$doors = new Doors();
$edited_product = $doors->getDoor($door_id);
if (!$edited_product) {
    header("Location: admin.php?error=door_not_found");
    exit();
}

// Get current brand and category (you'll need to add this method to Doors class)
$current_brand_category = $doors->getBrandCategoryForDoor($door_id);

// Handle form submission
if (isset($_POST['update'])) {
    $new_name = $_POST['name'];
    $new_price = $_POST['price'];
    $new_description = $_POST['description'];
    $new_short_description = $_POST['short_description'];
    $new_brand_id = $_POST['brand_id'];
    $new_category_id = $_POST['category_id'];
    
    try {
        $products = new Product(
            $new_name, 
            $new_brand_id, 
            $new_category_id, 
            $new_description, 
            $_FILES['image']['size'] > 0 ? $_FILES['image'] : null, 
            $new_short_description
        );
        
        if ($products->editDoor($door_id, $new_price, $_FILES['image']['size'] > 0 ? $_FILES['image'] : null)) {
            header("Location: admin.php?success=door_updated");
            exit();
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
include_once "includes/header.php"; 
?>

<div class="content">
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <form method="POST" class="form m-auto w-50 mt-5" enctype="multipart/form-data">
        <h1 class="text-center">Редактирай продукт</h1>
        
        <div class="mb-3">
            <label class="form-label">Име</label>   
            <input required type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($edited_product[0]['name']); ?>">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Цена</label>   
            <input required type="number" step="0.01" class="form-control" name="price" value="<?php echo htmlspecialchars($edited_product[0]['price']); ?>">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Описание</label>
            <textarea required class="form-control" rows='15' name="description"><?php echo htmlspecialchars($edited_product[0]['description']); ?></textarea>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Кратко описание</label>
            <textarea required id="tiny" rows='5' class="form-control" name="short_description"><?php echo htmlspecialchars($edited_product[0]['short_description']); ?></textarea>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Марка</label>
            <select required name="brand_id" class="form-select">
                <option value="">Избери марка</option>
                <?php
                $brands = (new Doors())->getAllBrands();
                foreach ($brands as $brand): 
                    $selected = ($current_brand_category && $brand['brand_id'] == $current_brand_category['brand_id']) ? 'selected' : '';
                ?>
                    <option value="<?php echo $brand['brand_id']; ?>" <?php echo $selected; ?>>
                        <?php echo htmlspecialchars($brand['brand_name']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Категория</label>
            <select required name="category_id" class="form-select">
                <option value="">Избери категория</option>
                <?php
                $categories = (new Doors())->getAllCategories();
                foreach ($categories as $category): 
                    $selected = ($current_brand_category && $category['category_id'] == $current_brand_category['category_id']) ? 'selected' : '';
                ?>
                    <option value="<?php echo $category['category_id']; ?>" <?php echo $selected; ?>>
                        <?php echo htmlspecialchars($category['category_name']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Снимка</label>
            <input type="file" class="form-control" name="image">
            <?php if (!empty($edited_product[0]['image'])): ?>
                <small class="text-muted">Текуща снимка: <?php echo basename($edited_product[0]['image']); ?></small>
            <?php endif; ?>
        </div>
        
        <button type="submit" name="update" class="btn btn-outline-dark">Запази</button>
    </form>
</div>

<?php include_once "includes/footer.php"; ?>