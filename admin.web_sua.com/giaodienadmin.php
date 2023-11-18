<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    width: 1000px;
    height: 700px;
    /* border: solid black; */
    margin: 20px auto;
    background-image: url("img/login.jpg");
}
.container a{
    margin-left: 70px;
}
.container a input{
    width: 150px;
    height: 50px;
    color: rebeccapurple;
    background-color: pink;
    margin-top: 70px;
}
.container h1{
    padding-left: 300px;
    padding-top: 50px;
}
</style>
<body>
    <div class="container">
        <h1>ĐÂY LÀ TRANG ADMIN</h1>
        <a href="themsuamoi/danhsach.php"><input type="button" value="Thêm sữa mới" class="nut1"></a>
        <a href="ThongTinKH/list.php"><input type="button" value="Quản lý TT khách hàng" class="nut2"></a>
        <a href="ThongTinHangSua/list.php"><input type="button" value="Quản lý bán sữa" class="nut3"></a>
        <a href="ThongTinSua/list.php"><input type="button" value="Quản lý thông tin sữa" class="nut4"></a>
    </div>
</body>
</html>