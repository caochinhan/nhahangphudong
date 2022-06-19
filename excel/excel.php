<?php
include'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Export</title> -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>SAN PHAM</h2>
                <table style="width:100%" border="1" style="border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID SAN PHAM</th>
                            <th>TEN SAN PHAM</th>
                            <th>GIA</th>
                            <!-- <th>KHUYEN MAI</th>
                            <th>GIA KHUYEN MAI</th> -->
                            <th>HINH ANH</th>
                            <th>CHU THICH</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sn=1;
                        $order_detail_qry = "SELECT * from tbl_sanpham";
                        $order_detail_res = mysqli_query($con,$order_detail_qry);
                        while($order_detail_data=mysqli_fetch_assoc($order_detail_res))
                        {
                            ?>
                            <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo $order_detail_data['id_sp']; ?> </td>
                                <td><?php echo $order_detail_data['tensp']; ?> </td>
                                <td><?php echo $order_detail_data['gia']; ?> </td>
                                <!-- <td><?php echo $order_detail_data['khuyenmai']; ?> </td>
                                <td><?php echo $order_detail_data['gia_km']; ?> </td> -->
                                <td><?php echo $order_detail_data['hinhanh']; ?> </td>
                                <td><?php echo $order_detail_data['chuthich']; ?> </td>
                            </tr>
                            <?php
                            $sn++;
                        }
                        ?>
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="./order_detail_data_dowload.php" class="btn btn-primary" target="_blank">Data Export</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>