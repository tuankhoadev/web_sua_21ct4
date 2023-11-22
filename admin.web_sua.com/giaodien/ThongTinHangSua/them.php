<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Them Hãng sữa</title>
    </head>
    <style>
        .container{
                border: 1px solid black;
                width: 25%;
                background-color: pink;
                margin: auto;
            }
        .header{
            text-align: center;
            /* height: 30px; */
                margin-top: 0;
                padding-top: 10px;
                
           
                color: rgb(255, 255, 255);
                background-color: red;
        }
            
            table
            {
                padding-left: 20px;
            }
            .side{
                width: 100%;
            }
            tr{
                margin-top: 8px;
            }
            td .btn{
                margin-top: 20px;
                margin-left: 50px;
                text-align: center;
            }
            tr{
                padding-left: 10px;
            }
    </style>
    <body >
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
            <div class="container">

                <div class="header"><h3>Thêm hãng sữa</h3></div>
                <table  class="side">
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
                            <input type="submit" name="btnthem" value="Thêm">
                        </td>
                    </tr>
        
                </table>
            </div>

        </form>
        
    </body>
</html>