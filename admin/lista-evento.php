<?php
//include_once 'funciones/sesiones.php';
include_once 'templates/header.php';
include_once 'templates/barra.php';
include_once 'templates/aside.php';
include_once 'funciones/funciones.php';
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Listado de Eventos
      <small> Aquí podras editar/borrar eventos </small>
    </h1>

  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Maneja los eventos en esta sección</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="registros" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Categoría</th>
                  <th>Invitado</th>
                  <th>Acciones</th>

                </tr>
              </thead>
              <tbody>

                <?php

try {
  $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
  $sql .= " FROM eventos ";
  $sql .= " INNER JOIN categoria_evento ";
  $sql .= " ON eventos.id_cat_evento=categoria_evento.id_categoria ";
  $sql .= " INNER JOIN invitados ";
  $sql .= " ON eventos.id_inv=invitados.invitado_id ";
  $sql .= " ORDER BY evento_id ";
  $resultado = $conn->query($sql);
} catch (Exception $e) {
  $error = $e->getMessage();
  echo $error;
}
                  while ($eventos = $resultado->fetch_assoc()) { ?>

                    <tr>
                      <td> <?php echo $eventos['nombre_evento']; ?></td>
                      <td> <?php echo $eventos['fecha_evento']; ?></td>
                      <td> <?php echo $eventos['hora_evento']; ?></td>
                      <td> <?php echo $eventos['cat_evento']; ?></td>
                      <td> <?php echo $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']; ?></td>
                      <td>

                        <a href="editar-evento.php?id=<?php echo $eventos['evento_id'];  ?>" class="btn bg-orange btn-flat margin">
                          <i class="fa fa-pencil"></i>
                        </a>

                        <a href="#" data-id="<?php echo $eventos['evento_id'];  ?>" data-tipo="evento" class="btn bg-maroon btn-flat margin borrar_registro">
                          <i class="fa fa-trash"></i>
                        </a>

                      </td>
                    </tr>

                <?php   }    ?>
                <?php       ?>
              </tbody>
              <tfoot>

                <tr>
                  <th>Nombre</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Categoría</th>
                  <th>Invitado</th>
                  <th>Acciones</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once 'templates/footer.php' ?>


<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->