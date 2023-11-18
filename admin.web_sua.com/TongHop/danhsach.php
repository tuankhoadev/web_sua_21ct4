<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once("connect.php");
    // tao cau truy van va truy van
    $sql = "select * from sua";
    //result la table co cac cot la cac thojg tin trong bang the loai(id,ten,thutu,anhien)
    $result = mysqli_query($conn, $sql);
    //kiem tra nut subbmit da duoc them hay chua
    ?>
    <table border="1">
    <caption>THÔNG TIN HÃNG SỮA</caption>
    <tr>
        <td>Ma</td>
        <td>Ten Sua</td>
        <td>Hang sua</td>
        <td>Loai sua</td>
        <td>Trong Luong</td>
        <td>Don gia</td>
        <td>Thanh phan dinh duong</td>
        <td>Loi ich</td>
        <td>Anh</td>
        <td colspan="2"><a href="them.php">Them</a></td>
    </tr>
    <?php 
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
    <tr>
        <td><?php echo $row["ma"]; ?></td>
        <td><?php echo $row["ten"]; ?></td>
        <td><?php echo $row["hangsua"]; ?></td>
        <td><?php echo $row["loaisua"]; ?></td>
        <td><?php echo $row["trongluong"]; ?></td>
        <td><?php echo $row["dongia"]; ?></td>
        <td><?php echo $row["thanhphan"]; ?></td>
        <td><?php echo $row["loiich"]; ?></td>
        <td><?php echo $row["hinhanh"]; ?></td>
        <td><a href="capnhat.php?key=<?php echo $row['id']; ?>"> sua </a></td>
        <td><a href="xoa.php?key=<?php echo $row['id']; ?>"> xoa </a></td>
    </tr>
    <?php 
    }    
    mysqli_close($conn)
    ?>
    </table>
</body>
</html>