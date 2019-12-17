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
  <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../../css/sb-admin.css" rel="stylesheet">
  <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>
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
    
      <img src="../../../icon-4.png" width="30" height="30" class="d-inline-block align-top" alt="" >  Dược Phẩm Hồi Xuân
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
        <h1 style="color: blue; font-size: 30px;text-transform: capitalize;">Phòng Logistic</h1>
        <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Các phòng khác
  </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="thongkephongban_dinhhuong.php">P.Định Hướng</a>
      <a class="dropdown-item" href="../kpi-all.php">P.Nhân Sự</a>
      <a class="dropdown-item" href="thongkephongban_hanhchinh.php">P.Hành Chính</a>
      <a class="dropdown-item" href="thongkephongban_kinhdoanh.php">P.Kinh Doanh</a>
      <a class="dropdown-item" href="thongkephongban_ketoan.php">P.Kế Toán</a>
      <a class="dropdown-item" href="thongkephongban_nhasanxuat">Nhà Sản Xuất</a>
      <a class="dropdown-item" href="thongkephongban_haucanhotro">Hậu Cần - Hỗ Trợ</a>
      <a class="dropdown-item" href="thongkephongbanke_hoach">Kế Hoạch</a>
      
    </div>
    <h3 style="color: green; font-size: 25px;text-transform: capitalize;margin-top: 40px">Bảng thống kê tỷ lệ hoàn thành công việc của phòng từng tuần trong </h3>
  <div style="display:flex;">
    <div style="margin-right:10px"> 
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Tháng 1
      </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Tháng 1</a>
          <a class="dropdown-item" href="#">Tháng 2</a>
          <a class="dropdown-item" href="#">Tháng 3</a>
          <a class="dropdown-item" href="#">Tháng 4</a>
          <a class="dropdown-item" href="#">Tháng 5</a>
          <a class="dropdown-item" href="#">Tháng 6</a>
          <a class="dropdown-item" href="#">Tháng 7</a>
          <a class="dropdown-item" href="#">Tháng 8</a>
          <a class="dropdown-item" href="#">Tháng 9</a>
          <a class="dropdown-item" href="#">Tháng 10</a>
          <a class="dropdown-item" href="#">Tháng 11/a>
          <a class="dropdown-item" href="#">Tháng 12</a>
        </div>
    </div>
    <div>
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Năm 2019
    </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="#">2019</a>
        <a class="dropdown-item" href="#">2018</a>
        <a class="dropdown-item" href="#">2017</a>
        <a class="dropdown-item" href="#">2016</a>
        <a class="dropdown-item" href="#">2015</a>
        <a class="dropdown-item" href="#">2014</a>
        <a class="dropdown-item" href="#">2013</a>
      </div>
      <h3 style="color: green; font-size: 25px;text-transform: capitalize;">Tháng 1 Năm 2019</h3>
  </div>
  </div>
  

</div>
        <canvas id="myChart" style="max-width: 500px;"></canvas>
        </div>
          <h3 style="color: #078282; font-size: 25px;text-transform: capitalize;margin-top: 40px">Đồ thị biểu diễn mức độ hoàn thành công việc tính đến</h3>
        <div>
        <div style="display:flex;">
    <div style="margin-right:10px"> 
      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Quý 2
      </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Quý 1</a>
          <a class="dropdown-item" href="#">Quý 2</a>
          <a class="dropdown-item" href="#">Quý 3</a>
        </div>
    </div>
    <div>
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Năm 2019
    </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="#">2019</a>
        <a class="dropdown-item" href="#">2018</a>
        <a class="dropdown-item" href="#">2017</a>
        <a class="dropdown-item" href="#">2016</a>
        <a class="dropdown-item" href="#">2015</a>
        <a class="dropdown-item" href="#">2014</a>
        <a class="dropdown-item" href="#">2013</a>
      </div>
      <h3 style="color: #078282; font-size: 25px;text-transform: capitalize;">Quý 2 Năm 2019</h3>
  </div>
  </div>
        
        <canvas id="lineChart" style="max-width: 800px;"></canvas>
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
  <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../../../vendor/chart.js/Chart.min.js"></script>
    <script src="../../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../../vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../../../js/demo/datatables-demo.js"></script>
    <script src="../../../js/demo/chart-area-demo.js"></script>
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

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: ["Tuần 1", "Tuần 2", "Tuần 3", "Tuần 4"],
datasets: [{
label: 'Lượng công việc hoàn thành / chưa hoàn thành(%)',
data: [100, 94, 82, 65, 2, 3],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
'rgba(75, 192, 192, 0.2)',

],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)',

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
  <script>
    //line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
type: 'line',
data: {
labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7","Tháng 8", "Tháng 9","Tháng 10", "Tháng 11", "Tháng 12"],
datasets: [{
label: "Lượng công việc hoàn thành / chưa hoàn thành(%)",
data: [65, 59, 80, 81, 56, 55],
backgroundColor: [
'rgba(105, 0, 132, .2)',
],
borderColor: [
'rgba(200, 99, 132, .7)',
],
borderWidth: 1
},

]
},
options: {
responsive: true
}
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