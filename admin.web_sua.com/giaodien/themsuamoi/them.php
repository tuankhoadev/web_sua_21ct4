<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.containner{
    width: 450px;
    height: 300px;
    border: 1px solid black;
    margin: 20px auto;
}
.containner .div1 .lablel1{
    margin-left: -90px;
}
.containner .div1 tr td input{
    margin-left: -50px;
    margin-bottom: 4px;
}
.containner .div1 tr td select{
    margin-left: -50px;
    margin-bottom: 4px;
}
.containner .div1 .submit{
    margin-left: 200px;
}
h2{
    text-align: center;
    padding-left: 20px;
    width: 450px;
    height: 40px;
    color: rgb(255, 255, 255);
    background-color: red;
}
.containner .div1{
    background-color: pink;
    height: 300px;
}
</style>
<body class="containner">
<?php
//kiem tra nut subbmit da duoc them hay chua
    if(isset($_POST["btnthem"]))
    {
        // require_once gop file neu file gop bi loi thi ma lenh php ben duoi se dung thuc thi
        require_once("connect.php");
        // lay du lieu ti form chuyen len
        $ma = $_POST["txtma"];
        $ten = $_POST["txttensua"];
        $hangsua = $_POST["txthangsua"];
        $loaisua = $_POST["txtloaisua"];
        $trongluong = $_POST["txttrongluong"];
        $dongia = $_POST["txtdongia"];
        $thanhphan = $_POST["txttpdd"];
        $loiich = $_POST["txtloiich"];
        $sql = "insert into sua (masua,tensua,hangsua,loaisua,trongluong,dongia,thanhphandinhduong,loiich)
                            values('$ma','$ten','$hangsua','$loaisua','$trongluong','$dongia','$thanhphan','$loiich')";
        $result = mysqli_query($conn, $sql);
        if($result){
            mysqli_close($conn);
            //quay ve trang danhsach.php
            header("location:danhsach.php");
        }else
        {
            echo "them moi that bai".mysqli_error($conn);
        }
    }
    
?>
    <form class="div1" method="post"> 
        <h2>Thêm Sữa Mới</h2>
        <table>
            <tr>
                <td><label for="">Mã Sữa</label></td>
                <td><input type="text" name="txtma"></td>
            </tr>
            <tr>
                <td><label for="">Tên Sữa</label></td>
                <td><input type="text" name="txttensua"></td>
            </tr>
            <tr>
                <td><label >Hãng Sữa</label></td>
                <td>
                    <select name="txthangsua" id="">
                            <option value="Vinamilk">Vinamilk</option>
                            <option value="Nutifood">Nutifood</option>
                            <option value="Abbott">Abbott</option>
                            <option value="Daisy">Daisy</option>
                            <option value="Dutch Lady">Dutch Lady</option>
                            <option value="Dumex">Dumex</option>
                            <option value="Mead Jonhson">Mead Jonhson</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="">Loại Sữa</label></td>
                <td>
                    <select name="txtloaisua" id="">
                        <option value="Sữa Tươi">Sữa Tươi</option>
                        <option value="Sữa Bột">Sữa Bột</option>
                        <option value="Sữa Chua">Sữa Chua</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td> <label for="">Trọng Lượng</label></td>
                <td><input type="text" name="txttrongluong"></td>
                <td><label for="" class="lablel1">(gr hoac ml)</label></td>
            </tr>
            <tr>
                <td> <label for="">Đơn Giá</label></td>
                <td><input type="text" name="txtdongia"></td>
                <td><label for="" class="lablel1">(VND)</label></td>
            </tr>
            <tr>
                <td><label for="">Thành Phần dinh dưỡng</label></td>
                <td><input type="text" name="txttpdd"></td>
            </tr>
            <tr>
                <td><label for="">Lợi ích</label></td>
                <td><input type="text" name="txtloiich"></td>
            </tr>
            <tr>
                <td><input type="submit" value="them" class="submit" name= "btnthem"></td>
            </tr>
        </table>
    </form>

</body>
</html>