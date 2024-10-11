<?php

require_once "../../app/config/App.php";

?>
<?php require_once "../includes/header.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php echo renderContenerheader("Clientes", "Inicio" ,SERVERURL ."views/cleintes/listar-cliente") ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="registrar-cliente.php" class="btn btn-primary">Registrar Cliente</a>
          </div>
          <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped" id="tableCliente">
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Teléfono</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Carlos</td>
                  <td>Sanchez</td>
                  <td>123456789</td>
                  <td>carlos@example.com</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Maria</td>
                  <td>Gomez</td>
                  <td>987654321</td>
                  <td>maria@example.com</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Juan</td>
                  <td>Perez</td>
                  <td>456123789</td>
                  <td>juan@example.com</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Ana</td>
                  <td>Martinez</td>
                  <td>321654987</td>
                  <td>ana@example.com</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Pedro</td>
                  <td>Lopez</td>
                  <td>789456123</td>
                  <td>pedro@example.com</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once "../includes/footer.php"; ?>


</body>

</html>