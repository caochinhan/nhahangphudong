<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once(__DIR__ .'/../../lib/autoload.php'); ?>
    <?php require_once "../layout/header.php"; ?>
  </head>
  <?php
	$sql = "Select * from tbl_khachhang";
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
                    <h4 class="card-title">Khách hàng</h4>
                    <p class="card-description"> Danh Sách</p>
                   
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Mã khách hàng </th>
                          <th> Tên khách hàng </th>
                          <th> Ngày sinh </th>
                          <th> Email </th>
                          <th> Số điện thoại </th>
                          <th> Địa chỉ </th>

                        </tr> 
                      </thead>
                      <tbody>
                      <?php foreach($product as $item) : ?>
                        <tr>
                          <td> <?php echo $item['id_khachhang']?></td>
                          <td> <?php echo $item['tenkh']?> </td>
                          <td> <?php echo $item['ngaysinh']?> </td>
                          <td> <?php echo $item['email']?> </td>
                          <td> <?php echo $item['sdt']?> </td>
                          <td> <?php echo $item['diachi']?> </td>

                          <td> <a href="./edit_khachhang.php?id_khachhang=<?php echo $item['id_khachhang']?>">EDIT</a>&emsp;<a href="./delete_khachhang.php?id_khachhang=<?php echo $item['id_khachhang']?>">XÓA</a></td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                      </br>
                    <a href="./add_khachhang.php" class="card-description">Thêm khách hàng</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
    <?php require_once "../layout/script.php"; ?>
    
  </body>
</html>