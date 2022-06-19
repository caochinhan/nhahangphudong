<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once(__DIR__ .'/../../lib/autoload.php'); ?>
    <?php require_once "../layout/header.php"; ?>
  </head>
  <?php
	$sql = "Select * from tbl_baiviet";
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
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bài viết</h4>
                    <p class="card-description"> Danh Sách</p>
                   
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Mã </th>
                          <th> Tên bài viết </th>
                          <th> Hình ảnh </th>
                          <th> Ngày </th>
                          <th> Nội dung </th>

                        </tr> 
                      </thead>
                      <tbody>
                      <?php foreach($product as $item) : ?>
                        <tr>
                          <td> <?php echo $item['id_bv']?></td>
                          <td> <?php echo $item['tenbv']?> </td>
                          <td><img width="100" height="100" src="<?php echo $base_url.$item['hinhanh'] ?>" alt=""></td>
                          <td> <?php echo $item['ngay']?> </td>
                          <td> <?php echo $item['noidung']?> </td>


                          <td> <a href="./edit_baiviet.php?id_bv=<?php echo $item['id_bv']?>">EDIT</a>&emsp;<a href="./delete_baiviet.php?id_bv=<?php echo $item['id_bv']?>">XÓA</a></td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                      </br>
                    <a href="./add_baiviet.php" class="card-description">Thêm bài viết</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
    <?php require_once "../layout/script.php"; ?>
    
  </body>
</html>