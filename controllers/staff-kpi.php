<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Công Ty Dược Phẩm Hồi Xuân</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.sidebar').find('.active').each(function(){
        $(this).find('a').css('color','red','!important');
      });
      $('.sidebar').find('.nav-item').not('.active').each(function(){
        $(this).find('a').css('color','#479eb1','!important');
      });
      $('.nav-item').onclick(function(){
          $(this).addClass('active');
          $(this).children().css('color','red','!important');

      });
    });
  </script>
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-light bg-light static-top">

  

    <a class="navbar-brand mr-1" style="color: green;" href="../index-leader.php">
    
      <img src="../icon-4.png" width="30" height="30" class="d-inline-block align-top" alt="" >  Dược Phẩm Hồi Xuân
    </a>

    

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
    </form>
    <!-- Navbar -->

    <ul class="navbar-nav ml-auto ml-md-0">
      <li id="name" style="color: #998e8e;"><p style="padding-top: 7%">Trưởng Phòng </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Cài đặt</a>
              
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Đăng Xuất</a>
          </div>
        </li>
    </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav bg-light">
        <li class="nav-item">
          <a class="nav-link" href="#">
           <i class="fa fa-tablets fa-3x"></i>
           <span>Phòng Nhân Sự</span>
         </a>
       </li>
       <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Trưởng Phòng</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Quản Lý</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="../controllers/leader/quanlynhanvien.php">Nhân viên </a>
          <a class="dropdown-item" href="../job-list.php">Công Việc</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Tuyển Dụng</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
         
         <a class="dropdown-item" href="controllers/leader/quanlyungvien.php">Ứng Viên</a>
         <a class="dropdown-item" href="controllers/leader/quanlydangtuyen.php">Đăng Tuyển</a>
         <a class="dropdown-item" href="controllers/leader/quanlyphongvan.php">Phỏng Vấn</a>
       </div>
     </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Thống Kê</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="controllers/kpi-all.php">Phòng ban</a>
        <a class="dropdown-item" href="controllers/staff-kpi.php">Nhân Viên</a>
        
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>KPI</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="controllers/leader-kpi.php">Cá Nhân</a>
      </div>
    </li>
  </ul>          

  <div id="content-wrapper">
    
    <div class="modal modal-example" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ol>
              <li>Công việc: Quản lý nhân viên vệ sinh, tạp vụ công ty</li>
              <li>Người thực hiện: Quý Văn Bửu</li>
              <li>Chi tiết công việc: Thu thập bảng báo cáo vệ sinh hàng ngày của nhân viên vệ sinh công ty,kiểm tra kết quả và gửi cáo cáo hàng ngày cho trưởng phòng</li>
              <li><a href="#">Bảng báo cáo vệ sinh hàng ngày</a></li>
            </ol>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="content-wrapper">
    
    <div class="modal modal-example3" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ol>
              <li>Công việc: Quản lý nhân viên vệ sinh, tạp vụ công ty</li>
              <li><div class="form-group">
  <label for="sel1">Người thực hiện</label>
  <select class="form-control" id="sel1">
    <option>Quý Văn Bửu</option>
    <option>Nguyễn Văn Thị</option>
    <option>Trần Thị Văn</option>
    <option>Đau Văn Đớn</option>
  </select>
</div></li>
              <li>Chi tiết công việc: Thu thập bảng báo cáo vệ sinh hàng ngày của nhân viên vệ sinh công ty,kiểm tra kết quả và gửi cáo cáo hàng ngày cho trưởng phòng</li>
              <li><a href="#">Bảng báo cáo vệ sinh hàng ngày</a></li>
            </ol>
          </div>

          <div class="modal-footer">
          <button type="button" class="btn btn-success">Thay đổi</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>

    <div class="modal modal-example2" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ol>
              <li>Công việc: Tìm kiếm hồ sơ phỏng vấn cho vị trí lao công</li>
              <li>Người thực hiện: Nguyễn Văn Sửu</li>
              <li>Chi tiết công việc: Đăng tin tuyển dụng, thu thập hồ sơ ứng viên và lọc hồ sơ để tìm hồ sơ phẩn vấn</li>
              <li>Thời gian gửi yêu cầu: 9h30 AM ngày 8/12/2019</li>
            </ol>
          </div>

          

          <div class="modal-footer">
            
            <button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
        Bảng danh sách công việc đang thực hiện</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Công việc</th>
                  <th>Người thực hiện</th>
                  <th>Thời gian gửi yêu cầu</th>
                  <th>Chi tiết</th>
                  <th>Điều chỉnh</th>
                  <th>Hủy bỏ</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Quản lý nhân viên vệ sinh, tạp vụ công ty</td>
                  <td>Quý Văn Bửu</td>
                  <td>Hàng ngày</td>
                  
                  <td>
                    <button data-toggle="modal" data-target=".modal-example" id="todo" class="btn btn-info">Chi tiết
                    </button>
                  </td>
                  <td>
                      <button data-toggle="modal" data-target=".modal-example3" id="progress" class="btn btn-warning">Chỉnh sửa
                  </td>
                  <td>
                    
                  </td>
                </tr>

                <tr>
                  <td>Tìm kiếm hồ sơ phỏng vấn cho vị trí lao công</td>
                  <td>Nguyễn Văn Sửu</td>
                  <td>8/12/2019</td>
                  <td>
                    <button data-toggle="modal" data-target=".modal-example2" id="todo" class="btn btn-info">Chi tiết
                    </button>
                  </td>
                  <td>
                      <button data-toggle="modal" data-target=".modal-example4" id="progress" class="btn btn-warning">Chỉnh sửa
                  </td>
                  <td>
                    <button data-toggle="modal" data-target=".modal-example5" id="done" class="btn btn-danger">Hủy
                    </button>
                  </td>
                </tr>

                <div class="modal modal-example4" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ol>
              <li>Công việc: Tìm kiếm hồ sơ phỏng vấn</li>
              <li>Người thực hiện<input type="text" class="form-control" placeholder="Nhân viên"></li>
              <li>Chi tiết công việc:
              <input type="text" class="form-control" placeholder="Mô tả">
              </li>
              <li>Thời gian hoàn tất
              <div class="form-group row">
  
  <div class="col-10">
    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
  </div>
              </a></li>
            </ol>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success">Thay đổi</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal modal-example5" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              Bấm "Hủy bỏ" để hủy bỏ công việc, điều này sẽ được thông báo tới nhân viên thực hiện!
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy bỏ</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

                
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Cập nhật 11:59 PM ngày 14/12/2019</div>
      </div>
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
              <a class="btn btn-primary" href="../login.html">Logout</a>
            </div>
          </div>
        </div>
      </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">

          <span><h2>Nhóm 2 - Phòng Nhân Sự<h2></span>
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
        <h5 class="modal-title" id="exampleModalLabel">Chắc chắn đăng xuất?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Lựa chọn "Đăng xuất" bên dưới nếu bạn chắc chắn muốn thoát khỏi phiên làm việc hiện tại</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button>
        <a class="btn btn-primary" href="index.html">Đăng xuất</a>
      </div>
    </div>
  </div>
</div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../js/demo/datatables-demo.js"></script>
    <script src="../js/demo/chart-area-demo.js"></script>
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script type="text/javascript">
    $(document).ready(function(){
      $('.sidebar').find('.active').each(function(){
        $(this).find('a').css('color','red','!important');
      });
      $('.sidebar').find('.nav-item').not('.active').each(function(){
        $(this).find('a').css('color','#479eb1','!important');
      });
      $('.nav-item').onclick(function(){
          $(this).addClass('active');
          $(this).children().css('color','red','!important');

      });
    });
  </script>
  </body>
  </html>
  <script type="text/javascript">
    $('.button').on('click',function(e){
      var $status = $(this).attr('id');
      switch ($status) {
        case 'todo':
        $('.modal-example .modal-title').html('To Do List');
        break;
        case 'progress':
        $('.modal-example .modal-title').html('In Progress List');
        break;
        case 'done':
        $('.modal-example .modal-title').html('Done List');
        break;
      }
    })
  </script>