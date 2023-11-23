<?php
$conn = mysqli_connect("localhost", "root", "", "web_sua_21ct4") or die("ket noi that bai");
// thiet lap ma tieng viet
mysqli_set_charset($conn, "utf8");
?>
<style>
    .wrapper_chitiet {
        display: flex;
        border: 1px dashed #e74a67;
        padding: 20px 50px;
        width: 1000px;
        margin: 0 auto;
    }

    .heading {
        margin: 20px 80px;
    }

    .hinhanh_sanpham {
        margin: 0 40px;
    }

    img {
        width: 300px;
        height: 300px;
    }

    .chitietsanpham {
        margin: 0 40px;
    }

    .btn-dathang {
        display: flex;
    }

    .Themgiohang {
        padding: 8px 10px;
        font-size: 1rem;
        border: none;
        background-color: bisque;

    }

    .muangay {
        padding: 8px 10px;
        border: none;
        font-size: 1rem;
        margin-left: 30px;
        background-color: #e74a67;
    }
    .back{
        border: none;
        padding: 2px 3px;
        /* background-color: aqua; */
        height: 20px;
        width: 40px;
        border-radius: 3px;
        color: #000;
    }
</style>
<h2 class="heading">Chi tiết sản phẩm</h2>

<?php
$sql_chitiet = "SELECT * FROM sua WHERE id = '$_GET[id]'  LIMIT 1";
$query_chitiet = mysqli_query($conn, $sql_chitiet);

while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
    <div class="wrapper_chitiet">

        <div class="hinhanh_sanpham">
            <img src="images/product/<?php echo $row_chitiet ["masua"]; ?>.webp" alt="Ảnh minh hoạ">
        </div>
        <form method="POST" action="">
            <div class="chitietsanpham">
                <div style="margin-bottom: 20px; display: flex;">
                    <h2>
                        <?php echo  $row_chitiet['tensua'] ?>
                    </h2>
                </div>
                <p style="margin-bottom:10px;">Thành phần dinh dưỡng: <?php echo  $row_chitiet['thanhphandinhduong'] ?></p>
                <p style="margin-bottom:10px;">Lợi ích: <?php echo  $row_chitiet['loiich'] ?></p>
                <p style="margin-bottom:10px;">Trọng lượng: <?php echo  $row_chitiet['trongluong'] ?>(gr/ml)</p>
                <p style="margin-bottom:10px;">Giá: <?php echo $row_chitiet['dongia'] ?></p>
                <div class="btn-dathang">
                    <p class="btn-cart">
                        <i class="fa-solid fa-cart-plus" style="color: #e74a67; margin-left: 5px;cursor: pointer;"></i>
                        <input type="submit" value="Thêm Giỏ Hàng" class="Themgiohang" name="themgiohang" style="border-radius: 3px;">
                    </p>
                    <p class="btn-buy"><input type="submit" value="Mua Ngay" class="muangay" style="border-radius: 3px;"></p>
                </div>
                
            </div>
        </form>
        <div class="back">
            <input type="button" value="Back" name="back" class="back" onclick="goBack()" style="margin-left: 250px; background-color: aqua;">
        </div>
        
    </div>
    <script type="text/javascript">
        function goBack(){
            window.location.href = 'giaodien.php'
        }
    </script>
<?php
}
mysqli_close($conn);
?>