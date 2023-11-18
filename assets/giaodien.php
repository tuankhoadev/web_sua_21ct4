<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/css1.css">
    <link rel="stylesheet" href="css/css2.css">
    <title>Web Sua</title>
</head>

<body>
    <header>
			<div class="logo">
				<a href="giaodien.html"><img src="img/OIP (2).jpg"></a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="giaodien.php"><i class='bx bx-home'></i> Home</a></li>
					<li><a href="#"> Sản Phẩm</a>
						<div class="submenu">
							<ul>
								<li><a href="#">Sữu Tươi</a></li>
								<li><a href="#">Sữa Bột</a></li>
								<li><a href="#">Sữu Chua</a></li>
							</ul>
						</div>
					</li>
					<li><a href="#">Giới thiệu</a></li>
					<li><a href="#">Tin tức</a></li>
					<li><a href="#">Liên Hệ</a></li>
					<li><a href="#">THêm</a></li>
				</ul>
                <div class="option">
                    <!-- <li><input placeholder="Tìm kiếm" type="text"><i class="fas fa-search"></i></li> -->
                    <li><a href="dk_dn/dangnhap.php" class="fas fa-user"></a></li>
                    <li><a href="giohang.php" class="fas fa-shopping-cart"></a></li>
                </div>
			</div>
    </header>
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
    <section class="footer">
        <div class="footer-top">
            <li><a href="#">Liên hệ</a></li>
            <li><a href="#">Tuyển dụng</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li>
                <a href="https://www.facebook.com/richermilk/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.youtube.com/" class="fab fa-youtube"></a>
            </li>
        </div>
        <div class="footer-botom">
            <p>Công ty con Chim Đa Đa <br>
                Địa chỉ đăng ký: 85 Võ Văn Dũng - Thị Trấn Bình Dương - Phù Mỹ - Bình Định<br>
                Đặt hàng online: <b>0156223356.</b>
            </p>
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
</body>
</html>