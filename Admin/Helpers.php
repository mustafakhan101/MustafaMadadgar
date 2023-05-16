<?php require_once('Config.php'); 
 session_start();
 ?>
<style> 
body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}

</style>




<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form  method="post" action="">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="name" placeholder="Helper name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="btn_">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form method="post" action="">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="LoginEmail" placeholder="Email" required="">
					<input type="password" name="LoginPassword" placeholder="Password" required="">
					<button type="submit" name="btn_SignIn">Login</button>
				</form>
			</div>
	</div>
    <?php 
    if(isset($_POST["btn_Signup"])){
        $Name = $_POST["name"];
        $Email = $_POST["email"];
        $Password = $_POST["password"];

        $Insert_Signup = "INSERT INTO `tbl_user`(`Name`, `Email`, `Password`) 
        VALUES ('$Name','$Email','$Password')";
         $Execute_query = mysqli_query($conn,$Insert_Signup);
         if($Execute_query==true){
            echo "<script>
            alert('Thank You Your Account has Been Created Succesfully')
            window.location.href='Index.php'
            </script>";


         }
         else{
            echo "<script>
            alert('REGISTRATION ERROR')
            window.location.href='Userlogin.php'
            </script>";

         }






    }
    //reg end

    if(isset($_POST["btn_SignIn"])){

        $loginEmail = $_POST["LoginEmail"];
        $LoginPassword = $_POST["LoginPassword"];

        $Select_Login = "SELECT * FROM `tbl_user` WHERE `Email` = '$loginEmail' AND `Password` = '$LoginPassword'";
        $login_query = mysqli_query($conn,$Select_Login);
        $Check_login = mysqli_num_rows($login_query);

        if ($check_login ==1) {
            echo "<script>
            alert('LOGIN ERROR')
            window.location.href='userlogin.php'
            </script>";

            
        } else {
            $Convert_Array =mysqli_fetch_array($login_query);
            $_SESSION["username"] = $Convert_Array[1];
            $_SESSION["useremail"] = $Convert_Array[2];
            header("location:Index.php");

            
            
        }
        












    }











  ?>
</body>
</html>


