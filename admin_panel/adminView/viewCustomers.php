<div >
  <h2>Utilizadores</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID </th>
        <th class="text-center">Nome </th>
        <th class="text-center">Email</th>
        <th class="text-center">Ações</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from pap_registar";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
      <tr>
        <td><?=$row["pap_id"]?></td>
        <td><?=$row["pap_nome"]?>
        <td><?=$row["pap_email"]?></td>
        <td><a <?php echo 'href="../admin_panel/controller/deleteusers.php?idutilizador='.$row["pap_id"].'"'?>class="btn btn-danger" type="submit" style="height:40px">Delete</a></td>    
      </tr>
    <?php
           
        }
    }
    ?>
  </table>
</div>