<!DOCTYPE html>
	
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="login/style-login.css">

<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
		background-color: #ffbe54;}

h2 {
	text-align: center;
}

	input[type=text], input[type=password] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
}

button {
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%;
}

button:hover {
  opacity: 0.7;
}

.imgcontainer {
  text-align: center;
  margin: 40px 0 0 0;
  padding : 0;
}

img.logo {
  width: 20%;
}

.container {
  padding:0 260px 0 260px;
}

}
</style>
</head>
<body>

<div class="imgcontainer">
	<img src="../Assets/logo.png" class="logo">
</div>

<div class="container">
<h2>LAMAN LOGIN KASIR</h2>

	<form action="auth.php" method="post">
		<label for="idkasir"><b>ID Kasir</b></label>
		<input type="text" placeholder="Masukkan ID Kasir" name="idkasir" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Masukkan Password" name="psw" required>
        
		<button type="submit">Login</button>
		
    </form>
  </div>

</body>
</html>