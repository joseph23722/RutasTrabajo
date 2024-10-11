<?php

require_once "../../app/config/App.php";

?>
<?php require_once "../includes/header.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php echo renderContenerheader("Nuevo Cliente", "Lista de cliente", SERVERURL . "views") ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="" id="formulario-clientes" autocomplete="off">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Registrar Cliente</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4 form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" placeholder="Ingrese apellidos" required>
                  </div>
                  <div class="col-md-4 form-group">
                    <label for="nombres">Nombres</label>
                    <input type="text" class="form-control" id="nombres" placeholder="Ingrese nombres" required>
                  </div>
                  <div class="col-md-4 form-group">
                    <label for="telefono">Teléfono</label>
                    <input 
                      type="tel" 
                      class="form-control text-center" 
                      id="telefono" 
                      placeholder="Ingrese teléfono"
                      minlength="9"
                      maxlength="9"
                      required>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-secondary">Limpiar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php require_once "../includes/footer.php"; ?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelector("#formulario-clientes").addEventListener('submit', async (event) => {
      event.preventDefault();
      if(await ask("¿Desea guarrdar?" , "Clientes")){
        //algoritmo para guadar
        //GET = URLSearchParams() / {}
        //POST = FormData()
        shoToast("Guardado Correctamente", "SUCCESS" ,1000, "./listar-cliente"); 
      }
      
      });
    });
  
</script>

</body>
</html>