<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 include ("header.php"); 
 include ("./Classes/Connection.php");

 $conn = new \Connection();
 ?>

<body>
    <div class='features-clean'>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Usuario</th>
                        <th scope="col">Maior_50_anos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $usuarios = $conn->dml("SELECT CONCAT(nome, ' - ', genero) AS usuario,
                                        (CASE 
                                            WHEN DATEDIFF(YEAR, ano_nascimento, GETDATE()) > 50 THEN 'SIM' ELSE 'NAO'
                                        END) as maior_50_anos
                                        FROM usuario u
                                        INNER JOIN info i ON i.cpf = u.cpf
                                        WHERE genero = 'M' AND u.cpf != '59875804045'
                                        ORDER BY usuario DESC, maior_50_anos ASC");
                    foreach ($usuarios as $usuario) {
                        echo "<tr>";
                        echo "<td> $usuario[usuario] </td>";
                        echo "<td> $usuario[maior_50_anos] </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

    <div class="text-center">
        <div class="card-footer mx-auto fixed-bottom">
            <a href="./menu.php">Menu</a>
        </div>
    </div>
</body>