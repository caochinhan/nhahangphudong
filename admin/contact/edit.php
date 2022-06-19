<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__ .'/../../lib/autoload.php'); ?>
    <?php require_once "../layout/header.php"; ?>
</head>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contact WHERE id=$id ";
    $contact = $db->fetchOne($sql);
    // $sql2 = "select * from user";
    // $user = $db->fetchAll($sql2);
    $sql3 = "select * from prdchill";
    $product = $db->fetchAll($sql3);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data =
        [
            "name" => $_POST['name'] ? $_POST['name'] : '',
            "email" => $_POST['email'] ? $_POST['email'] : '',
            "content" => $_POST['content'] ? $_POST['content'] : '',
            "rate" => $_POST['rate'] ? $_POST['rate'] : '',
            "active" => $_POST['active'] ? $_POST['active'] : '',
        ];

    $update = $db->update('contact', $data, array('id' => $id));
    if ($update > 0) {
        $_SESSION['error'] = "sửa thành công";
        header('Location: ./index.php');
    } else
        $_SESSION['error'] = "không thành công";
}
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
                <div class="col-lg-12">
                    <div style="width:1190px" class="card">
                        <div class="card-body">
                            <h4 class="card-title">Sửa Category</h4>
                            <div class="basic-form">
                                <form method="POST" action="" enctype="multipart/form-data">
                                
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tên</label>
                                            <input type="text" value="<?php echo $contact['name'] ?>" name="name" required class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" value="<?php echo $contact['email'] ?>" name="email" required class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">

                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Sản Phẩm Cha</label>
                                        <select id="inputState" name="prdID" required class="form-control">
                                            <?php foreach ($product as $item) : ?>
                                                <?php if ($item['id'] == $contact['prdID']) : ?>
                                                    <option selected value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                                                <?php else : ?>
                                                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div> -->
                                    <div class="form-group">
                                        <label>Content</label>
                                        <input type="text" required value="<?php echo $contact['content'] ?>" name="content" class="form-control">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Content</label>
                                        <input type="text" value="<?php echo $contact['respone'] ?>" name="respone" class="form-control">
                                    </div> -->


                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Rate</label>
                                            <input type="number" name="rate" required value="<?php echo $contact['rate'] ?>" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Active</label>
                                            <select id="inputState" name="active" required class="form-control">
                                                <?php if ($contact['active'] == 1) :  ?>
                                                    <option selected value="1">Hiển Thị</option>
                                                    <option value="0">Ẩn</option>
                                                <?php else : ?>
                                                    <option value="1">Hiển Thị</option>
                                                    <option selected value="0">Ẩn</option>
                                                <?php endif; ?>
                                            </select>
                                        </div>

                                    </div>


                                    <button type="submit" class="btn btn-dark">Sửa contact</button>
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