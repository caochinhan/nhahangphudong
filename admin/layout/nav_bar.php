<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="../" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?php echo $base_url?>public/site/images/faces/face.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Phạm Thành Quang</span>
                  <span class="text-secondary text-small">Quản lí</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>   
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_url?>admin/user/index.php">
                <span class="menu-title">User</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_url?>admin/product/index.php">
                <span class="menu-title">Sản phẩm</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_url?>admin/khachhang/index.php">
                <span class="menu-title">Khách hàng</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_url?>admin/nhanvien/index.php">
                <span class="menu-title">Nhân viên</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_url?>admin/baiviet/index.php">
                <span class="menu-title">Bài viết</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Oder</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $base_url?>admin/datban/index.php"> Đặt bàn </a></li>

                </ul>
              </div>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo $base_url?>admin/dattiec/index.php"> Đặt tiệc tại gia </a></li>

                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_url?>admin/kho/index.php">
                <span class="menu-title">Kho</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_url?>admin/khuyenmai/index.php">
                <span class="menu-title">Khuyến mãi</span>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_url?>admin/hoadon/index.php">
                <span class="menu-title">Hóa đơn</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_url?>admin/contact/index.php">
                <span class="menu-title">Contact</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $base_url?>admin/address/index.php">
                <span class="menu-title">Address</span>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a> -->
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/icons/mdi.html">
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Forms</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="/fashi/main"> Web </a></li>

                </ul>
              </div>
            </li>

            </li>
          </ul>
        </nav>