<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/product2.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>DTCMilk Việt Nam</title>
</head>

<body>
    <?php
    require_once("sql/connect.php");

    // Sắp xếp sản phẩm
    $sort_order = isset($_GET['sort_order']) && $_GET['sort_order'] === 'desc' ? 'desc' : 'asc';

    $sql = "SELECT * FROM sua 
            INNER JOIN hang ON sua.maHang = hang.maHang
            ORDER BY giaTien $sort_order";

    $result = mysqli_query($connect, $sql);

    // Xử lý thêm vào giỏ hàng
    if (isset($_POST["btnAdd"])) {
        $productId = $_POST["productId"];

        $query = "SELECT * FROM sua WHERE maSua = '$productId'";
        $target = mysqli_query($connect, $query);
        $row2 = mysqli_fetch_assoc($target);

        $productName = $row2["tenSua"];
        $productCount = 1;
        $productPrice = $row2["giaTien"];
        $cart = "INSERT INTO giohang (maSp, tenSp, soLuong, giaTien) VALUES ('$productId', '$productName', $productCount, $productPrice)";
        $result2 = mysqli_query($connect, $cart);

        if ($result2) {
            echo '<script>
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Thêm vào giỏ hàng thành công",
                    showConfirmButton: false,
                    timer: 2000
                });
            </script>';
        } else {
            echo '<script>
                Swal.fire({
                    position: "top-end",
                    icon: "warning",
                    title: "Đã có trong giỏ hàng",
                });
            </script>';
        }
    }

    ?>
    <header>
        <div class="logo">
            <img src="images/logo1.jpg" alt="logo milk">
        </div>
        <div class="menu">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="about.php">Giới thiệu</a></li>
            <li><a href="product.php">Sản phẩm</a>
                <ul class="submenu">
                    <li><a href="suatuoi.php">Sữa tươi và sữa dinh dưỡng</a></li>
                    <li><a href="suachua.php">Sữa chua</a></li>
                    <li><a href="suadac.php">Sữa đặc</a></li>
                    <li><a href="suatv.php">Sữa thực vật</a></li>
                </ul>
            </li>
            <li><a href="promotion.php">Khuyến mãi</a></li>
            <li><a href="contact.php">Liên hệ</a></li>
        </div>
        <div class="option">
            <li><input placeholder="Tìm kiếm" type="text"><i class="fas fa-search"></i></li>
            <li>
                <div>
                    <?php
                    echo $_SESSION["email"];
                    ?>
                </div>
                <a href="login.php" class="fas fa-user"></a>
            </li>
            <li><a href="cart.php" class="fas fa-shopping-cart"></a></li>
            <li>
                <a href='logout.php'>Đăng xuất</a>
            </li>
        </div>
    </header>
    <section class="product">
        <div class="container">
            <div class="row">
                <div class="pro-center row">
                    <div class="pro-top-items">
                        <p>Sản phẩm</p>
                    </div>
                    <div class="pro-top-items">
                        <form id="sortForm" method="GET" action="product.php">
                            <p>Sắp xếp</p>
                            <select name="sort_order" onchange="document.getElementById('sortForm').submit()">
                                <option value="asc" <?php echo isset($_GET['sort_order']) && $_GET['sort_order'] === 'asc' ? 'selected' : ''; ?>>Giá từ thấp đến cao</option>
                                <option value="desc" <?php echo isset($_GET['sort_order']) && $_GET['sort_order'] === 'desc' ? 'selected' : ''; ?>>Giá từ cao đến thấp</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="frame-product-info">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="product-info">
                            <form method="post">
                                <img src="images/product/<?php echo $row["maSua"]; ?>.webp" alt="Ảnh minh hoạ">
                                <p class="name"><?php echo $row["tenSua"]; ?></p>
                                <div class="price-id">
                                    <p class="price"><?php $formattedPrice = number_format($row["giaTien"], 0, ".", ",");
                                                        echo $formattedPrice . " VND"; ?></p>
                                    <input type="text" name="productId" class="" value="<?php echo $row['maSua'] ?>" readonly>
                                </div>
                                <input type="submit" name="btnAdd" value="Thêm vào giỏ hàng">
                            </form>
                        </div>
                    <?php
                    }
                    mysqli_close($connect);
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <section class="app-container">
            <p>Tải ứng dụng DTCMilk</p>
            <div class="app-google">
                <img src="images/dow.webp">
            </div>
        </section>
        <div class="footer-top">
            <li><a href="contact.php">Liên hệ</a></li>
            <li><a href="">Tuyển dụng</a></li>
            <li><a href="about.php">Giới thiệu</a></li>
            <li>
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.youtube.com/" class="fab fa-youtube"></a>
            </li>
        </div>
        <div class="footer-center">
            <p>Công ty Cổ phần Họa Mi với số đăng ký kinh doanh: 0123456789 <br>
                Địa chỉ đăng ký: Tổ dân phố 80, P.Hòa Minh, Q.Liên Chiểu, TP.Đà Nẵng, Việt Nam - 0908 080 808<br>
                Đặt hàng online: <b>0952 648 931.</b>
            </p>
        </div>
    </section>
</body>

</html>