<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="./controller/app.js"></script>
    <script src="./controller/nhanvien.controller.js"></script>
</head>

<body class="sb-nav-fixed" ng-app="MyApp" ng-controller="NhanVienController">
    <?php
    include_once 'includes/header.php';
    ?>
    <div id="layoutSidenav">
        <?php
        include_once 'includes/sidebar.php';
        ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tên nhân viên</th>
                                        <th>Giới tính</th>
                                        <th>Ngày sinh</th>
                                        <th>Quê quán</th>
                                        <th>SDT</th>
                                        <th>Email</th>
                                        <th>Cấp bậc</th>
                                        <th>Ngày tạo</th>
                                        <th>Ngày cập nhập</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="nv in nhanviens">
                                        <td>{{$index + 1 }}</td>
                                        <td>{{nv.ten_nhanvien}}</td>
                                        <td>{{nv.gioitinh}}</td>
                                        <td>{{nv.ngaysinh}}</td>
                                        <td>{{nv.quequan}}</td>
                                        <td>{{nv.sdt}}</td>
                                        <td>{{nv.<i class="mdi mdi-email-mark-as-unread:"></i>}}</td>
                                        <td>{{nv.capbac}}</td>
                                        <td>{{nv.created_at}}</td>
                                        <td>{{nv.updated_at}}</td>
                                        <td><a href="editNhanVien.php?id={{nv.id}}" class="btn btn-info">Edit</a></td>
                                        <td><a href="xoaNhanVien.php?id={{nv.id}}" onclick="return confirm('Ban co muon xoa khong?')" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php
            include_once 'includes/footer.php';
            ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
   
</body>

</html>