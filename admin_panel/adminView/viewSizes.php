
<div >
  <h3>Noticias</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Título</th>
        <th class="text-center">Descrição</th>
        <th class="text-center">Data</th>
        <th class="text-center">Açoes</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from noticias";
      $result=$conn-> query($sql);
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["n_id"]?></td>
      <td><?=$row["n_titulo"]?></td>  
      <td><?=$row["n_descricao"]?></td>  
      <td><?=$row["n_data"]?></td>     
      <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
      <td><a <?php echo 'href="../admin_panel/controller/deletenoticias.php?idnoticia='.$row["n_id"].'"'?>class="btn btn-danger" type="submit" style="height:40px">Delete</a></td> 
      </tr>
      <?php
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Adicionar Noticia
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Nova Noticia</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addSizeController.php" method="POST">
            <div class="form-group">
              <label for="size">Título</label>
              <input type="text" class="form-control" name="titulo" required>
            </div>
            <div class="form-group">
              <label for="size">Descrição</label>
              <input type="text" class="form-control" name="descricao" required>
            </div>
            <div class="form-group">
              <label for="size">Data</label>
              <input type="date" class="form-control" name="data" required>
            </div>
            <div class="form-group">
              <label for="size">Imagem</label>
              <input type="file" class="form-control" name="imagem" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Adicionar</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   