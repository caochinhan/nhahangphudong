<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once(__DIR__ .'/../../lib/autoload.php'); ?>
    <?php require_once "../layout/header.php"; ?>
  </head>
  <?php
	$sql = "Select * from tbl_sanpham";
	$product = $db->fetchAll($sql);  	
  ?>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
    <?php require_once "../layout/nav_bar_header.php"; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
    <?php require_once "../layout/nav_bar.php"; ?> 
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sản Phẩm</h4>
                    <!-- <p class="card-description"> Danh Sách</p> -->
                    <a href="./add_product.php" class="card-description">Thêm sản phẩm</a>
                   
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Mã </th>
                          <th> Tên sản phẩm </th>
                          <th> Giá </th>
                          <!-- <th> Khuyến mãi </th>
                          <th> Giá khuyến mãi </th> -->
                          <th> Hình ảnh </th>
                          <!-- <th> Chú thích </th> -->

                        </tr> 
                      </thead>
                      <tbody>
                      <?php foreach($product as $item) : ?>
                        <tr>
                          <td> <?php echo $item['id_sp']?></td>
                          <td> <?php echo $item['tensp']?> </td>
                          <td> <?php echo $item['gia']?> </td>
                          <td><img width="100" height="100" src="<?php echo $base_url.$item['hinhanh'] ?>" alt=""></td>
                          <!-- <td> <?php echo $item['chuthich']?> </td> -->
                          <td> <a href="./edit_product.php?id_sp=<?php echo $item['id_sp']?>">EDIT</a>&emsp;<a href="./delete_product.php?id_sp=<?php echo $item['id_sp']?>">XÓA</a></td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                      </br>
                    <!-- <a href="./add_product.php" class="card-description">Thêm sản phẩm</a> -->
                    <a href="/../../fashi/excel/excel.php" class="card-description">Export</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
    <?php require_once "../layout/script.php"; ?>
    
  </body>
</html>