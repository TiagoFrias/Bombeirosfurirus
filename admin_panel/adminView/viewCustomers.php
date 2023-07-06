  <h2>Utilizadores</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID </th>
        <th class="text-center">Nome </th>
        <th class="text-center">Email</th>
        <th class="text-center">Tipo</th>
        <th class="text-center" colspan="2">Ações</th>
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
        <td><?=$row["pap_nome"]?></td>
        <td><?=$row["pap_email"]?></td>
        <td><?=$row["pap_tipo"]?></td>
        <td>
          <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal" onclick="passRowValues(<?=$row["pap_id"]?>, '<?=$row["pap_nome"]?>', '<?=$row["pap_email"]?>', <?=$row["pap_tipo"]?>)">
            Editar
          </button>
        </td>    
        <td>
          <a href="../admin_panel/controller/deleteusers.php?idutilizador=<?=$row["pap_id"]?>" class="btn btn-danger" type="submit" style="height:40px">Delete</a>
        </td>    
    </tr>
    <?php }} ?>
  </table>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Utilizador</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="./controller/editarusers.php" method="POST">
            <div class="form-group">
              <label for="pap_id">ID</label>
              <input type="text" class="form-control" id="pap_id" name="pap_id" readonly>
            </div>
            <div class="form-group">
              <label for="pap_nome">Nome</label>
              <input type="text" class="form-control" id="pap_nome" name="pap_nome" required>
            </div>
            <div class="form-group">
              <label for="pap_email">Email</label>
              <input type="text" class="form-control" id="pap_email" name="pap_email" required>
            </div>
            <div class="form-group">
              <label for="pap_tipo">Tipo</label>
              <select id="pap_tipo" name="pap_tipo">
                <option value="1">Utilizador</option>
                <option value="2">Administrador</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Guardar</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Fechar</button>
        </div>
      </div>
    </div>
  </div>


<script>
  function passRowValues(id, nome, email, tipo) {
    document.getElementById("pap_id").value = id;
    document.getElementById("pap_nome").value = nome;
    document.getElementById("pap_email").value = email;
    document.getElementById("pap_tipo").value = tipo;
  }
</script>
