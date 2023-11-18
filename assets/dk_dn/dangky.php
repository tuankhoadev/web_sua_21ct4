
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
<?php
//kiem tra nut subbmit da duoc them hay chua
    if(isset($_POST["btnthem"]))
    {
        $conn = mysqli_connect("localhost", "root", "" , "web_sua") or die("ket noi that bai");
        // thiet lap ma tieng viet
         mysqli_set_charset($conn, "utf8");
        $sql = "insert into dangky (name,email,pass,repass)
                            values( '$name','$email','$pass','$repass' )";
        $result = mysqli_query($conn, $sql);
        if($result){
            mysqli_close($conn);
			header(("location: dangnhap.php"));
        }else
        {
            echo "them moi that bai".mysqli_error($conn);
        }
    }
    
?>
	<div class="container">
		<div class="form">
			<div class="title" style="text-align: center; margin-bottom: 25px;">
				<h2 style="margin-bottom: 12px;">ĐĂNG KÝ</h2>
			</div>
			<form method="post">
				<label for="txtName">nhập họ và tên</label>
				<input type="text" id="txtName" placeholder="Vd: Thanh Sơn" autocomplete="off">

				<label for="txtEmail">Email</label>
				<input type="email" id="txtEmail" placeholder="vd: abc@gmail.com">

				<label for="txtPass">Mật khẩu</label>
				<input type="password" id="txtPass" placeholder="Nhập mật khẩu">

				<label for="txtRePass">Nhập lại mật khẩu</label>
				<input type="password" id="txtRePass" placeholder="Nhập lại mật khẩu">

				<input type="submit" value="Đăng ký" name="btnthem">
			</form>
		</div>
	</div>
</body>
</html>