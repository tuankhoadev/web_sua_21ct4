<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cập nhập thông tin hãng sữa</title>
        <style>
            .container{
                border: 1px solid black;
                width: 25%;
                background-color: pink;
                margin: auto;
            }
            h2{
                text-align: center;
                height: 30px;
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
    </head>
    
    <body>
        <?php
            
            if(isset($_POST["btnthem"]))
            {
                require_once("connect.php");
                // lay du lieu tren form 
                $sott = $_POST["txtSott"];
                $tensua = $_POST["txtTensua"];
                $hangsua = $_POST["txtHangsua"];
                $loaisua = $_POST["txtLoaisua"];
                $trongluong = $_POST["txtTrongluong"];
                $dongia = $_POST["txtDongia"];

                $sql = "insert into sua (sott,tensua,hangsua,loaisua,trongluong,dongia)
                                        values('$sott','$tensua','$hangsua','$loaisua','$trongluong','$dongia')";
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
            <div class="container">
            
                <div class="h2"> <h2>THÊM THÔNG TIN</h2></div>
                <table class="side" >
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

                            <div class="btn">
                                <input type="submit" name="btnthem" value="Thêm">
        
                            </div>
                        </td>

                    </tr>
                        
                        
                    
        
                </table>
            </div>

        </form>
        
    </body>
</html>