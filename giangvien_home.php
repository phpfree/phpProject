<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Giảng viên</title>
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/signin.css">
        <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <div class="container body-content">
            <div class="page-header">
                <h2 style="color: darkblue;">
                    HỆ THỐNG QUẢN LÝ NHÓM LÀM NIÊN LUẬN</h2>
            </div> 
            <!-- Static navbar -->  
            <nav class="navbar navbar-default">
                <div class="container">                
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">                        
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="?cn=ttgv" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Giảng viên
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="?cn=ttgv">Thông tin cá nhân</a></li>
                                    <li class="divider"></li>
                                    <li><a href="?cn=dmk">Đổi mật khẩu</a></li>
                                    <li class="divider"></li>
                                    <li><a href="?cn=quantri">Quản trị người dùng</a></li>
                                </ul>
                            </li>
                            <li><a href="?cn=theodoidetai">Kế hoạch</a></li>
                            <li><a href="?cn=dsdt">Đề tài</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Chấm điểm
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="?cn=taotc">Tiêu chí</a></li>
                                    <li class="divider"></li>
                                    <li><a href="?cn=nhapdiem">Nhập điểm</a></li>

                                </ul>
                            </li>
                            <li><a href="?cn=qldiendan">Diễn đàn</a></li>                        
                        </ul>
                        <ul class="nav navbar-nav">
                            <li><a href="?cn=dangnhap">Đăng nhập</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/container -->
            </nav>

            <div class="row">
                <?php
                if (isset($_GET['cn'])) {
                    if ($_GET['cn'] == "ttgv")
                        include("giaodien/thong-tin-giang-vien.php");
                    if ($_GET['cn'] == "dmk")
                        include("giaodien/doi-mat-khau.php");
                    if ($_GET['cn'] == "quantri")
                        include("giaodien/quan-tri-nguoi-dung.php");
                    if ($_GET['cn'] == "themnguoidung")
                        include("giaodien/them-nguoi-dung.php");
                    if ($_GET['cn'] == "capnhatnguoidung")
                        include("giaodien/cap-nhat-nguoi-dung.php");

                    if ($_GET['cn'] == "dsdt")
                        include("giaodien/danh-sach-de-tai.php");
                    if ($_GET['cn'] == "themdt")
                        include("giaodien/them-de-tai.php");

                    if ($_GET['cn'] == "theodoidetai")
                        include("giaodien/theo-doi-lam-de-tai.php");

                    if ($_GET['cn'] == "taotc")
                        include("giaodien/quy-dinh-tieu-chi.php");
                    if ($_GET['cn'] == "nhapdiem")
                        include("giaodien/nhap-diem.php");

                    if ($_GET['cn'] == "qldiendan")
                        include("giaodien/quan-ly-dien-dan.php");
                    if ($_GET['cn'] == "thaoluan")
                        include("giaodien/chu-de-thao-luan.php");
                    if ($_GET['cn'] == "phucdap")
                        include("giaodien/them-chu-de-thao-luan.php");

                    if ($_GET['cn'] == "dangnhap")
                        include("giaodien/dang-nhap.php");
                }
                ?>
            </div> <!-- /container -->

            <hr>
            <footer class="footer">
                <p>&copy; Company 2015</p>
            </footer>
        </div>    
    </body>
</html>
