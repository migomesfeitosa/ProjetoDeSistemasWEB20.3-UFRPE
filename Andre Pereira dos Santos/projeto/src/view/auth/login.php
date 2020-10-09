

<head>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/login.css">

</head>

<body>
   
			<!-- Banner -->
				<section id="banner">
				
                <div class="inner">
                <div class="login-box">
				<img src="//<?php echo $_SERVER["HTTP_HOST"]; ?>/img/avatar.png" class="avatar">
                
			<h1>Entre aqui</h1>
            <form action="/auth" method="POST">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="senha" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Esqueceu sua senha</a>    
            </form>

				</div>
                </div>
                
                </section>
  



<footer >
    <?php include __DIR__ . "/../layout/footer.php" ?>
</footer>

</body>
</html>
