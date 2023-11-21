<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'rel="stylesheet">
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins",sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #ffcccc;
    background-size: cover;
    background-position: center;
}
.wrapper{
    width: 450px;
    background: transparent;
    border: 2px solid rgba(255,255,255,.2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: rgb(255, 250, 250);
    border-radius: 10px;
    padding: 40px 30px;
}
.wrapper h1{
    font-size: 36px;
    text-align: center;
}
.wrapper .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgb(90 19 19 / 20%);
    border-radius: 40px;
    font-size: 16px;
    color: rgb(231, 235, 238);
    padding: 20px 45px 20px 20px;
}
.input-box i{
    position: absolute;
    right: 10px;
    top: 15px;
    transform: translate(-50%);
    font-size: 20px;
}
.input-box ::placeholder{
        color: #fff;
    }
.wrapper .remember-forget{
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
}
.remember-forget label input{
    accent-color: #821313;
    margin-right: 3px;
}
.remember-forget a{
    color: #921818;
    text-decoration: underline;
}
.wrapper .btn{
    width: 100%;
    height: 45px;
    background: #52581070;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}
.wrapper .register-link{
    font-size: 14.5px;
    text-align: center;
    margin-top: 20px 0 15px;
}
.register-link p a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}
.register-link p{
    padding-top: 16px;
}
.register-link p a:hover{
    text-decoration: underline;
}
    </style>
</head>
<body>
    <?php 
   if(isset($_POST["btndangnhap"]))
   {
       $username = $_POST["txtName"];
       $pass = $_POST["txtPass"];
       require_once("connect.php");
        $pass1 = md5($pass);
       //cach 1 lay nguoi dung ma hoa pass bang md5
       $sql = "select count(*) as dem from dangky where userid = '$username' and password = '$pass1' ";
       //result la 1 table co 1 hang
       $result = mysqli_query($conn, $sql);
        //row la mang chi co 1 phan tu co key la dem
       $row = mysqli_fetch_assoc($result);
       if($row["dem"]>0)
       {
        echo "thanh cong";
        header("location:giaodien.html");
       }else{
        echo "that bai";
       }
   }
    ?>


    <div class="wrapper">
        <form method="post">
            <h1>LOGIN</h1>
            <div class="input-box">
                <input type="text" placeholder="Username"required name="txtName">
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password"required name="txtPass">
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="remember-forget">
                <label><input type="checkbox"> Ingat saya</label>
            </div>
            <button type="submit" class="btn" name="btndangnhap"> Login </button>
            <div class="register-link">
                <p>silakan regitster jika belum ada akun! <a href="dangky.php">register</a> </p>
            </div>
        </form>
    </div>
</body>
</html>