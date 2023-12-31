
<div >
  <h3>Recrutamentos</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nome</th>
        <th class="text-center">Genero</th>
        <th class="text-center">Data de Nascimento</th>
        <th class="text-center">Morada</th>
        <th class="text-center">Código Postal</th>
        <th class="text-center">Contacto telefónico</th>
        <th class="text-center">Email</th>
        <th class="text-center">Carta de Condução</th>
        <th>Ações</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from recrutamento";
      $result=$conn-> query($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["r_id"]?></td>   
      <td><?=$row["r_nome"]?></td>   
      <td><?=$row["r_genero"]?></td>   
      <td><?=$row["r_data"]?></td>   
      <td><?=$row["r_morada"]?></td>   
      <td><?=$row["r_postal"]?></td>   
      <td><?=$row["r_telefone"]?></td>   
      <td><?=$row["r_email"]?></td>   
      <td><?=$row["r_carta"]?></td>   
      <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
      <td><a <?php echo 'href="../admin_panel/controller/deleterecrutas.php?idrecruta='.$row["r_id"].'"'?>class="btn btn-danger" type="submit" style="height:40px">Delete</a></td>    
      </tr>
      <?php
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Category Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addCatController.php" method="POST">
            <div class="form-group">
              <label for="c_name">Category Name:</label>
              <input type="text" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Category</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   