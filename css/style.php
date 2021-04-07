<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Roboto', sans-serif;
}
.wrapper{
	width: 100%;
	height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
}
.form{
	width: 50%;
	box-shadow: 1px 3px 10px rgba(0, 0, 0, 0.10);
	border-radius: 10px;
}
.header{
	background: #57b847;
	min-height: 100px;
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 10px 10px 0 0;
}
.header h2{
	color: #fff;

	font-size: 25px;
}
.input-1{
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 50px;
}
.input-2, .btn{
  display: flex;
  align-items: center;
  justify-content: center;

}
input{
	width: 80%;
	border: none;
	background: #ebebeb;
	border-radius: 50px;
	margin: 5px 50px 10px 50px;
	padding: 18px;
	font-size: 16px;
	color: #000;
}
.text{
  display: flex;
  align-items: center;
  justify-content: right;
  margin: 5px 80px 5px 0;
}
.text p{
	color:#333;
	cursor: pointer;
}
.text span{
	color: red;
}
button{
	width: 80%;
	border: none;
	background: #57b847;
	border-radius: 50px;
	margin: 5px 50px 10px 50px;
	padding: 18px;
	font-size: 16px;
	color: #fff;
	cursor: pointer;
	transition: all 0.3s ease;
	border: 2px solid #57b847;
}
button:hover{
	border: 2px solid #57b847;
	color: #57b847;
	background: transparent;
}
.account{
	margin-top: 100px;
	text-align: center;
	font-size: 22px;
	color: #333;
	cursor: pointer;
}
.sign-up{
	margin: 10px 0 20px 0;
	text-align: center;
	font-size: 22px;
	color:red;
	cursor: pointer;
}
	</style>
</head>
<body>
	
</body>
</html>