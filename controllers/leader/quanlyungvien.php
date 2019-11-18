<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Công Ty Dược Phẩm HTML</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html"></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li id="name" style="color: white;"><p style="padding-top: 20%">BOSS</p></li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

     <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../../index-leader.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Quy Trình</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="login.html">Quản Lý</a>
          <a class="dropdown-item" href="register.html">Tuyển Dụng</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Quản Lý</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="quanlynhanvien.php">Nhân viên</a>
          <a class="dropdown-item" href="quanlyungvien.php">Ứng Viên</a>
          <a class="dropdown-item" href="quanlydangtuyen.php">Đăng tuyển</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Thống Kê</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="login.html">Phòng ban</a>
          <!-- <a class="dropdown-item" href="register.html">Nhân Viên</a> -->
          <a class="dropdown-item" href="register.html">Cá Nhân</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>KPI</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="kpi-all.php">Phòng ban</a>
          <a class="dropdown-item" href="staff-kpi.php">Nhân Viên</a>
          <a class="dropdown-item" href="leader-kpi.php">Cá Nhân</a>
        </div>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Quản lý ứng viên</a>
          </li>
          
        </ol>

        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Hồ sơ ứng viên</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Tên ứng viên</th>
                    <th>Vị trí ứng tuyển</th>
                    <th>Phòng ban</th>
                    <th>Trạng thái</th>
                    <th> </th>
                   
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Tên ứng viên</th>
                    <th>Vị trí ứng tuyển</th>
                    <th>Phòng ban</th>
                    <th>Trạng thái</th>
                    <th> </th>
                    
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Đặng Thị Hằng</td>
                    <td>Chuyên viên tuyển dụng</td>
                    <td>P.Nhân sự</td>
                    <td>Chờ xét duyệt</td>
                    <td>
                      <button name="button" type="button">Chi tiết</button>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>Trần Thị Ngân</td>
                    <td>Quản trị hành chính-nhân sự</td>
                    <td>P.Nhân sự</td>
                    <td>Chờ xét duyệt</td>
                    <td>
                     <button name="button" type="button">Chi tiết</button>
                   </td>
                  </tr>
                  <tr>
                    <td>Trần Văn Dũng</td>
                    <td>Kế toán viên</td>
                    <td>P.Kế toán</td>
                    <td>Đã xét duyệt</td>
                    <td>
                      <button name="button" type="button">Chi tiết</button>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>Nguyễn Văn Hiếu</td>
                    <td>Kế toán viên</td>
                    <td>P.Kế toán</td>
                    <td>Chờ xét duyệt</td>
                    <td>
                      <button name="button" type="button">Chi tiết</button>
                    </td>
                   
                  </tr>
                  <tr>
                    <td>Đặng Văn Đạt</td>
                    <td>Chuyên viên tuyển dụng</td>
                    <td>P.Nhân sự</td>
                    <td>Đã xét duyệt</td>
                    <td>
                      <button name="button" type="button">Chi tiết</button>
                    </td>
                   </tr>
                  <tr>
                    <td>Đặng Thị Khuyên</td>
                    <td>Chuyên viên tuyển dụng</td>
                    <td>P.Nhân sự</td>
                    <td>Đã xét duyệt</td>
                    <td>
                      <button name="button" type="button">Chi tiết</button>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>Nguyễn Văn Nam</td>
                    <td>Kế toán trưởng</td>
                    <td>P.Kế toán</td>
                    <td>Chờ xét duyệt</td>
                    <td>
                      <button name="button" type="button">Chi tiết</button>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>Ngô Diệc Phàm</td>
                    <td>Dược sĩ</td>
                    <td>P.Sản Xuất</td>
                    <td>Đã xét duyệt</td>
                    <td>
                      <button name="button" type="button">Chi tiết</button>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>Nguyễn Văn Khải</td>
                    <td>Nhân viên sales</td>
                    <td>P.kinh doanh</td>
                    <td>Chờ xét duyệt</td>
                    <td>
                      <button name="button" type="button">Chi tiết</button>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>Trần Văn Nam</td>
                    <td>Nhân viên Marketing</td>
                    <td>P.Kinh doanh</td>
                    <td>Đã xét duyệt</td>
                    <td>
                      <button name="button" type="button">Chi tiết</button>
                    </td>
                 
                  </tr>
                  <tr>
                    <td>Trần Văn Đông</td>
                    <td>Quản lý sản xuất</td>
                    <td>P.Sản xuất</td>
                    <td>Chờ xét duyệt</td>
                    <td>
                      <button name="button" type="button">Chi tiết</button>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>Nguyễn Hữu Nam</td>
                    <td>nhân viên nghiên cứu dược</td>
                    <td>P.Sản xuất</td>
                    <td>Chờ xét duyệt</td>
                    <td>
                      <button name="button" type="button">Chi tiết</button>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>Nguyễn Văn Long</td>
                    <td>Nhân viên sales</td>
                    <td>P.Kinh doanh</td>
                    <td>Đã xét duyệt</td>
                    <td>
                      <button name="button" type="button">Chi tiết</button>
                    </td>
                    
                  </tr>
                  <tr>
                    <td>Đặng Văn Tuấn</td>
                    <td>Nhân viên Marketing</td>
                    <td>P.Kinh doanh</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Trần Tuấn</td>
                    <td>Dược sĩ</td>
                    <td>P.Sản xuất</td>
                    <td>Chờ xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                  
                  </tr>
                  <tr>
                    <td>Nguyễn Mạnh</td>
                    <td>Nhân viên vận hành kho</td>
                    <td>P.Logistic</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Trần Trang</td>
                    <td>Nhân viên vận hành kho</td>
                    <td>P.Logistic</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                   
                  </tr>
                  <tr>
                    <td>Đặng Trang</td>
                    <td>Nhân viên thu mua </td>
                    <td>P.Logistic</td>
                    <td>Chờ xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Trần Hà</td>
                    <td>Nhân viên thu mua</td>
                    <td>P.Logistic</td>
                    <td>Chờ xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Nguyễn Hà</td>
                    <td>Nhân viên giao nhận</td>
                    <td>P.Logistic</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Trần Thảo</td>
                    <td>Dược sĩ</td>
                    <td>P.Sản Xuất</td>
                    <td>Chờ xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Phạm Thảo</td>
                    <td>Nhân viên giao nhận</td>
                    <td>P.Logistic</td>
                    <td>Chờ xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Nguyễn Ngân</td>
                    <td>Nhân viên chăm sóc khách hàng</td>
                    <td>P.Logistic</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Trần Hiếu</td>
                    <td>Nhân viên chăm sóc khách hàng</td>
                    <td>P.Logistic</td>
                    <td>Chưa xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Angelica Ramos</td>
                    <td>Trưởng phòng kinh doanh</td>
                    <td>P.Kinh doanh</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Gavin Joyce</td>
                    <td>Nhân viên Marketing</td>
                    <td>P.logistic</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Jennifer Chang</td>
                    <td>Dược sĩ</td>
                    <td>P.Sản xuất</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Phạm Sơn</td>
                    <td>Kế toán viên</td>
                    <td>P.Kế toán</td>
                    <td>Chờ xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Fiona Green</td>
                    <td>Chuyên viên tuyển dụng</td>
                    <td>P.Nhân sự</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                   
                  </tr>
                  <tr>
                    <td>Trần Sơn</td>
                    <td>Nhân viên sales</td>
                    <td>P.Kinh doanh</td>
                    <td>Chơ xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Michelle House</td>
                    <td>Kế toán trưởng</td>
                    <td>Phòng kế toán</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Suki Burks</td>
                    <td>Chuyên viên tuyển dụng</td>
                    <td>P.Nhân sự</td>
                    <td>Chờ xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Prescott Bartlett</td>
                    <td>Chuyên viên tuyển dụng</td>
                    <td>P.Nhân sự</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Nguyễn Văn Dũng</td>
                    <td>Nhân viên chăm sóc khách hàng</td>
                    <td>P.Logistic</td>
                    <td>Chờ xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Hiếu Trần</td>
                    <td>Nhân viên sales</td>
                    <td>P.Logistic</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  
                  
                  <tr>
                    <td>Jennifer Acosta</td>
                    <td>Nhân viên thu mua</td>
                    <td>P.Logistic</td>
                    <td>Chờ xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Cara Stevens</td>
                    <td>Nhân viên sales</td>
                    <td>P.Sản xuất</td>
                    <td>Chờ xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Hermione Butler</td>
                    <td>Quản lý chất lượng</td>
                    <td>P.Sản xuất</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Mạnh Nguyễn</td>
                    <td>Quản lý sản xuất</td>
                    <td>P.Sản xuất</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Jonas Alexander</td>
                    <td>Nhân viên Marketing</td>
                    <td>P.Logistic</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Shad Decker</td>
                    <td>Nhân viên vận hành kho</td>
                    <td>P.Logistic</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Michael Bruce</td>
                    <td>Trưởng phòng kế hoạch</td>
                    <td>P.Kế hoạch</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                  <tr>
                    <td>Donna Snider</td>
                    <td>Trưởng phòng định hướng</td>
                    <td>P.Định hướng</td>
                    <td>Đã xét duyệt</td>
                    <td><button name="button" type="button">Chi tiết</button></td>
                    
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->


        


      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../../vendor/chart.js/Chart.min.js"></script>
  <script src="../../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../../js/demo/datatables-demo.js"></script>
  <script src="../../js/demo/chart-area-demo.js"></script>

</body>

