<!doctype html>
<html lang="tr">
  <head>
   

	<meta charset="utf-8">

	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Ikon Kutuphanesi -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
	
	<!-- Css -->
	<link rel="stylesheet" href="style.css">

	<!--------------------------------->
	<title>Web Teknoloji Projesi</title>

  </head>
 
  
<body>
<<div class="container-fluid">
		<div class="row mb-5">
		<div class="col">
			
		<nav class="navbar navbar-expand-lg navbar-light bg-a fixed-top" style="background: #c92636;">
			  
         
	<header>

		<div class="bg-dark text-light jumbotron balikcilar-jumbotron">

			<div class="container">

				<div class="col-md-6 px-0">
					<h1 class="display-4 font-italic">
						Giriş Ekranı
					</h1>
				</div>

			</div>

		</div>

	</header>
	
	<main>

		<div class="container">
			
			<?php 

				include("kullanicilar.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış.<br>";
			            echo "!!!TEKRAR DENEYİN!!!";
			            header("Refresh: 1; url=login.php");
			    }
			
			?>
			
		</div>

	</main>



	

</body>

</html>