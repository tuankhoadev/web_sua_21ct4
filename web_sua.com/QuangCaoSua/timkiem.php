<?php
$conn = mysqli_connect("localhost", "root", "", "web_sua_21ct4") or die("ket noi that bai");
// thiet lap ma tieng viet
mysqli_set_charset($conn, "utf8");
?>

<?php
if (isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];
} else {
    $tukhoa = '';
}
$sql = "SELECT * FROM sua WHERE tensua LIKE '%" . $tukhoa . "%' ";
$query = mysqli_query($conn, $sql);
?>
<style>
    a{
        border-bottom: 1px solid grey;
        height: 190px;
        width: 290px;
        margin: 5px 30px 40px;
        cursor: pointer;
    }
    img{
        width: 150px;
        height: 150px;
        float: left;

    }
    .text{
        margin-left: 20px;
        float: left;
    }
   
    .backing {
        border: none;
        padding: 2px 3px;
        /* background-color: aqua; */
        height: 20px;
        border-radius: 3px;
        color: #000;
        float: right;
    }
</style>
<div class="home">
    <h3 class="heading">Từ khóa tìm kiếm: <i style="color: #e74a67;"><?php echo $_POST['tukhoa'] ?></i></h3>
    <input type="button" value="Back" name="back" class="backing" onclick="goBack()" style="margin-left: 200px; background-color: aqua;">
</div>
<?php
while ($row = mysqli_fetch_assoc($query)) {
?>
    <a class="product-info" href="./sanpham.php?id=<?php echo $row['id'] ?>">
        <div class="img">
            <img src="images/product/<?php echo $row["masua"]; ?>.webp" alt="Ảnh minh hoạ">
        </div>
        <div class="text">
            <p><?php echo $row["tensua"]; ?></p>
            <p><?php echo $row["loaisua"]; ?></p>
            <p><?php echo $row["hangsua"]; ?></p>
            <p><?php echo $row["trongluong"]; ?></p>
            <p><?php echo $row["dongia"]; ?></p>
        </div>
    </a>
    <script type="text/javascript">
        function goBack(){
            window.location.href = 'giaodien.php'
        }
    </script>
<?php
}
mysqli_close($conn);
?>
