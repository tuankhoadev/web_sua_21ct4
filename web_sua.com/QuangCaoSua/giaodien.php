<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quảng cáo sữa</title>
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="/font/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="assets/product.css">

</head>

<body>
    <?php
    require_once("sql/connect.php");
    $sql = "select * from sua";
    $result = mysqli_query($conn, $sql);
    ?>
    <div class="wrapper">
        <!-- header -->
        <div class="header">
            <div class="banner">
                <img class="img-fluid" style="max-height:70px; width: 100%;" src="https://cdn1.concung.com/img/adds/2023/10/1696910450-TOP(10).png" alt="OBD Vinamilk - TOP BANNER 13845">
            </div>
            <div class="head_max">
                <!-- header menu -->
                <div class="header-menu">
                    <div class="nav-menu1">
                        <ul>
                            <li>
                                <a href="#">Mua hàng và CSKH: <b class="number">
                                        <i class="fa-solid fa-phone icon-phone item-icon"></i>
                                        1800 6969</b>
                                </a>
                            </li>
                            <li>
                                <a href="#">Kết nối</a>
                                <i class="fa-brands fa-facebook icon-fb item-icon"></i>
                                <i class="fa-brands fa-instagram icon-ig item-icon"></i>
                            </li>

                        </ul>
                    </div>
                    <div class="nav-menu2">
                        <ul>
                            <li>
                                <i class="fa-solid fa-bell icon-bell item-icon"></i>
                                <a href="#">Thông báo</a>
                            </li>
                            <li>
                                <i class="fa-regular fa-circle-question icon-cir item-icon"></i>
                                <a href="#">Trợ Giúp</a>
                            </li>
                            <li><a href="dangky.php">Đăng ký</a> </li>
                            <li><a href="dangnhap.php">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>

                <!-- header width search -->
                <div class="header-with-search">
                    <!-- logo -->
                    <div class="header-logo">
                        <a href="giaodien.html">
                            <img src="img/logo_milk.jpg" alt="Logo milk" class="logo-milk">
                        </a>
                    </div>
                    <!-- tìm kiếm -->
                    <div class="header__seacrh">
                        <div class="header__seacrh-wrap">
                            <input type="text" class="header-input" placeholder="Nhập để tìm kiếm sản phẩm">
                            <!-- lich su tim kiem -->
                            <div class="header__search-history">
                                <h3 class="history-search">Lịch sử tìm kiếm</h3>
                                <ul class="history-list">
                                    <li class="history-item">
                                        <a href="">Sữa chua Vinamilk</a>
                                    </li>
                                    <li class="history-item">
                                        <a href="">Sữa Meiji thanh Infant Formula 432g</a>
                                    </li>
                                    <li class="history-item">
                                        <a href="">Sữa Enfagrow A2 NeuroPro số 3 800g</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="header__seacrh-btn">
                            <i class="fa-solid fa-magnifying-glass btn-icon"></i>
                        </button>
                    </div>

                    <!-- giỏ hàng -->
                    <div class="header-cart">
                        <!-- co san pham -->
                        <div class="good-cart">
                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            <!-- <span class="cart-notice">3</span> -->
                            <!-- no cart -->
                            <div class="cart-list no-cart">
                                <img src="img/no-cart.png" alt="Giỏ hàng trống" class="img-nocart">
                                <span class="cart-list-msg">Chưa có sản phẩm</span>
                            </div>
                        </div>

                    </div>
                </div>
                <section id="Slider">
                    <div class="aspect-ratio-169">
                        <img src="img/slide1.png">
                        <img src="img/slide2.jpg">
                        <img src="img/slide3.png">
                        <img src="img/sua.jpg">
                    </div>
                    <div class="dot-container">
                        <div class="dot active"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                </section>
                <script>
                    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
                    const imgContainer = document.querySelector('.aspect-ratio-169')
                    const dotItem = document.querySelectorAll(".dot")
                    let imgNumber = imgPosition.length
                    let index = 0
                    imgPosition.forEach(function(image, index) {
                        image.style.left = index * 100 + "%"
                        dotItem[index].addEventListener("click", function() {
                            slider(index)
                        })
                    })

                    function imgSlide() {
                        index++;
                        if (index >= imgNumber) {
                            index = 0
                        }
                        slider(index)
                    }

                    function slider(index) {
                        imgContainer.style.left = "-" + index * 100 + "%"
                        const dotActive = document.querySelector('.active')
                        dotActive.classList.remove("active")
                        dotItem[index].classList.add("active")
                    }
                    setInterval(imgSlide, 3000)
                </script>
            </div>

        </div>
        <!-- Nội dung chính -->
        <div class="main">

            <!-- sản phẩm -->
            <div class="content">
                <div class="product1" >
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <a class="product-info" href="./sanpham.php?id=<?php echo $row['id'] ?>">
                            <div class="img">

                                <img src="images/product/<?php echo $row["masua"]; ?>.webp" alt="Ảnh minh hoạ">
                            </div>
                            <div class="text">
                                <p><?php echo $row["tensua"]; ?></p>
                                <p><?php echo $row["loaisua"]; ?></p>
                                <p><?php echo $row["hangsua"]; ?></p>
                                <p><?php echo $row["trongluong"]; ?></p>
                                <p><?php echo $row["dongia"]; ?></p>

                            </div>
                        </a>
                    <?php
                    }
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="footer">
            <!-- list -->
            <div class="list-footer">
                <div class="one">
                    <h3 class="head-footer">Công Ty Cổ Phần</h3>
                    <ul>
                        <li>
                            <i class="fa-regular fa-envelope footer-icon"></i>
                            <a href="#">Email: cskh@milk.com</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-phone footer-icon"></i>
                            <a href="#">Điện thoại: 028 7300 6609</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot footer-icon"></i>
                            <a href="#">Địa chỉ: 109 Thanh Xuân, Hà Nội</a>
                        </li>
                    </ul>
                </div>
                <div class="one">
                    <h3 class="head-footer">Hỗ Trợ Khách Hàng</h3>

                    <ul>
                        <li><a href="#">Tra cứu hóa đơn</a></li>
                        <li><a href="#">Mua & giao nhận Online</a></li>
                        <li><a href="#">Bảo hành & bảo trì</a></li>
                        <li><a href="#">Đổi trả & hoàn tiền</a></li>
                    </ul>
                </div>
                <div class="one">
                    <h3 class="head-footer">Phương Thức Thanh Toán</h3>
                    <div class="footer__pay">
                        <img class="footer__pay-link" src="https://cdn1.concung.com/themes/desktop4.1/image/v40/style/visa-pay.png" alt="Visa Pay">
                        <img class="footer__pay-link" src="https://cdn1.concung.com/themes/desktop4.1/image/v40/style/mastercard-pay.png" alt="card-pay">
                        <img class="footer__pay-link" src="https://cdn1.concung.com/themes/desktop4.1/image/v40/style/jcb-pay.png" alt="jcb Pay">
                        <img class="footer__pay-link" src="https://cdn1.concung.com/themes/desktop4.1/image/v40/style/cod.png" alt="cod Pay">
                        <img class="footer__pay-link" src="https://cdn1.concung.com/themes/desktop4.1/image/v40/style/vnpay.png" alt="vn Pay">
                        <img class="footer__pay-link" src="https://cdn1.concung.com/themes/desktop4.1/image/v40/style/zalo-pay.png" alt="zalo Pay">
                        <img class="footer__pay-link" src="https://cdn1.concung.com/themes/desktop4.1/image/v40/style/momo-pay.png" alt="momo Pay">
                        <img class="footer__pay-link" src="https://cdn1.concung.com/themes/desktop4.1/image/v40/style/shoppe-pay.png" alt="shopee Pay">
                        <img class="footer__pay-link" src="https://cdn1.concung.com/themes/desktop4.1/image/v40/style/atm-pay.png" alt="atm Pay">
                        <img class="footer__pay-link" src="https://cdn1.concung.com/themes/desktop4.1/image/v40/style/kredivo-pay.png" alt="kre Pay">

                    </div>
                </div>
                <div class="one">
                    <h3 class="head-footer">Kết Nối với Chúng Tôi</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="footer-icon fa-brands fa-facebook"></i>
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="footer-icon fa-brands fa-tiktok"></i>
                                Tiktok
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="footer-icon fa-brands fa-instagram"></i>
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="footer-icon fa-brands fa-youtube"></i>
                                Youtube
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="note">@2023 MILK. Tất cả quyền được bảo lưu</div>
        </div>
    </div>
</body>

</html>