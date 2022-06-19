<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ .'/../../lib/autoload.php'); ?>
    <?php require_once "../layout/header.php"; ?>

</head>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // upload file
    $data =
        [
            "ten" => $_POST['ten'] ? $_POST['ten'] : '',
            "email" => $_POST['email'] ? $_POST['email'] : '',
            "sdt" => $_POST['sdt'] ? $_POST['sdt'] : '',
            "soluong" => $_POST['soluong'] ? $_POST['soluong'] : '',
            "diachi" => $_POST['diachi'] ? $_POST['diachi'] : '',
            "ngay" => $_POST['ngay'] ? $_POST['ngay'] : '',
            "gio" => $_POST['gio'] ? $_POST['gio'] : '',
            "noidung" => $_POST['noidung'] ? $_POST['noidung'] : '',
        ];
    $insert = $db->insert('tbl_dattiec', $data);
    if ($insert > 0) {
        $_SESSION['error'] = "Thêm thành công";
        header('Location: ./index.php');
    } else {
        $_SESSION['error'] = "không thành công";
        header('Location: ./add.php');
    }
} else {
    $sql1 = "select * from tbl_sanpham";
    $product = $db->fetchAll($sql1);
}

?>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
    <?php require_once "../layout/nav_bar_header.php"; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
    <?php require_once "../layout/nav_bar.php"; ?> 
        <!-- partial -->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="col-lg-12">
                    <div style="width:1190px" class="card">
                        <div class="card-body">
                            <h4 class="card-title">Thêm contact</h4>
                            <div class="basic-form">
                                <form method="POST" action="">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tên</label>
                                            <input type="text" name="ten" required class="form-control" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" name="email" required class="form-control" >
                                        </div>
                                        <div class="form-group col-md-6">

                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Sản Phẩm</label>
                                        <select id="inputState" name="prdID" required class="form-control">
                                            <?php foreach ($product as $item) : ?>
                                                <option value="<?php echo $item['id_sp'] ?>"><?php echo $item['tensp'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div> -->

                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" name="sdt" required class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Số lượng</label>
                                        <input type="text" name="soluong" class="form-control" >
                                    </div>
                                    <div class="form-row">
                                        <!-- <div class="form-group col-md-8"> -->
                                            <label>Địa chỉ đặt tiệc</label>
                                            <input type="text" name="diachi" required class="form-control">
                                        <!-- </div> -->
                                        <!-- <div class="form-group col-md-4">
                                            <label>Active</label>
                                            <select id="inputState" name="active" required class="form-control">
                                                <option value="1">Hiển Thị</option>
                                                <option selected="selected" value="0">Ẩn</option>
                                            </select>
                                        </div> -->

                                    </div>
                                    <div class="form-group">
                                        <label>Ngày</label>
                                        <input type="date" name="ngay" required class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Giờ</label>
                                        <input type="time" name="gio" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <input type="text" name="noidung" class="form-control" >
                                    </div>

                                    <button type="submit" class="btn btn-dark">Tạo contact</button>
                                </form>
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
    <script src="./../../public/ckeditor/ckeditor.js"></script>
</body>

</html>