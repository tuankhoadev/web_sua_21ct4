
<!DOCTYPE html>
<html>
<head>	
	<title>Đăng ký</title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}	
		.container{
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			
		}
		.form{
			width: 350px;
			/*height: 450px;*/
			padding: 20px 15px;
			box-shadow: 0 0 10px 5px grey;
		}
		input{
			display: block;
			width: 100%;
			padding: 7px 5px;
			margin-top: 5px;
			margin-bottom: 15px;
			border-radius: 3px;
			border: 1px solid grey;
		}
		input[type="submit"]{
			background: #07A99F;
			color: white;
			border-radius: 5px;
			padding: 9px 5px;
			cursor: pointer;
			transition: 0.5s;
			margin-top: 25px;
			margin-bottom: 0;
		}
		input[type="submit"]:hover{
			opacity: 0.7;
		}
		input::placeholder{
			font-size: 12px;
		}
	</style>		
</head>
<body>
	<div class="container">
		<div class="form">
			<div class="title" style="text-align: center; margin-bottom: 25px;">
				<h2 style="margin-bottom: 12px;">Đăng Nhập</h2>
			</div>
			<form action='dangnhap.php?do=login' method='POST'>
				<label for="txtEmail">Email</label>
				<input type="email" id="txtEmail" placeholder="vd: abc@gmail.com">

				<label for="txtPass">Mật khẩu</label>
				<input type="password" id="txtPass" placeholder="Nhập mật khẩu">
				<input type="submit" value="Đăng nhập">
                <a href='dangky.php' title='Đăng ký'>Đăng ký</a>
			</form>
		</div>
	</div>
</body>
</html>
<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    include('ketnoi.php');
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    $password = md5($password);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
    die();
}
?>