<?php
 
  include("paginaadmiheader.php");
?>
     <div id="slides"> 
              <figure>
                  <img src="assets/img/img4.png" alt=""  height="500px">
                 
              </figure>
           
           
        </div>

        <h1 class="titulo">LISTAGEM DE DADOS</h1>
        <table width="100%" border="1" bordercolor="#EEE" cellspacing="0" cellpadding="10">
            <tr>
                <td><strong>NOME</strong></td>
                <td><strong>EMAIL</strong></td>
                <td><strong>TELEFONE</strong></td>
                <td width="10"><strong>ALTERAR</strong></td>
                <td width="10"><strong>EXLUIR</strong></td>
            </tr>

        <?php

            include("conecta.php");
        $seleciona=mysqli_query($conexao, "select * from dados order by id desc");
            while($campo=mysqli_fetch_array($seleciona)){?>

        <tr>
            <td><?=$campo["nome"]?></td>
            <td><?=$campo["email"]?></td>
            <td><?=$campo["telefone"]?></td>
            <td align="center"><a href="edita.php?editaid=<?=$campo["id"]?>"><i class="fa fa-edit"></i></a></td>
            <td align="center"><a href="#" onClick="verifica"(<?=$campo["id"]?>)"><i class="fa fa-trash"></i></a></td>
        </tr>
            <?php      }?>
        </table>
