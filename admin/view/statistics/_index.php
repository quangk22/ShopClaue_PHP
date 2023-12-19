<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link rel="shortcut icon" href="../../public/media/img/desktop2.png" type="">
    <link href="../../public/admin/css/style.css" rel="stylesheet" />
    <script src="../../public/admin/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include_once '../view/inc/_navbar.php' ?>
    <div id="layoutSidenav">
        <?php include_once '../view/inc/_sideleft.php' ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4 ">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body block">
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1">Inventory</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php foreach ($inventory as $numberProducts) { ?>
                                            <?php echo $numberProducts['quantity'] ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="../products/index.php">View
                                        Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1">Current customers</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php foreach ($customers as $customersUser) { ?>
                                            <?php echo $customersUser['user'] ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="../users/index.php">View
                                        Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1">Revenue</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php foreach ($revenue as $revenues) { ?>
                                            $
                                            <?php echo $revenues['revenue'] ?>.000
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="../orders/index.php">View
                                        Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold  text-uppercase mb-1">Order has not been
                                        delivered </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <?php foreach ($delivered as $numberOrder) { ?>
                                            <?php echo $numberOrder['number'] ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="../orders/index.php">View
                                        Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Area Chart Example
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Bar Chart Example
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="200"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Code</th>
                                        <th>Status</th>
                                        <th>User_id</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>Product</th>
                                        <th>Total</th>
                                       
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>STT</th>
                                        <th>Code</th>
                                        <th>Status</th>
                                        <th>User_id</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>Product</th>
                                        <th>Total</th>
                                       
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $index = 0; ?>
                                    <?php foreach ($order as $order) { ?>
                                        <tr>
                                            <td>
                                                <?php echo ++$index; ?>
                                            </td>
                                            <td>
                                                <?php echo $order['code']; ?>
                                            </td>
                                            <td>
                                                <?php echo $order['status']; ?>
                                            </td>
                                            <td>
                                                <?php echo $order['users_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $order['address']; ?>
                                            </td>
                                            <td>
                                                <?php echo $order['phone']; ?>
                                            </td>
                                            <td>
                                                <?php echo $order['date']; ?>
                                            </td>
                                            <td>
                                                <?php foreach ($order['name'] as $productName): ?>
                                                    <?php echo $productName; ?>,
                                                <?php endforeach; ?>
                                            </td>
                                            <td>
                                                $<?php echo $order['total']; ?>.000
                                            </td>
                                           
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="../../public/admin/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../public/admin/js/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../../public/admin/js/scripts.js"></script>
    <script src="../../public/admin/js/simple-datatables@latest.js" crossorigin="anonymous"></script>
    <script src="../../public/admin/js/datatables-simple-demo.js"></script>
    <script>

        // Dữ liệu mẫu (số lượng bán theo thời gian)
        var salesData = {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            datasets: [{
                label: 'Số lượng bán',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                data: [500, 600, 700, 400, 800, 900, 100, 1100, 120, 130, 140, 100],
            }]
        };

        // Cấu hình biểu đồ
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    type: 'category',
                    labels: salesData.labels,
                },
                y: {
                    beginAtZero: true
                }
            }
        };

        // Lấy thẻ canvas và vẽ biểu đồ
        var ctx = document.getElementById('myAreaChart').getContext('2d');
        var myAreaChart = new Chart(ctx, {
            type: 'line',
            data: salesData,
            options: chartOptions
        });
    </script>
    <script>
        // Dữ liệu mẫu (doanh thu theo các tháng)
        
        var revenueData = {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            datasets: [{
                label: 'Doanh thu',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                data: [500, 600, 700, 400, 800, 900, 100, 1100, 120, 130, 140, 100],
            }]
        };

        // Cấu hình biểu đồ
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    type: 'category',
                    labels: revenueData.labels,
                },
                y: {
                    beginAtZero: true
                }
            }
        };

        // Lấy thẻ canvas và vẽ biểu đồ cột
        var ctx = document.getElementById('myBarChart').getContext('2d');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: revenueData,
            options: chartOptions
        });
    </script>
</body>

</html>