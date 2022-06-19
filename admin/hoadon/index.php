<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once(__DIR__ .'/../../lib/autoload.php'); ?>
    <?php require_once "../layout/header.php"; ?>
  </head>
  <?php
	$sql = "Select * from tbl_hoadon";
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
                    <h4 class="card-title">Hoá đơn</h4>
                    <p class="card-description"> Danh Sách</p>
                   
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Mã hoá đơn </th>
                          <th> Họ tên </th>
                          <th> Số điện thoại </th>
                          <th> Email </th>
                          <th> Địa chỉ </th>
                          <th> Ngày </th>
                          <th> Tổng tiền </th>
                          <th> Chú thích </th>
                        </tr> 
                      </thead>
                      <tbody>
                      <?php foreach($product as $item) : ?>
                        <tr>
                          <td> <?php echo $item['id_hd']?></td>
                          <td> <?php echo $item['ten']?> </td>
                          <td> <?php echo $item['sdt']?></td>
                          <td> <?php echo $item['email']?></td>
                          <td> <?php echo $item['diachi']?></td>
                          <td> <?php echo $item['ngay']?> </td>
                          <td> <?php echo $item['tongtien']?> </td>
                          <td> <?php echo $item['chuthich']?></td>

                          <td> <a href="./edit_hoadon.php?id_hd=<?php echo $item['id_hd']?>">EDIT</a>&emsp;<a href="./delete_hoadon.php?id_hd=<?php echo $item['id_hd']?>">XÓA</a></td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                      </br>
                    <a href="./add_hoadon.php" class="card-description">Thêm hoá đơn</a>
                     <div>
                        </br>
                        <a href="/fashi/excel/excel.php" class="card-description">Xuất file excel</a>
                     </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
    
    <?php require_once "../layout/script.php"; ?>
    
  </body>
</html>