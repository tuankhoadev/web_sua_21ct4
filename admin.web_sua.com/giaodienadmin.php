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
    width: 750px;
    height: 500px;
    /* border: solid black; */
    margin: 20px auto;
    background-image: url("img/cart.jpeg");
}
.container a{
    margin-left: 30px;
}
.container a input{
    width: 150px;
    height: 50px;
    color: rebeccapurple;
    background-color: pink;
    margin-top: 70px;
}
.container h1{
    padding-left: 200px;
    padding-top: 50px;
}
</style>
<body>
    <div class="container">
        <h1>ĐÂY LÀ TRANG ADMIN</h1>
        <a href="TongHop/danhsach.php"><input type="button" value="quan ly dat sua" class="nut1"></a>
        <a href="ThongTinKh/list.php"><input type="button" value="quan ly TT khach hang" class="nut2"></a>
        <a href="ThongTinHangSua/list.php"><input type="button" value="quan ly ban sua" class="nut3"></a>
        <a href="ThongTinSua/list.php"><input type="button" value="quan ly thong tin sua" class="nut4"></a>
    </div>
</body>
</html>