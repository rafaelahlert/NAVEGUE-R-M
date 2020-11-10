<?php
 
  include("header.php");
?>
     <div id="slides"> 
              <figure>
                  <img src="assets/img/img4.png" alt=""  height="500px">
                 
              </figure>
           
           
        </div>

        <h1>HOTEL R&M</h1>
        <?php
       
    include("conecta.php");

    $recnome=$_GET["fnome"];
    $recemail=$_GET["femail"];
    $rectel=$_GET["ftelefone"];

    mysqli_query($conexao, "INSERT INTO `dados` (`id`, `nome`, `email`, `telefone`) VALUES('$recnome', '$recemail', '$rectel')");

  header("location:paginaadmin.php")

    ?>  
