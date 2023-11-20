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
$id = $_GET["key"];
        // require_once gop file neu file gop bi loi thi ma lenh php ben duoi se dung thuc thi
        require_once("connect.php");
        // lay du lieu ti form chuyen len
        $sql = "select * from sua where id = $id";
        $result = mysqli_query($conn, $sql);
        // lay hang trong table
        //$row chua thong tin cua the loai can sua
        //$row la mang chua cac tu khoa
        $row = mysqli_fetch_assoc($result);
    //cap nhat
    if(isset($_POST["btncapnhat"]))
    {
        
        $ma = $_POST["txtma"];
        $ten = $_POST["txttensua"];
        $hangsua = $_POST["txthangsua"];
        $loaisua = $_POST["txtloaisua"];
        $trongluong = $_POST["txttrongluong"];
        $dongia = $_POST["txtdongia"];
        $thanhphandinhduong = $_POST["txttpdd"];
        $loiich = $_POST["txtloiich"];
        $hinhanh = $_POST["txthinhanh"];
        $sql = "delete from themsuamoi where id = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            mysqli_close($conn);
            //quay ve trang danhsach.php
            header("location:danhsach.php");
        }else
        {
            echo "update that bai".mysqli_error($conn);
        }
    }
    
?>
    <form class="div1" method="post"> 
        <h2>xoa</h2>
        <table>
            <tr>
                <td><label for="">Mã Sữa</label></td>
                <td><input type="text" name="txtma" value="<?php echo $row['masua']; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Tên Sữa</label></td>
                <td><input type="text" name="txttensua" value="<?php echo $row['tensua']; ?>"></td>
            </tr>
            <tr>
                <td><label >Hãng Sữa</label></td>
                <td>
                    <select name="txthangsua" id="" value="<?php echo $row['hangsua']; ?>">
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
                    <select name="txtloaisua" id="" value="<?php echo $row['loaisua']; ?>">
                        <option value="0">sua Tuoi</option>
                        <option value="1">Sua bot</option>
                        <option value="2">Sua chua</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td> <label for="">Trọng Lượng</label></td>
                <td><input type="text" name="txttrongluong" value="<?php echo $row['trongluong']; ?>"></td>
                <td><label for="" class="lablel1">(gr hoac ml)</label></td>
            </tr>
            <tr>
                <td> <label for="">Đơn Giá</label></td>
                <td><input type="text" name="txtdongia" value="<?php echo $row['dongia']; ?>"></td>
                <td><label for="" class="lablel1">(VND)</label></td>
            </tr>
            <tr>
                <td><label for="">Thành Phần dinh dưỡng</label></td>
                <td><input type="text" name="txttpdd" value="<?php echo $row['thanhphandinhduong']; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Lợi ích</label></td>
                <td><input type="text" name="txtloiich" value="<?php echo $row['loiich']; ?>"></td>
            </tr>
            <tr>
                <td><label for="">Hình ảnh</label></td>
                <td><input type="file" value="them file" name="txthinhanh" value="<?php echo $row['hinhanh']; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="xoa" class="submit" name= "btncapnhat"></td>
            </tr>
        </table>
    </form>

</body>
</html>