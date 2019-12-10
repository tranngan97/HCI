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
      <li id="name" style="color: white;"><p style="padding-top: 20%">LEADER</li>
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
      <ul class="sidebar navbar-nav bg-light">
        <li class="nav-item">
          <a class="nav-link" href="index-leader.php">
           <i class="fa fa-tablets fa-3x"></i>
           <span>Dược Phẩm HTML</span>
         </a>
       </li>
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
           <a class="dropdown-item" href="../../quytrinh.html">Quản Lý Nhân Sự</a>
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
          <a class="dropdown-item" href="quanlydangtuyen.php">Đăng Tuyển</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Thống Kê</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
           <a class="dropdown-item" href="../kpi-all.php">Phòng ban</a>
          <a class="dropdown-item" href="../staff-kpi.php">Nhân Viên</a>
          <a class="dropdown-item" href="../job-list.php">Công Việc</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>KPI</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="../leader-kpi.php">Cá Nhân</a>
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
                  <li>Abcd</li>
                  <li>Xyz</li>
                  <li>!@#$</li>
                  <li>%^&*</li>
                </ol>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
            Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tên</th>
                      <th>Vị Trí</th>
                      <th>Phòng</th>
                      <th>Chưa Làm</th>
                      <th>Đang Làm</th>
                      <th>Đã Làm</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td></td>
                      <td></td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="todo" class="button btn-success">To Do
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="progress" class="button btn-primary">Progress
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="done" class="button btn-danger">Done
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="todo" class="button btn-success">To Do
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="progress" class="button btn-primary">Progress
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="done" class="button btn-danger">Done
                        </button>
                      </td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>
                        <button data-toggle="modal" data-target=".modal-example" id="todo" class="button btn-success">To Do
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="progress" class="button btn-primary">Progress
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="done" class="button btn-danger">Done
                        </button>
                      </td>
                  </tr>
                  <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>
                        <button data-toggle="modal" data-target=".modal-example" id="todo" class="button btn-success">To Do
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="progress" class="button btn-primary">Progress
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="done" class="button btn-danger">Done
                        </button>
                      </td>
                  </tr>
                  <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>
                        <button data-toggle="modal" data-target=".modal-example" id="todo" class="button btn-success">To Do
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="progress" class="button btn-primary">Progress
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="done" class="button btn-danger">Done
                        </button>
                      </td>
                  </tr>
                  <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>
                        <button data-toggle="modal" data-target=".modal-example" id="todo" class="button btn-success">To Do
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="progress" class="button btn-primary">Progress
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="done" class="button btn-danger">Done
                        </button>
                      </td>
                  </tr>
                  <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="todo" class="button btn-success">To Do
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="progress" class="button btn-primary">Progress
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="done" class="button btn-danger">Done
                        </button>
                      </td>
                    </td>
                    <tr>
                      <td>Rhona Davidson</td>
                      <td>Integration Specialist</td>
                      <td>Tokyo</td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="todo" class="button btn-success">To Do
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="progress" class="button btn-primary">Progress
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="done" class="button btn-danger">Done
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Colleen Hurst</td>
                      <td>Javascript Developer</td>
                      <td>San Francisco</td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="todo" class="button btn-success">To Do
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="progress" class="button btn-primary">Progress
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="done" class="button btn-danger">Done
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>Sonya Frost</td>
                      <td>Software Engineer</td>
                      <td>Edinburgh</td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="todo" class="button btn-success">To Do
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="progress" class="button btn-primary">Progress
                        </button>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target=".modal-example" id="done" class="button btn-danger">Done
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
                  <a class="btn btn-primary" href="../../login.html">Logout</a>
                </div>
              </div>
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