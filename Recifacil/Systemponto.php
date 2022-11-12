<?php
session_start();
include('config.php');

if((!isset($_SESSION['emailponto']) == true) and (!isset($_SESSION['senhaponto']) == true)){

    unset($_SESSION['emailponto']);
    unset($_SESSION['senhaponto']);
    header('Location: loginponto.php');
}
     $emailponto = $_SESSION['emailponto'];
     $senhaponto = $_SESSION['senhaponto'];
 
     $sql3 = "SELECT nome, telefone, cidade, cnpj from recycling_center WHERE emailponto = '$emailponto' AND senhaponto = '$senhaponto'";
     $result3 = $conexao->query($sql3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleSystemponto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <a href="quit.php">Sair</a>
    <main>
    <section class="perfil">
        <figure class="foto">
            <img src="img/perfil-4.png" alt="foto de perfil"></img>
        </figure>
        <section class="dados">
           <div>
           <?php
                            while($user_data = mysqli_fetch_assoc($result3)){
                                echo "<tr>";
                                echo "<p><td>".$user_data['nome']."</td></p>";
                                echo "<p><td>".$user_data['cidade']."</td></p>";
                                echo "<p><td>".$user_data['telefone']."</td></p>";
                                $cnpj = $user_data['cnpj'];
                                echo "<td>
                                <a href='RecyclingCenterprofile.php?cnpj=$user_data[cnpj]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-gear' viewBox='0 0 16 16'>
                                <path d='M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z'/>
                                <path d='M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z'/></svg>
                                </a>
                                </td>";
                            }
                        ?>
           </div>        
        </section>
    </section>
    </main>
 



    <?php
            $sqlshowpedidos = "SELECT pedidos.id, pedidos.plastico, pedidos.vidro, pedidos.metal, pedidos.papel, pedidos.elixo, pedidos.pesomedio, users.nome, users.telefone, users.cidade, users.cpf from pedidos inner join users  on pedidos.fk_users = users.cpf ORDER BY id DESC ";
            $resultpedidos = $conexao->query($sqlshowpedidos);

                while($user_data = mysqli_fetch_assoc($resultpedidos)){
                    echo "<tr>";
                    $id = $user_data['id'];
                    echo "<p>Materiais: <td>".$user_data['plastico']." ".$user_data['vidro']." ".$user_data['metal']." ".$user_data['papel']." ".$user_data['elixo']."| Peso médio: ".$user_data['pesomedio']."Kg"." 
                    <a href='delete.php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                    </svg>
                    </a></p></td>";
                    echo "<p>ID: <td>".$user_data['id']."</td></p>";
                    echo "<p>Solicitante: <td>".$user_data['nome']."</td></p>";
                    echo "<p>Contato: <td>".$user_data['telefone']."</td></p>";
                    echo "<p>Cidade: <td>".$user_data['cidade']."</td></p><br><br></tr>";        
            }
    ?> 

</body>
</html>