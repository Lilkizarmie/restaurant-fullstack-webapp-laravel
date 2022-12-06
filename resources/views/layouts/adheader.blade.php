<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="./admin/img/favicon.png" rel="apple-touch-icon">
    <link href="./admin/img/favicon.png" rel="icon">
    <title>Cheffemi Admin</title>
    <link href="../../../css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Linearicons/Font/demo-files/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/owl-carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/apexcharts-bundle/dist/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
</head>

<body>
    <main class="ps-main">
        <div class="ps-main__sidebar">
            <div class="ps-sidebar">
                <div class="ps-sidebar__top">
                    <div class="ps-block--user-wellcome">
                        <div class="ps-block__left"><img src="img/user/admin.jpg" alt=""></div>
                        <div class="ps-block__right">
                            <p>Hello,<a href="#">Admin</a></p>
                        </div>
                        <div class="ps-block__action"><a href="#"><i class="icon-exit"></i></a></div>
                    </div>
                    <div class="ps-block--earning-count"><small>Earning</small>
                        <h3>$12,560.55</h3>
                    </div>
                </div>
                <div class="ps-sidebar__content">
                    <div class="ps-sidebar__center">
                        <ul class="menu">
                            <li><a class="active" href="index.html"><i class="icon-home"></i>Dashboard</a></li>
                            <li><a href="products.html"><i class="icon-database"></i>Products</a></li>
                            <li><a href="orders.html"><i class="icon-bag2"></i>Orders</a></li>
                            <li><a href="customers.html"><i class="icon-users2"></i>Customers</a></li>
                            <li><a href="coupons.html"><i class="icon-percent-circle"></i>Coupons</a></li>
                            <li><a href="Categories.html"><i class="icon-papers"></i>Categories</a></li>
                            <li><a href="settings.html"><i class="icon-cog"></i>Settings</a></li>
                        </ul>
                    </div>
                    <div class="ps-sidebar__footer">
                        <div class="ps-copyright"><img src="img/logo.png" alt="">
                            <p>&copy;2022 Cheffemi - simplify lives. <br> All rights reversed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script src="{{ asset('admin/plugins/jquery.min.js') }}"></script>
<script src="{{ asset('admin/plugins/popper.min.js') }}"></script>
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('admin/plugins/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/apexcharts-bundle/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/js/chart.js') }}"></script>
<!-- custom code-->
<script src="{{ asset('admin/js/main.js') }}"></script>