<?php
include'database.php';
  $data = array(
    array("firstname" => "Mary", "lastname" => "Johnson", "age" => 25),
    array("firstname" => "Amanda", "lastname" => "Miller", "age" => 18),
    array("firstname" => "James", "lastname" => "Brown", "age" => 31),
    array("firstname" => "Patricia", "lastname" => "Williams", "age" => 7),
    array("firstname" => "Michael", "lastname" => "Davis", "age" => 43),
    array("firstname" => "Sarah", "lastname" => "Miller", "age" => 24),
    array("firstname" => "Patrick", "lastname" => "Miller", "age" => 27)
  );
  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
   // if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }
  // filename for download
  $filename = "website_data_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $flag = false;
  $order_detail_qry = "SELECT * from tbl_sanpham";
  $order_detail_res = mysqli_query($con,$order_detail_qry);
  while(($row = mysqli_fetch_assoc($order_detail_res))) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\r\n";
      $flag = true;
    }
    cleanData($row);
    echo implode("\t", array_values($row)) . "\r\n";
  }
  exit;

?>

<table style="width:100%" border="1" style="border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID SAN PHAM</th>
                            <th>TEN SAN PHAM</th>
                            <th>GIA</th>
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
                                <td><?php echo $order_detail_data['hinhanh']; ?> </td>
                                <td><?php echo $order_detail_data['chuthich']; ?> </td>
                            </tr>
                            <?php
                            $sn++;
                        }
                        ?>
                    </tbody>
                </table>