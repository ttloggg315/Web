<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15.000+ Đồng hồ nam, đồng hồ nữ chính hãng | Đồng hồ Clock King</title>
    <link rel="icon" href="image/logock.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="js/script.js">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
                include("admincp/config/config.php");
                if(isset($_POST['dangky'])){
                    $tenkhachhang = $_POST['hovaten'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $matkhau = md5($_POST['matkhau']);
                    $dienthoai = $_POST['dienthoai'];
                    $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky (tenkhachhang,email,diachi,matkhau,dienthoai)VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
                    if($sql_dangky){
                        echo '<p style="color:green">Bạn Đã Đăng Ký Thành Công</p>';
                    }
                }
?>
<body>   
        <div>
            <div class="home" id="home">
                <h2><br></h2>
                <h2>ĐĂNG KÝ THÀNH VIÊN</h2>
            </div>
            <div class="header">

                <div id="menu-btn" class="fas fa-bars"></div>
                <a href="index.html"> <img src="image/icon.webp" alt=""> </a>
                <nav class="navbar">
                    <a href="index.html">Trang chủ</a>
                    <a href="gioithieu.html">Giới Thiệu</a>
                    <a href="donghonam.php">Đồng Hồ Nam</a>
                    <a href="donghonu.html">Đồng Hồ Nữ</a>
                    <a href="donghocap.html">Đồng Hồ Cặp</a>
                    <a href="lienhe.html">Liên hệ</a>
                    <div class="search-container">
                        <form method="get" action="">
                            <div class="form-group">
                                <input id="search" type="text" placeholder="Tìm Sản Phẩm">
                                <i class="fa fa-search icon-search"></i></i>
                                <i class="fa fa-shopping-cart icon-cart"></i>
                            </div>
                        </form>
                    </div>
                </nav>
                <div class="login-form-container">

                    <span id="close-login-form" class="fas fa-times"></span>

                    <form onsubmit="return validate(this)" action="">
                        <h3>user login</h3>
                        <input id="email" type="email" placeholder="email" class="box" required>
                        <input id="password" type="password" placeholder="password" class="box" required>
                        <p> forget your password <a href="#">click here</a> </p>
                        <input type="submit" value="login" class="btn">
                        <p>or login with</p>
                        <div class="buttons">
                            <a href="https://mail.google.com/" class="btn"> google </a>
                            <a href="https://facebook.com/" class="btn"> facebook </a>
                        </div>
                        <p> don't have an account <a href="dangky.html">create one</a> </p>
                    </form>

                </div>
                <div id="login-btn">
                    <button class="btn1">đăng nhập</button>
                </div>

            </div>
            
            


            <div id="maindangky">
                <form method="POST" action="">
                    <table class="dangky" border="1" width="50% style="border-collapse: collapse;">
                        <tr>
                            <td>Họ Và Tên</td>
                            <td><input type="text" size="50" name="hovaten"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" size="50" name="email"></td>
                        </tr>
                        <tr>
                            <td>Điạ Chỉ</td>
                            <td><input type="text" size="50" name="diachi"></td>
                        </tr>
                        <tr>
                            <td>Mật Khẩu</td>
                            <td><input type="text" size="50" name="matkhau"></td>
                        </tr>
                        <tr>
                            <td>Điện Thoại</td>
                            <td><input type="text" size="50" name="dienthoai"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="Đăng Ký" name="dangky"></td>
                        </tr>
                    </table>
                </form>
            </div>


            <div class="clear"></div>
            
            <div class="footer" id="footer">

                <div class="box-container">
                    <div id="box1" class="box">
                        <h3>Thông tin liên lạc</h3>
                        <a href="#"> <i class="fas fa-phone"></i> +84703371482 </a>
                        <a href="#"> <i class="fas fa-phone"></i> +84941636509 </a>
                        <a href="mailto:longb1913315@student.ctu.edu.vn" target="_blank"> <i class="fas fa-envelope"></i>
                            Email </a>
                        <a href="https://www.facebook.com/ttlong315" target="_blank"> <i class="fab fa-facebook-f"></i> facebook
                        </a>
                        <a href="https://www.ctu.edu.vn/" target="_blank"> <i class="fas fa-map-marker-alt"></i> Đại học Cần Thơ
                        </a>
                        
                </div>

                <div class="box">
                    <h3>Liên Kết Website</h3>
                    <a href="index.html"> <i class="fas fa-arrow-right"></i> Trang chủ </a>
                    <a href="donghonam.html"> <i class="fas fa-arrow-right"></i> Đồng Hồ Nam </a>
                    <a href="donghonu.html"> <i class="fas fa-arrow-right"></i> Đồng Hồ Nữ</a>
                    <a href="donghocap.html"> <i class="fas fa-arrow-right"></i> Đồng Hồ Cặp </a>
                    <a href="reviews.html"> <i class="fas fa-arrow-right"></i> Đánh giá </a>
                    <a href="contact.html"> <i class="fas fa-arrow-right"></i> Liên hệ </a>
                </div>

                <div class="box">
                    <h3>Hỗ Trợ - Chính Sách</h3>
                    <a href="#"> <i class="fas fa-arrow-right"></i> Chính Sách Giao Hàng </a>
                    <a href="#"><i class="fas fa-arrow-right"></i> Chính sách đổi hàng</a>
                    <a href="#"><i class="fas fa-arrow-right"></i>Chính sách thanh toán</a>
                    <a href="#"><i class="fas fa-arrow-right"></i>Chính sách bảo hành</a>
                    <a href="#"><i class="fas fa-arrow-right"></i>Tư vấn mua hàng</a>
                </div>

                <div class="box">
                    <h3>Theo dõi chúng tôi</h3>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCTUDHCT%2F&tabs=timeline&width=350&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>  
            </div>
        </div>     
    <footer class="footer1">
        <h2>CLOCK KING</h2>
        <p><br>
            Hệ Thống Đồng Hồ Chính Hãng<br>
            Hotline: <b>0941636509 - 0703371482</b><br>
            Góp ý & Khiếu nại: longb1913315@student.ctu.edu.vn <br><br>
            Copyright &copy; Trương Thiết Long | B1913315 
        </p>
        <a class="on_top" href="#top" style="display: block;"><i class="fa-arrow-circle-up fa"></i></a>

    </footer>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>