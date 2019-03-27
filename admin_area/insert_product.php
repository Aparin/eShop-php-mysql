<!DOCTYPE html>
<?php
  include('./includes/db.php');
  include('../functions/functions.php');
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Добавление продукта</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="admin.css">
  
  <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  
</head>
<body>
  <form action="insert_product.php" method="post" enctype="multipart/form-data">
    <h2>Карточка добавления товара</h2>
    <div>
      <p>
        <span class="add_product">Название продукта:</span> 
        <input type="text" name="product_title" required />
      </p>
      <p>
        <span class="add_product">Категория товара:</span> 
        <select name="product_cat" required>
          <option selected="selected" disabled="" value="">Выберите категорию</option>
          <?php selectCats(); ?>
        </select>
      </p>
      <p>
        <span class="add_product">Торговая марка (бренд):</span> 
        <select name="product_brand" required>
          <option  selected="selected" disabled="" value="">Выберите марку</option>
          <?php selectBrands(); ?>
        </select>
      </p>
      
      <p>
        <span class="add_product">Цена продажи:</span> 
        <input type="text" name="product_price" required/>
      </p>

        <span class="add_product" style="vertical-align: top">Описание товара:</span> 
        <textarea name="product_desc"></textarea>

      <p>
        <span class="add_product">Изображение товара:</span> 
        <input style="font-size: 16px" type="file" name="product_image" required />
      </p>
      <p>
        <span class="add_product">Ключевые слова:</span> 
        <input type="text" name="product_keywords" required />
      </p>

      <p><input class="submit" type="submit" name="insert_post" value="ДОБАВИТЬ ПРОДУКТ" /></p>
      
    </div>
  </form>
</body>
</html>

<?php
  // getting the text data from the fields
  if(isset($_POST['insert_post'])) {
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];

    // getting image
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];
    move_uploaded_file($product_image_tmp, "product_images/$product_image");

    mysqli_query($con, "SET NAMES utf8");

    $insert_product = "INSERT INTO `products` (`product_title`, `product_cat`, `product_brand`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$product_title', '$product_cat', '$product_brand', '$product_price', '$product_desc', '$product_image', '$product_keywords');
    ";
    $res = $con->query($insert_product);
    if ($res) {
      echo('<script>alert("Сохранено в БД");</script>');
      echo '<script>window.open("insert_product.php", "_self"</script>';
    } else{
      echo('<script>alert("Ошибка записи!!!");</script>');
    }
   
  }
?>