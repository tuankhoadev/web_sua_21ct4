<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="icon" href="./images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="./style/login3.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>Login</title>
</head>
<style>
		h5 {
			/* text-align: center; */
			font-family: Georgia, 'Times New Roman', Times, serif
		}
	body {
  background-color: #333333;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  font-family: "Open Sans";
  color: #333333;
}

.box-form {

  margin:  auto;
  width: 80%;
  background: #FFFFFF;
  border-radius: 10px;
  display: flex;
  align-items: stretch;
  box-shadow: 0 0 20px 6px #090b6f85;
}

.box-form .left {
  width: 70%;
  color: #FFFFFF;
  border-radius: 5px;
  background-size: cover;
  background-repeat: no-repeat;
  background-image: url("img/312838563_1272671813467346_5586125078987848754_n.jpg");
  overflow: hidden;
}
.box-form .left .overlay {
  padding: 30px;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.box-form .left .overlay h1 {
  font-size: 6vmax;
  margin-top: 40px;
}
.right {
	text-align: center;
	background-image: linear-gradient(pink, white);
}
.box-form .right{
	width: 30%;
	border-radius: 5px;
  padding-left: 30px;
  padding-bottom: 30px;
  overflow: hidden;
}

.box-form .right h5 {
  font-size: 3vmax;
}
.sign-up,
.sign-in{
	text-align: center;
}
.sign-up p a,
.sign-in p a{
	text-decoration: none;
}
.sign-up h5{
	padding-left: 8px	;
}
input {
	border-radius: 5px;
}

a{
	color: red;
}
/* .box-form .right .sign-in h5{
  padding-top: 50px;
  padding-bottom: 50px;
}	 */

.box-form .right p {
  font-size: 18px;
  color: #B0B3B9;
}

.box-form .right input {
  width: 80%;
  padding: 10px;
  margin-top: 25px;
  font-size: 16px;
  border: none;
  outline: none;
  border-bottom: 2px solid black;
}

.box-form .right input[type="submit"] {
  width: 200px;
  color: white;
  font-size: 20px;
  font-weight: 400;
  padding: 12px 35px;
  border-radius: 50px;
  border: 0;
  outline: 0;
  box-shadow: 0px 4px 20px 0px #49c628a6;
  background-color: #70f5f5;
  transition: 1s;
}

.box-form .right input[type="submit"]:hover {
  
  box-shadow: 0px 4px 20px 0px rgba(40, 198, 185, 0.651);
  background-color: #49C628;
}

.box-form .right .sign-up{
  display: none;
}

.box-form .right .sign-up{
  /* padding-left: 50px; */
  padding-bottom: 10px;
  overflow: hidden;
}

.box-form .right .sign-up input {
  width: 60%;
  /* padding-left: 30px; */
  padding: 10px;
  margin-top: 25px;
  font-size: 16px;
  border: none;
  outline: none;
  border-bottom: 2px solid black;
}

.box-form .right .sign-up input[type="submit"] {
  width: 200px;
  color: white;
  font-size: 20px;
  font-weight: 400;
  padding: 12px 35px;
  border-radius: 50px;
  border: 0;
  outline: 0;
  box-shadow: 0px 4px 20px 0px #49c628a6;
  transition: 1s;
  background-color: #49C628;
}

.box-form .right .sign-up input[type="submit"]:hover {
  
  box-shadow: 0px 4px 20px 0px rgba(40, 198, 185, 0.651);
  background-image: linear-gradient(135deg, #70f5f5 10%, #286ac6 100%);
}
</style>
<body>
	<?php
	if (isset($_POST["btnSub"])) { // Đăng ký
		$name = $_POST["name"];
		$email = $_POST["email"];
		$cell = $_POST["cell"];
		$address = $_POST["address"];
		$pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);


		require_once("./sql/connect.php");

		$sql = "INSERT INTO login(hoten, sodienthoai, diaChi, email, matkhau)
				VALUES ('$name', '$cell', '$address', '$email', '$pass')";

		$result = mysqli_query($conn, $sql);

		if ($result) {
			?>
				<script>
					Swal.fire({
					icon: "success",
					title: "Đăng ký thành công",
					showConfirmButton: false,
					timer: 1000
				});
				</script>
			<?php
			
			mysqli_close($conn);
		} else {
			echo mysqli_error($conn);
		}
	}


	if (isset($_POST["btnSubIn"])) { // Đăng nhập
		$email = $_POST["email"];
		$pass = $_POST["pass"];

		require_once("./sql/connect.php");

		$sql = "SELECT count(*) as count, id, hoten, matkhau
				FROM login WHERE email = '$email'";
		
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		if($row["count"] > 0) {
			if(password_verify($pass, $row["matkhau"])) {
				echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Đăng nhập thành công",
						showConfirmButton: false,
						timer: 1000
                    }).then(function() {
                        window.location.href = "giaodien.php";
                    });
                 </script>';
				$_SESSION["email"] = $email;
				$_SESSION["matkhau"] = $pass;
			} else {
				echo '<script>
				Swal.fire({
				icon: "error",
				title: "Sai mật khẩu",
			});</script>';
			}
		} else {
			echo '<script>
				Swal.fire({
				icon: "error",
				title: "Tài khoản không tồn tại",
			});</script>';
			}
		}
	?>

	<div class="box-form">
		<div class="left">
			<div class="overlay">
			</div>
		</div>
		<div class="right">

			<!-- Đăng nhập -->
			<section class="sign-in">
				<form action="" method="post" onsubmit="return validateSignIn()">
					<h5>Đăng nhập</h5>
					<p>Chưa có tài khoản     <a href="#" onclick="changeSignUp()">Tạo tài khoản</a></p>
					<input type="text"     name="email"    id="txtEmailSignIn"  placeholder="Email"><br>
					<input type="password" name="pass"     id="txtPassSignIn"   placeholder="Mật khẩu"><br>
					<input type="submit"   name="btnSubIn" id="txtSubmitSignIn" value="Đăng nhập">
				</form>
			</section>

			<!-- Đăng ký -->
			<section class="sign-up">
				<form action="" method="post" onsubmit="return validateSignUp()">
					<h5>Đăng ký</h5>
					<p>Đã có tài khoản: <a href="#" onclick="changeSignIn()">  Đăng nhập</a></p>
					<input type="text"     name="name"    id="txtNameSignUP"    placeholder="Họ và tên">
					<input type="text"     name="email"   id="txtEmailSignUP"   placeholder="Email"><br>
					<input type="text"     name="cell"    id="txtCellSignUP"    placeholder="Số điện thoại">
					<input type="text"     name="address" id="txtAddressSignUP" placeholder="Địa chỉ">
					<input type="password" name="pass"    id="txtPassSignUp"    placeholder="Mật khẩu">
					<input type="password"                id="txtPassSignUp2"   placeholder="Nhập lại mật khẩu">
					<br>
					<input type="submit"   name="btnSub"  value="Đăng ký">
				</form>
			</section>
		</div>
	</div>

	<script type="text/javascript">
		function changeSignUp() {
			document.querySelector(".sign-in").style.display = "none";
			document.querySelector(".sign-up").style.display = "inline-block";
		}

		function changeSignIn() {
			document.querySelector(".sign-in").style.display = "inline-block";
			document.querySelector(".sign-up").style.display = "none";
		}

		// Hàm kiểm tra thanh đăng nhập
		function validateSignIn() {
			if (document.getElementById("txtEmailSignIn").value === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng nhập trống",
					text: "Quý khách vui lòng nhập email để đăng nhập",
				});
				return false;
			} else if (document.getElementById("txtPassSignIn").value === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng nhập trống",
					text: "Quý khách vui lòng nhập mật khẩu để đăng nhập",
				});
				return false;
			}

			return true;
		}

		// Hàm kiểm tra thanh đăng ký
		function validateSignUp() {
			var pass = document.getElementById("txtPassSignUp").value
			var repass = document.getElementById("txtPassSignUp2").value
			if (document.getElementById("txtNameSignUP").value === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập họ và tên để đăng ký",
				});
				return false;
			} else if (document.getElementById("txtEmailSignUP").value === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập email để đăng ký",
				});
				return false;
			} else if (document.getElementById("txtCellSignUP").value === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập số điện thoại để đăng ký",
				});
				return false;
			} else if (document.getElementById("txtAddressSignUP").value === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập địa chỉ để đăng ký",
				});
				return false;
			} else if (pass === "") {
				Swal.fire({
					icon: "warning",
					title: "Thông tin đăng ký trống",
					text: "Quý khách vui lòng nhập mật khẩu để đăng ký",
				});
				return false;
			} else if (pass !== repass) {
				Swal.fire({
					icon: "error",
					title: "Mật khẩu không khớp với nhau",
					text: "Quý khách vui lòng nhập lại mật khẩu",
				});
				return false;
			}

			return true;
		}
	</script>
</body>

</html>