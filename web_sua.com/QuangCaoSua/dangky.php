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
        background: url(img/bgsp.jpeg);
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
        border: 2px solid rgba(255, 255, 255, .2);
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
        background: #581010;
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
        color: #f4f2f2;
        text-decoration: none;
        font-weight: 600;
    }
    .register-link p a:hover{
        text-decoration: underline;
    }
</style>
</head>
<body>
    <?php 
    if(isset($_POST["btnDangKy"]))
    {
        $username = $_POST["txtName"];
        $email = $_POST["txtEmail"];
        $password = md5($_POST["txtPass"]);
        require_once("connect.php");
        $sql = "insert into user values('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            mysqli_close($conn);
            header("location:dangnhap.php");    
        }
        else
        {
            echo "da ton tai";
            echo mysqli_error($conn);
        }
    }
    
    ?>
    <div class="wrapper">
        <form method="post">
            <h1>REGISTER</h1>
            <div class="input-box">
                <input type="text" placeholder="Username"required name="txtName">
            </div>
            <div class="input-box">
                <input type="text" placeholder="email"  name="txtEmail">
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password"required name="txtPass">
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="remember-forget">
                <label><input type="checkbox"> Ingat saya</label>
            </div>
            <button type="submit" class="btn" name="btnDangKy">Dang ky</button>
        </form>
    </div>
</body>
</html>