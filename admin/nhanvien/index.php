<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once(__DIR__ .'/../../lib/autoload.php'); ?>
    <?php require_once "../layout/header.php"; ?>
  </head>
  <?php
	$sql = "Select * from tbl_nhanvien";
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
                    <h4 class="card-title">Nhân viên</h4>
                    <p class="card-description"> Danh Sách</p>
                   
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Mã nhân viên </th>
                          <th> Tên nhân viên </th>
                          <th> Hình ảnh </th>
                          <th> Ngày sinh </th>
                          <th> Giới tính </th>
                          <th> Số điện thoại </th>
                          <th> Địa chỉ </th>

                        </tr> 
                      </thead>
                      <tbody>
                      <?php foreach($product as $item) : ?>
                        <tr>
                          <td> <?php echo $item['id_nv']?></td>
                          <td> <?php echo $item['tennv']?> </td>
                          <td><img width="100" height="100" src="<?php echo $base_url.$item['hinhanh'] ?>" alt=""></td>
                          <td> <?php echo $item['ngaysinh']?> </td>
                          <td> <?php echo $item['gioitinh']?> </td>
                          <td> <?php echo $item['sdt']?> </td>
                          <td> <?php echo $item['diachi']?> </td>

                          <td> <a href="./edit_nhanvien.php?id_nv=<?php echo $item['id_nv']?>">EDIT</a>&emsp;<a href="./delete_nhanvien.php?id_nv=<?php echo $item['id_nv']?>">XÓA</a></td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                      </br>
                    <a href="./add_nhanvien.php" class="card-description">Thêm nhân viên</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
    <?php require_once "../layout/script.php"; ?>
    
  </body>
</html>