
<html>

<head>
<link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

</head>

<body>
<!-- Header -->
<header id="header">
				
	
					

					<div id="sair">
					<h1>Olá <?php echo $_SESSION["user_name"] ?></h1>
					

					<form action="/logout" method="POST">
				
   					<button type="submit"><i class="fas fa-sign-out-alt fa-2x"></i></button>
					</form>
</div>
					
					
				
                  
					
					
			
</header>
</body>
</html>