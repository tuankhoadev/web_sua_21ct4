<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cap nhat Hãng sữa</title>
    </head>
    <body>
        <?php
            
            if(isset($_POST["btnthem"]))
            {
                require_once("connect.php");
                // lay du lieu tren form 
                $makh = $_POST["txtMakh"];
                $tenkhachhang = $_POST["txtTenkh"];
                $gioitinh = $_POST["txtGioitinh"];
                $diachi = $_POST["txtDiachi"];
                $sodienthoai = $_POST["txtSodienthoai"];
                $email = $_POST["txtEmail"];
                $sql = "insert into thongtinkhachhang (makh,tenkh,gioitinh,diachi,sodienthoai,email)
                                            values('$makh','$tenkhachhang','$gioitinh','$diachi','$sodienthoai','$email')";
                $result = mysqli_query($conn, $sql);
                if($result)
                {
                    mysqli_close($conn);
                    header(("location: list.php"));
                }
                else{
                    echo " them moi thất bại" . mysqli_error($conn);
                }
            }


        ?>
    <form  method="post">
    <table>
                <caption>THEM THÔNG TIN KHÁCH HÀNG</caption>
                <tr>
                    <td>Mã Khách hàng: </td>
                    <td><input type="text" name="txtMakh"></td>
                    
                </tr>
                <tr>
                    <td>Tên khách hàng: </td>
                    <td><input type="text" name="txtTenkh"></td>
                    
                </tr>
                <tr>
                    <td>Phái: </td>
                    <td>
                        <input type="radio" name="txtGioitinh" value=" Nam ">Nam
                        <input type="radio" name="txtGioitinh" value=" Nữ">Nữ
                    
                    </td>  
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="txtDiachi"></td>
                    
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td><input type="text" name="txtSodienthoai" >"></td>
                    
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="txtEmail" ></td>
                    
                </tr>
                <tr>
                    <td >
                        <input type="submit" name="btnthem" value="them">
                    </td>
                </tr>
    
            </table>

        </form>
        
    </body>
</html>