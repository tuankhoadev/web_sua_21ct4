<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cập nhập thông tin hãng sữa</title>
    </head>
    <body>
        <?php
            //dua du lieu cu len form
            // lay id truyen tu trang danhsach,php bawng bien co ten la key
            $id = $_GET["key"];
            // lay thong tin the loai co id laf $id
            require_once("connect.php");
            $sql = "select * from thongtinsua where id = $id";
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
                $stt = $_POST["txtSott"];
                $Tensua = $_POST["txtTensua"];
                $Hangsua = $_POST["txtHangsua"];
                $Loaisua = $_POST["txtLoaisua"];
                $Trongluong = $_POST["txtTrongluong"];
                $Dongia = $_POST["txtDongia"];

                $sql = "update thongtinsua set  stt = $stt,
                                        tensua = '$Tensua',
                                        Hangsua = '$Hangsua',
                                        Loaisua = '$Loaisua', 
                                        Trongluong = '$Trongluong', 
                                        Dongia = '$Dongia'
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
            <table>
                <tr>
                    <td>Số TT</td>
                    <td><input type="text" name="txtSott" value="<?php echo $row['stt']; ?>"></td>
                    
                </tr>
                <tr>
                    <td>Tên sữa</td>
                    <td><input type="text" name="txtTensua" value="<?php echo $row['Tensua']; ?>"></td>
                    
                </tr>
                <tr>
                    <td>Hãng Sữa</td>
                    <!-- <td><input type="text" name="txtHangsua" value="<?php echo $row['Hangsua']; ?>"></td> -->
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
                    <!-- <td><input type="text" name="txtLoaisua" value="<?php echo $row['Loaisua']; ?>"></td> -->
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
                    <td><input type="text" name="txtTrongluong" value="<?php echo $row['Trongluong']; ?>"></td>
                    
                </tr>
                <tr>
                    <td>Đơn giá</td>
                    <td><input type="text" name="txtDongia" value="<?php echo $row['Dongia']; ?>"></td>
                    
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

        </form>
        
    </body>
</html>