<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Them Hãng sữa</title>
    </head>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            width: 450px;
            height: 300px;
            margin: 20px auto;
        }
        .container table tr{
            margin-bottom: 50px;
        }
    </style>
    <body class="container">
        <?php
            if(isset($_POST["btnthem"]))
            {
                require_once("connect.php");
                // lay du lieu tren form 
                $mahs = $_POST["txtMaHS"];
                $tenhangsua = $_POST["txtTenhangsua"];
                $diachi = $_POST["txtDiachi"];
                $sodienthoai = $_POST["txtDienthoai"];
                $email = $_POST["txtEmail"];
                $sql = "insert into thongtinhs (mahs,tenhangsua,diachi,dienthoai,email)
                                            values('$mahs','$tenhangsua','$diachi','$sodienthoai','$email')";
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
            <table border="1" class="trangchinh">
                <caption>THEM HÃNG SỮA</caption>
            <tr>
                    <td>Mã HS</td>
                    <td><input type="text" name="txtMaHS"></td>
                    
                </tr>
                <tr>
                    <td>Tên hãng sữa</td>
                    <td><input type="text" name="txtTenhangsua"></td>
                    
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="txtDiachi"></td>
                    
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td><input type="text" name="txtDienthoai"></td>
                    
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="txtEmail"></td>
                    
                <tr>
                    
                    <td>
                        <input type="submit" name="btnthem" value="thêm">
                    </td>
                </tr>
    
            </table>

        </form>
        
    </body>
</html>