<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cập nhập thông tin hãng sữa</title>
    </head>
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
                padding-top: -16px;
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
            td{
                padding-right: 20px;
            }
            
    </style>
    <body>
        <?php
            //dua du lieu cu len form
            // lay id truyen tu trang danhsach,php bawng bien co ten la key
            $id = $_GET["key"];
            // lay thong tin the loai co id laf $id
            require_once("connect.php");
            $sql = "select * from sua where id = $id";
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
                $sott = $_POST["txtSott"];
                $tensua = $_POST["txtTensua"];
                $hangsua = $_POST["txtHangsua"];
                $loaisua = $_POST["txtLoaisua"];
                $trongluong = $_POST["txtTrongluong"];
                $dongia = $_POST["txtDongia"];

                $sql = "update sua set  sott = $sott,
                                        tensua = '$tensua',
                                        hangsua = '$hangsua',
                                        loaisua = '$Loaisua', 
                                        trongluong = '$trongluong', 
                                        dongia = '$dongia'
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

            <table>
                <div class="h2"><h2>Sửa thông tin</h2></div>
                <tr>
                    <td>Số TT</td>
                    <td><input type="text" name="txtSott" value="<?php echo $row['sott']; ?>"></td>
                    
                </tr>
                <tr>
                    <td>Tên sữa</td>
                    <td><input type="text" name="txtTensua" value="<?php echo $row['tensua']; ?>"></td>
                    
                </tr>
                <tr>
                    <td>Hãng Sữa</td>
                   <?php echo $row['hangsua']; ?>
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
                    <!-- <td><input type="text" name="txtLoaisua" value="<?php echo $row['loaisua']; ?>"></td> -->
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
                    <td><input type="text" name="txtTrongluong" value="<?php echo $row['trongluong']; ?>"></td>
                    
                </tr>
                <tr>
                    <td>Đơn giá</td>
                    <td><input type="text" name="txtDongia" value="<?php echo $row['dongia']; ?>"></td>
                    
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