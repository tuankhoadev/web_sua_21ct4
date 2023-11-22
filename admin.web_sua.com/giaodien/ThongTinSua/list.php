<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
    </head>
    <style>
        .container{
            width: 80%;
            
            border: 1px solid #000;
            margin: auto;
        }
        .color_header{
            background: #e0eeee;
        }
        caption{
            padding-top: 15px;
            font-size: 30px;
            font-weight: bold;
            color: blue;
            font-family:'Courier New', Courier, monospace
        }
        
        
        .side{
            width: 100%;
            height: 80%;
        }
        tr{
            text-align: center;
            height: 30px;
        }
        .content a{
            color: #000;
            text-decoration: none;
        }
    </style>
    <body>
        <?php 
            // // Kết nối
            // $conn = mysqli_connect("localhost","root","","web_sua") or die("Kết nối thất bại");
            // // Thiết lập thiết bị
            // mysqli_set_charset($conn,"utf8");
             require_once("connect.php");
            $sql = "select * from sua";
            $result = mysqli_query($conn,$sql);   
            // $row = mysqli_fetch_assoc($result);         
            
        ?>
        <div class="container">
            <table class="side" border="1">
                <caption class="color_header">THÔNG TIN SỮA</caption>
                <tr>
                    <th>Số TT</th>
                    <th>Tên sữa</th>
                    <th>Hãng sữa</th>
                    <th>Loại sữa</th>
                    <th>Trọng lượng</th>
                    <th>Đơn giá</th>
                    <th class="content" colspan="2"><a href="them.php">Thêm</a></th>
                </tr>

                <!-- Hàng nội dung lấy từ CSDL -->
                <?php 
                    while($row = mysqli_fetch_assoc($result))
                    {
                ?>
                    <tr class="content">
                        <td>
                            <?php  echo $row["sott"]; ?>
                        </td>
                        <td>
                            <?php  echo $row["tensua"]; ?>
                        </td>
                        <td>
                            <?php echo $row["hangsua"]?>
                        </td>
                        <td>
                            <?php echo $row["loaisua"]?>
                        </td>
                        
                        <td>
                            <?php echo $row["trongluong"]?>
                        </td>
                        <td>
                            <?php echo $row["dongia"]?>
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

