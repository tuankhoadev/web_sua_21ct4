<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cap nhat Hãng sữa</title>
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
            $sql = "select * from thongtinkhachhang where id = $id";
            // $result laf 1 table (table nay chi co 1 hang)
            $result = mysqli_query($conn,$sql);
            // lay hang trong table
            // $row chua thong tin cua the loai can sua
            // row la mang co chua cac tu khoa: id, ten, thu tu, anhien
            $row = mysqli_fetch_assoc($result);
            // cap nhat
            if(isset($_POST["btnHuy"]))
            {

                // lay du lieu tren form 
                $makh = $_POST["txtMakh"];
                $tenkhachhang = $_POST["txtTenkh"];
                $gioitinh = $_POST["txtGioitinh"];
                $diachi = $_POST["txtDiachi"];
                $sodienthoai = $_POST["txtSodienthoai"];
                $email = $_POST["txtEmail"];

                $sql = "delete from thongtinkhachhang where id = $id";
                $result = mysqli_query($conn, $sql);
                if($result)
                {
                    mysqli_close($conn);
                    header(("location: list.php"));
                }
                else{
                    echo " Delete thất bại" . mysqli_error($conn);
                }
            }


        ?>
    <form  method="post">
        <div class="container">
            <div class="header">
                <h3>
                    XOÁ THÔNG TIN KHÁCH HÀNG
                </h3>
            </div>
            <table class="side">
                
                <tr>
                    <td>Mã Khách hàng: </td>
                    <td><input type="text" name="txtMakh" value="<?php echo $row['makh']; ?>"></td>
                    
                </tr>
                <tr>
                    <td>Tên khách hàng: </td>
                    <td><input type="text" name="txtTenkh" value="<?php echo $row['tenkh']; ?>"></td>
                    
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
                    <td><input type="text" name="txtDiachi" value="<?php echo $row['diachi']; ?>"></td>
                    
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td><input type="text" name="txtSodienthoai" value="<?php echo $row['sodienthoai']; ?>"></td>
                    
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="txtEmail" value="<?php echo $row['email']; ?>"></td>
                    
                </tr>
                <tr>
                    <td >
                        <input type="submit" name="btnHuy" value="Xoá">
                    </td>
                </tr>
    
            </table>
        </div>

    </form>
        
    </body>
</html>