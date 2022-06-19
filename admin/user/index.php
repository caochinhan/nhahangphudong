<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require_once(__DIR__ .'/../../lib/autoload.php'); ?>
    <?php require_once "../layout/header.php"; ?>
  </head>
  <?php
	$sql = "Select * from tbl_admin";
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
                    <h4 class="card-title">Tài khoản</h4>
                    <p class="card-description"> Danh Sách</p>
                   
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> ID</th>
                          <th> Tài khoản </th>
                          <th> Mật khẩu </th>


                        </tr> 
                      </thead>
                      <tbody>
                      <?php foreach($product as $item) : ?>
                        <tr>
                          <td> <?php echo $item['id']?></td>
                          <td> <?php echo $item['username']?> </td>
                          <td> <?php echo $item['password']?> </td>

                          <td> <a href="./edit_user.php?id=<?php echo $item['id']?>">EDIT</a>&emsp;<a href="./delete_user.php?id=<?php echo $item['id']?>">XÓA</a></td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                      </br>
                    <a href="./add_user.php" class="card-description">Thêm tài khoản</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
    <?php require_once "../layout/script.php"; ?>
    
  </body>
</html>