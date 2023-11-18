<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
    </head>
    <body>
        <?php 
            // // Kết nối
            // $conn = mysqli_connect("localhost","root","","web_sua") or die("Kết nối thất bại");
            // // Thiết lập thiết bị
            // mysqli_set_charset($conn,"utf8");
             require_once("connect.php");
            $sql = "select * from thongtinkh";
            $result = mysqli_query($conn,$sql);   
            // $row = mysqli_fetch_assoc($result);         
            
        ?>
        <div class="container">
            <table border="1">
                <caption>THÔNG TIN KHÁCH HÀNG</caption>
                <tr>
                    <th>Mã KH</th>
                    <th>Tên khách Hàng</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    
                    <th colspan="2"><a href="them.php">Thêm</a></th>
                    
                </tr>

                <!-- Hàng nội dung lấy từ CSDL -->
                <?php 
                    while($row = mysqli_fetch_assoc($result))
                    {
                ?>
                    <tr>
                        <td>
                            <?php  echo $row["makh"]; ?>
                        </td>
                        <td>
                            <?php  echo $row["tenkh"]; ?>
                        </td>
                        <td>
                            <?php echo $row["gioitinh"]?>
                        </td>
                        <td>
                            <?php echo $row["diachi"]?>
                        </td>
                        <td>
                            <?php echo $row["sodienthoai"]?>
                        </td>
                        <td>
                            <?php echo $row["email"]?>
                        </td>
                        <td><a href="update.php?key=<?php echo $row['id']; ?>">Sửa</a></td>
                        <td><a href="delete.php?key=<?php echo $row['id']; ?>" onclick=" return confirm('Bạn có đồng ý xoá không ? ')"
                        >Xoá</a></td>

                    </tr>
                <?php 
                    }
                    mysqli_close($conn);
                ?>

                
            </table>
        </div>
    </body>
</html>

