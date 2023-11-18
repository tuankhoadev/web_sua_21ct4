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
            $sql = "select * from thongtinsua";
            $result = mysqli_query($conn,$sql);   
            // $row = mysqli_fetch_assoc($result);         
            
        ?>
        <div class="container">
            <table border="1">
                <caption>THÔNG TIN SỮA</caption>
                <tr>
                    <th>Số TT</th>
                    <th>Tên sữa</th>
                    <th>Hãng sữa</th>
                    <th>Loại sữa</th>
                    <th>Trọng lượng</th>
                    <th>Đơn giá</th>
                    <th colspan="2"><a href="them.php">Thêm</a></th>
                </tr>

                <!-- Hàng nội dung lấy từ CSDL -->
                <?php 
                    while($row = mysqli_fetch_assoc($result))
                    {
                ?>
                    <tr>
                        <td>
                            <?php  echo $row["stt"]; ?>
                        </td>
                        <td>
                            <?php  echo $row["Tensua"]; ?>
                        </td>
                        <td>
                            <?php echo $row["Hangsua"]?>
                        </td>
                        <td>
                            <?php echo $row["Loaisua"]?>
                        </td>
                        
                        <td>
                            <?php echo $row["Trongluong"]?>
                        </td>
                        <td>
                            <?php echo $row["Dongia"]?>
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

