<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ .'/../../lib/autoload.php'); ?>
    <?php require_once "../layout/header.php"; ?>

</head>
<?php
    $sql = "select * from tbl_dattiec";
    $contact = $db->fetchAll($sql);
?>
<body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
    <?php require_once "../layout/nav_bar_header.php"; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
    <?php require_once "../layout/nav_bar.php"; ?> 
    <!--*******************
        Preloader start
    ********************-->

    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">


                    <div class="col-lg-12">
                        <div style="width:1190px" class="card">
                            <div class="card-body">
                                <h4 class="card-title"><a href="./add.php">Thêm Comment</a></h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr>
                                            <th scope="col">id</th>
                                                <th scope="col">Tên</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">SĐT</th>
                                                <th scope="col">Số lượng</th>
                                                <th scope="col">Địa chỉ đặt tiệc</th>
                                                <th scope="col">Ngày</th>
                                                <th scope="col">Giờ</th>
                                                <th scope="col">Nội dung</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($contact as $item) : ?>
                                            <tr>
                                            <td><?php echo $item['id'] ?></td>
                                                <td><?php echo $item['ten'] ?></td>
                                                <td><?php echo $item['email'] ?></td>
                                                <td><?php echo $item['sdt'] ?></td>
                                                <td><?php echo $item['soluong'] ?></td>
                                                <td><?php echo $item['diachi'] ?></td>
                                                <td><?php echo $item['ngay'] ?></td>
                                                <td><?php echo $item['gio'] ?></td>
                                                <td><?php echo $item['noidung'] ?></td>
                                                <td>
                                                    <span>
                                                        <a href="./edit.php?id=<?php echo $item['id'] ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="fa fa-pencil color-muted m-r-5"></i> Sửa ||
                                                        </a>
                                                        <a href="./delete.php?id=<?php echo $item['id'] ?>" onclick="if(!confirm('Delete ?')) return false; " data-toggle="tooltip" data-placement="top" title="" data-original-title="Close">
                                                            <i class="fa fa-close color-danger"></i> Xóa
                                                        </a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <!-- <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div> -->
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <?php require_once(__DIR__ . '/../layout/script.php') ?>

</body>

</html>