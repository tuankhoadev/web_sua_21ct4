<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cập nhập thông tin hãng sữa</title>
    </head>
    <body>
        <?php
            
            if(isset($_POST["btnthem"]))
            {
                require_once("connect.php");
                // lay du lieu tren form 
                $stt = $_POST["txtSott"];
                $Tensua = $_POST["txtTensua"];
                $Hangsua = $_POST["txtHangsua"];
                $Loaisua = $_POST["txtLoaisua"];
                $Trongluong = $_POST["txtTrongluong"];
                $Dongia = $_POST["txtDongia"];

                $sql = "insert into thongtinsua (stt,Tensua,Hangsua,Loaisua,Trongluong,Dongia)
                                        values('$stt','$Tensua','$Hangsua','$Loaisua','$Trongluong','$Dongia')";
                $result = mysqli_query($conn, $sql);
                if($result)
                {
                    mysqli_close($conn);
                    header(("location:list.php"));
                }
                else{
                    echo "them moi thất bại" . mysqli_error($conn);
                }
            }


        ?>
    <form  method="post">
            <table>
                <tr>
                    <td>Số TT</td>
                    <td><input type="text" name="txtSott" ></td>
                    
                </tr>
                <tr>
                    <td>Tên sữa</td>
                    <td><input type="text" name="txtTensua"></td>
                    
                </tr>
                <tr>
                    <td>Hãng Sữa</td>
                    <!-- <td><input type="text" name="txtHangsua" value="></td> -->
                    <td>
                        <select name="txtHangsua" >
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
                    <td>Loại sữa</td>
                    <!-- <td><input type="text" name="txtLoaisua" value="></td> -->
                    <td>
                        <select name="txtLoaisua" >
                            <option value="Sữa bột">Sữa bột</option>
                            <option value="Sữa tươi">Sữa tươi</option>
                            <option value="Sữa chua">Sữa chua</option>
                        </select>
                    </td>
                    
                </tr>
                <tr>
                    <td>Trọng lượng</td>
                    <td><input type="text" name="txtTrongluong" ></td>
                    
                </tr>
                <tr>
                    <td>Đơn giá</td>
                    <td><input type="text" name="txtDongia" ></td>
                    
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btnthem" value="them">
                    </td>
                </tr>
    
            </table>

        </form>
        
    </body>
</html>