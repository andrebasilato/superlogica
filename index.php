<?php include ("header.php"); ?>

<body>

    <div class="login-clean">
        <form method="post" name="form1" action="./Controller/User/login.php">
        <h2 class="sr-only">Formulário de Login</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="login" id="login" placeholder="Login" autocomplete="off"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Senha" autocomplete="off" ></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">ENTRAR</button></div>
            <span class="forgot">Não tem cadastro?</span><a href="register.php" class="forgot"><b>CADASTRAR</b></a>
            
        </form>
    </div>

</body>