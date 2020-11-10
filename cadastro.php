 <?php
    include("header.php");
?>
    <div id="slides"> 
             <figure>
                 <img src="assets/img/img4.png" alt=""  height="500px">
                
             </figure>
          
          
       </div>

       <h1>PÁGINA CADASTRO</h1>
  
        <h2 class="titulo">FORMULÁRIO CADASTRO </h2>
        <form method="get" action="paginaadmin.php" class="formulario">
            <input type="text" name="fnome" placeholder="NOME" required class="input"><br>
            <input type="email" name="femail" placeholder="EMAIL" required class="input"><br>
            <input type="text" name="ftelefone" placeholder="TEL" required class="input"><br>
            <input type="submit" value="CADASTRAR" class="botform">
        </form> 
       
       <?php


include("footer.php");
?>

</body>
</html>

