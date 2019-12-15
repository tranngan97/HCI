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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
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

  

    <a class="navbar-brand mr-1" style="color: green;" href="index-leader.php">
    
      <img src="icon-4.png" width="30" height="30" class="d-inline-block align-top" alt="" >  Dược Phẩm Hồi Xuân
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
          <a class="dropdown-item" href="controllers/leader/quanlynhanvien.php">Nhân viên </a>
          <a class="dropdown-item" href="job-list.php">Công Việc</a>
          
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

    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        
        <li class="breadcrumb-item active">Thông báo</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">15 Tin Nhắn Mới!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" data-toggle="modal" data-target="#exampleModalScrollable">
              <span class="float-left">Chi tiết</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
          <!-- leader-message-->
                  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Thông báo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <ul>
                  <li>Bạn nhận được <a href="controllers/leader/quanlyungvien.php">10 hồ sơ ứng tuyển mới</a></li>
                  <li>Bạn có <a href="controllers/leader/quanlyphongvan.php">5 Ứng viên đang chờ phỏng vấn</a></li>
                </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                
              </div>
            </div>
          </div>
        </div>
        <!-- leader-message-->
          
        </div>  
        
  
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-list"></i>
              </div>
              <div class="mr-5">11 công việc đang thực...</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Chi tiết</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">123 New Orders!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas fa-fw fa-life-ring"></i>
              </div>
              <div class="mr-5">13 New Tickets!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <ol class="breadcrumb">
        
        <li class="breadcrumb-item active">Biểu đồ thống kê...</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-chart-area"></i>
        KPI</div>
        <div class="card-body">
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
          <script type="text/javascript">
            Chart.platform.disableCSSInjection = true;
            var ctx = document.getElementById('myAreaChart').getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                  label: '# of Votes',
                  data: [12, 19, 3, 5, 2, 3],
                  backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero: true
                    }
                  }]
                }
              }
            });
          </script>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

      <!-- DataTables Example -->
      <ol class="breadcrumb">
        
        <li class="breadcrumb-item active">Chi Tiết</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
        Danh sách nhân viên công ty</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tên</th>
                  <th>Vị trí</th>
                  <th>Phòng</th>
                  <th>Tuổi</th>
                  <th>Ngày bắt đầu làm</th>
                  <th>Lương</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Trần Văn Tý</td>
                  <td>Nhân viên Marketing</td>
                  <td>P.Kinh doanh</td>
                  <td>22</td>
                  <td>2012/03/29</td>
                  <td>433,060đ</td>
                </tr>
                <tr>
                  <td>Nguyễn Văn Sửu</td>
                  <td>Chuyên viên tuyển dụng</td>
                  <td>P.Nhân sự	</td>
                  <td>33</td>
                  <td>2008/11/28</td>
                  <td>162,700đ</td>
                </tr>
                <tr>
                  <td>Trần Thị Dần</td>
                  <td>Nhân viên Sales</td>
                  <td>P.Kinh doanh</td>
                  <td>61</td>
                  <td>2012/12/02</td>
                  <td>372,000đ</td>
                </tr>
                <tr>
                  <td>Cao Xuân Thấp</td>
                  <td>Dược sĩ</td>
                  <td>Nhà SX</td>
                  <td>23</td>
                  <td>2008/12/13</td>
                  <td>103,600đ</td>
                </tr>
                <tr>
                  <td>Béo Thị Phì</td>
                  <td>Kế toán viên</td>
                  <td>P.Kế toán	</td>
                  <td>30</td>
                  <td>2008/12/19</td>
                  <td>90,560đ</td>
                </tr>
                <tr>
                  <td>Buồn Bá Chán</td>
                  <td>Nhân viên Marketing</td>
                  <td>P.Kinh doanh	</td>
                  <td>22</td>
                  <td>2013/03/03</td>
                  <td>342,000đ</td>
                </tr>
                <tr>
                  <td>Sáp Văn Mười</td>
                  <td>Kế toán trưởng</td>
                  <td>P.Kế toán	</td>
                  <td>36</td>
                  <td>2008/10/16</td>
                  <td>$470,600đ</td>
                </tr>
                <tr>
                  <td>Ba Đôi Thông</td>
                  <td>Nhân viên chăm sóc khách hàng</td>
                  <td>P.logistic</td>
                  <td>43</td>
                  <td>2012/12/18</td>
                  <td>313,500đ</td>
                </tr>
                <tr>
                  <td>Dây Đồng Văn Hoa</td>
                  <td>Nhân viên Sales</td>
                  <td>P.Kinh doanh	</td>
                  <td>19</td>
                  <td>2010/03/17</td>
                  <td>385,750đ</td>
                </tr>
                <tr>
                  <td>Quý Văn Bửu</td>
                  <td>Nhân viên Sales</td>
                  <td>P.Kinh doanh	</td>
                  <td>66</td>
                  <td>2012/11/27</td>
                  <td>$198,500đ</td>
                </tr>
                <tr>
                  <td>Đảo Văn Tặc</td>
                  <td>Dược sĩ</td>
                  <td>Nhà SX	</td>
                  <td>64</td>
                  <td>2010/06/09</td>
                  <td>725,000đ</td>
                </tr>
                <tr>
                  <td>Con Cháu Cha Ông</td>
                  <td>Ngồi cạnh giám đốc</td>
                  <td>Cùng phòng với bố</td>
                  <td>59</td>
                  <td>2009/04/10</td>
                  <td>237,500đ</td>
                </tr>
                <tr>
                  <td>Cháu Con Cha Ông</td>
                  <td>Chuyên viên tuyển dụng</td>
                  <td>P.Nhân sự</td>
                  <td>41</td>
                  <td>2012/10/13</td>
                  <td>132,000đ</td>
                </tr>
                <tr>
                  <td>Khổ Văn Sở</td>
                  <td>Nhân viên vệ sinh</td>
                  <td></td>
                  <td>41</td>
                  <td>2012/10/13</td>
                  <td>2000,000,000đ</td>
                </tr>
                <tr>
                  <td>Sung Văn Sướng</td>
                  <td>Tạp vụ</td>
                  <td></td>
                  <td>59</td>
                  <td>2009/04/10</td>
                  <td>1000,000,000đ</td>
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
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
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