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
                padding-top: -16px;
                padding-left: 20px;
            }
            .side{
                width: 100%;
            }
            tr{
                margin-top: 8px;
            }
            tr{
                padding-left: 10px;
            }
            td{
                padding-right: 20px;
            }
        </style>
    </head>
    <body>
        <?php
            //dua du lieu cu len form
            // lay id truyen tu trang danhsach,php bawng bien co ten la key
            $id = $_GET["key"];
            // lay thong tin the loai co id laf $id
            require_once("connect.php");
            $sql = "select * from thongtinhs where id = $id";
            // $result laf 1 table (table nay chi co 1 hang)
            $result = mysqli_query($conn,$sql);
            // lay hang trong table
            // $row chua thong tin cua the loai can sua
            // row la mang co chua cac tu khoa: id, ten, thu tu, anhien
            $row = mysqli_fetch_assoc($result);
            // cap nhat
            if(isset($_POST["btnSua"]))
            {

                // lay du lieu tren form 
                $mahs = $_POST["txtMaHS"];
                $tenhangsua = $_POST["txtTenhangsua"];
                $diachi = $_POST["txtDiachi"];
                $sodienthoai = $_POST["txtDienthoai"];
                $email = $_POST["txtEmail"];
                $sql = "update thongtinhangsua set mahs = '$mahs',
                                               tenhangsua = '$tenhangsua',
                                               diachi = '$diachi', 
                                               dienthoai = '$sodienthoai', 
                                               email = '$email'
                                        where id = $id";
                $result = mysqli_query($conn, $sql);
                if($result)
                {
                    mysqli_close($conn);
                    header(("location:list.php"));
                }
                else{
                    echo "Update thất bại" . mysqli_error($conn);
                }
            }


        ?>
    <form  method="post">
        <div class="container">

            <div class="header">
                <h3>
                    Cập nhập hãng sữa
                </h3>
            </div>
                <table class="side">
                    
                    <tr>
                        <td>Mã HS</td>
                        <td><input type="text" name="txtMaHS" value="<?php echo $row['mahs']; ?>"></td>
                        
                    </tr>
                    <tr>
                        <td>Tên hãng sữa</td>
                        <td><input type="text" name="txtTenhangsua" value="<?php echo $row['tenhangsua']; ?>"></td>
                        
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="txtDiachi" value="<?php echo $row['diachi']; ?>"></td>
                        
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><input type="text" name="txtDienthoai" value="<?php echo $row['dienthoai']; ?>"></td>
                        
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="txtEmail" value="<?php echo $row['email']; ?>"></td>
                        
                    </tr>
                    <tr>
                        <td >
                            <input type="submit" name="btnSua" value="Cập nhập">
                        </td>
                        <td>
                            <input type="reset" name="btnHuy" value="Huỷ">
                        </td>
                    </tr>
        
                </table>
        </div>

        </form>
        
    </body>
</html>