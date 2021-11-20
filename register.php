<?php include ("header.php"); ?>

<body>
    <div class="contact-clean">
        <form method="post" name="form1" action="./Controller/User/register.php">
            <h2 class="sr-only">Formulário de Login</h2>
            <?php include ("form.php"); ?>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Cadastrar</button>
                <a href="index.php">Logar</a>
            </div>
        </form>
    </div>

    <script>
    $(document).ready(function() {
        $('#zipCode').mask('00000-000');
    })
    </script>
    
</body>