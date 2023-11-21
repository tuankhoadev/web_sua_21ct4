<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<style>
    .sidebar{
        width: 60px;
        height: 1000px;
        box-sizing: border-box;
        padding: 10px;
        background-color: greenyellow;
        transition: ease-in-out 0.3s;
        overflow: hidden;
    }
    .sidebar:hover{
        width: 400px;
    }
    .sidebar:hover > .item > .text{
        opacity: 1;
    }
    hr{
        height: 1px;
        color: #919191;
        margin: 15px 0;
    }
    .item{
        display: flex;
        align-items: center;
        margin: 20px 0;
    }
    .item .icon{
        width: 40px;
        height: 35px;
        flex-shrink: 0;
        fill: #424242;
    }
    .item .text{
        opacity: 0;
        transition: ease-in-out 0.3s;
        transition-delay: .2s;
        margin-left: 15px;
        white-space: nowrap;
        color: black;
        font-weight: bold;
    }
</style>
<body>
    <div class="sidebar">
    <div class="item">
            <img src="giaodien/images/icon/R.png" class="icon">
            <div class="text"><a href="giaodienadmin.php"> HOME</a></div>
        </div>
        <div class="item">
            <img src="giaodien/images/icon/pngtree-vector-edit-profile-icon-png-image_779401.jpg" class="icon">
            <div class="text"> PROFILE ADMIN </div>
        </div>
        <div class="item">
            <img src="giaodien/images/icon/OIP (5).jpg" class="icon">
            <div class="text"><a href="web_sua.com/QuangCaoSua/giaodien.php">TRANG USER</a></div>
        </div>
        <div class="item">
            <img src="giaodien/images/icon/3285755.png" class="icon">
            <div class="text"><a href="giaodien/themsuamoi/danhsach.php">QUẢN LÝ THÊM SẢN PHẨM MỚI</a></div>
        </div>
        <div class="item">
            <img src="giaodien/images/icon/Green-Plus-Sign-550x550.png" class="icon">
            <div class="text"><a href="giaodien/ThongTinSua/list.php">QUẢN LÝ CÁC LOẠI SỮA</a></div>
        </div>  
        <div class="item">
            <img src="giaodien/images/icon/R (1).png" class="icon">
            <div class="text"><a href="giaodien/ThongTinHangSua/list.php">QUẢN LÝ CÁC HÃNG SỮA</a></div>
        </div>
        <div class="item">
            <img src="giaodien/images/icon/OIP (3).jpg" class="icon">
            <div class="text"><a href="giaodien/ThongTinKH/list.php">QUẢN LÝ KHÁCH HÀNG</a></div>
        </div>
    </div>
</body>
</html>