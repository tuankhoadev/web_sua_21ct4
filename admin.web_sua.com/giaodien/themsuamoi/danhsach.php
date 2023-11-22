<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        .container {
            border: 1px solid #000;
            margin: auto;
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
        }
        .color_header{
            background: #e0eeee;
        }
        tr{
            text-align: center;
            height: 30px;
        }
        .content a{
            color: #000;
            text-decoration: none;
        }
        .tieude{
            height: 40px;
            font-size: 20px;
            font-weight: bold;
        }
        
    </style>
</head>
<style>
        .container {
            border: 1px solid #000;
            margin: auto;
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
        }
        .color_header{
            background: #e0eeee;
        }
        tr{
            text-align: center;
            height: 30px;
        }
        .content a{
            color: #000;
            text-decoration: none;
        }
        .tieude{
            height: 40px;
            font-size: 20px;
            font-weight: bold;
        }
        
    </style>
<body>
    <?php 
    require_once("connect.php");
    // tao cau truy van va truy van
    $sql = "select * from sua";
    // $sql = "select * from themmoi";
    //result la table co cac cot la cac thojg tin trong bang the loai(id,ten,thutu,anhien)
    $result = mysqli_query($conn, $sql);
    //kiem tra nut subbmit da duoc them hay chua
    ?>

     <div class="container">

    <div class="container">

        <table class="side" border="1">
                <caption class="color_header">THÔNG TIN HÃNG SỮA</caption>

            
        <tr class="tieude">
            <td>Mã</td>
            <td>Tên Sữa</td>
            <td>Hãng sữa</td>
            <td>Loại sữa</td>
            <td>Trọng lượng</td>
            <td>Đơn giá</td>
            <td>Thành phần dinh dưỡng</td>
            <td>Lợi ích</td>
            <td>Ảnh</td>
            <td class="content" colspan="2"><a href="them.php">Thêm</a></td>
        </tr>
        <?php 
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr class="content">
            <td><?php echo $row["masua"]; ?></td>
            <td><?php echo $row["tensua"]; ?></td>
            <td><?php echo $row["hangsua"]; ?></td>
            <td><?php echo $row["loaisua"]; ?></td>
            <td><?php echo $row["trongluong"]; ?></td>
            <td><?php echo $row["dongia"]; ?></td>
            <td><?php echo $row["thanhphandinhduong"]; ?></td>
            <td><?php echo $row["loiich"]; ?></td>
            <td><img src="giaodien/images/<?php echo $row['hinhanh'] ?>" width="150px"  style="height: 150px;"></td>
            <td><a href="capnhat.php?key=<?php echo $row['id']; ?>"> Sửa </a></td>
            <td><a href="xoa.php?key=<?php echo $row['id']; ?>" onclick=" return confirm('Bạn có đồng ý xoá không ? ')">Xoá</a></td>
        </tr>
        <?php 
        }    
        mysqli_close($conn)
        ?>
        </table>
<<<<<<< HEAD
=======

>>>>>>> 5f4643da609d1b62902a4c159caa9fbc44c2de21
    </div>
</body>
</html>