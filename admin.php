<?php
// Make sure only admins can access the page
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != "admin") {
    header("Location: index.php");
    exit();
}

include_once "includes/header.php";
include_once "classes/products.class.php";
include_once "classes/doors.class.php";

$doors = new Doors();

// Add new product
if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $brand_id = $_POST['brand_id'];
    $category_id = $_POST['category_id'];
    $image = $_FILES['image'];
    $short_description = $_POST['short_description'];
    $price = $_POST['price'] ?? 0;
    
    try {
        $item = new Product($name, $brand_id, $category_id, $description, $image, $short_description);
        $item->addItem($price);
        $_SESSION['success'] = "Продуктът е добавен успешно!";
        header("Location: admin.php");
        exit();
    } catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
    }
}

// Delete door from database
if (isset($_POST['remove'])) {
    $product_id = $_POST['product'];
    $delete_product = new Doors();
    if ($delete_product->deleteDoor($product_id)) {
        $_SESSION['success'] = "Продуктът е изтрит успешно!";
    } else {
        $_SESSION['error'] = "Грешка при изтриване на продукт!";
    }
    header("Location: admin.php");
    exit();
}

// Edit item
if (isset($_POST['edit'])) {
    $_SESSION['Door_id'] = $_POST['product_id'];
    header("Location: update.php");
    exit();
}

// Get all products grouped by category
$all_products = $doors->getAllProductsWithBrandCategory();
$products_by_category = [];

foreach ($all_products as $product) {
    $category_name = $product['category_name'];
    if (!isset($products_by_category[$category_name])) {
        $products_by_category[$category_name] = [];
    }
    $products_by_category[$category_name][] = $product;
}
?>
<div class="content">
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
    <?php endif; ?>
    
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
    <?php endif; ?>

    <form method="POST" class="form m-auto w-50 mt-5" enctype="multipart/form-data">
        <h1 class="text-center">Добави продукт</h1>
        <div class="mb-3">
            <label class="form-label">Име</label>   
            <input required type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Цена</label>   
            <input required type="number" step="0.01" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label class="form-label">Описание</label>
            <textarea required class="form-control" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Кратко описание</label>
            <textarea required id="tiny" class="form-control" name="short_description"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Марка</label>
            <select required name="brand_id" class="form-select">
                <option value="">Избери марка</option>
                <?php foreach ($doors->getAllBrands() as $brand): ?>
                    <option value="<?php echo $brand['brand_id']; ?>">
                        <?php echo htmlspecialchars($brand['brand_name']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Категория</label>
            <select required name="category_id" class="form-select">
                <option value="">Избери категория</option>
                <?php foreach ($doors->getAllCategories() as $category): ?>
                    <option value="<?php echo $category['category_id']; ?>">
                        <?php echo htmlspecialchars($category['category_name']); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Снимка</label>
            <input required type="file" class="form-control" name="image">
        </div>
        <button type="submit" name="btn" class="btn btn-outline-dark">Качи продукт</button>
    </form>

    <section class="dashboard mt-5">
        <h3 class="text-center">Инвентар</h3>
        <?php foreach ($products_by_category as $category_name => $products): ?>
            <h5 class="text-center mt-5"><?php echo htmlspecialchars($category_name); ?></h5>
            <table class="table w-75 m-auto">
                <thead>
                    <tr>
                        <th scope="col">Име</th>
                        <th scope="col">Марка</th>
                        <th scope="col">Снимка</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Премахни</th>
                        <th scope="col">Редактирай</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($product['name']); ?></td>
                        <td><?php echo htmlspecialchars($product['brand_name']); ?></td>
                        <td><img src="<?php echo htmlspecialchars($product['image']); ?>" class="w-25 image-fluid" alt=""></td>
                        <td><?php echo number_format($product['price'], 2); ?> лв.</td>
                        <td>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                                <input type="hidden" value="<?php echo $product['door_id']; ?>" name="product">
                                <button name="remove" class="btn btn-outline-dark">премахни</button>
                            </form>
                        </td>
                        <td>
                            <form method="POST">
                                <input type="hidden" value="<?php echo $product['door_id']; ?>" name="product_id">
                                <button name="edit" class="btn btn-outline-dark">редактирай</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endforeach; ?>
    </section>
</div>

<?php include_once "includes/footer.php"; ?>