<?php
  $id = $_GET['id'];

  if(!filter_var($id, FILTER_VALIDATE_INT)):
    die("Error");
else: 
    // include_once 'funciones/sesiones.php'; 
    include_once 'funciones/funciones.php';
  include_once 'templates/header.php';
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Editar Evento
            <small>Llena el formulario para editar un evento</small>
        </h1>
    </section>

    <div class="row">
        <div class="col-md-8">
            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editar Eventos</h3>

                    </div>
                    <div class="box-body">
                        <?php 
                        $sql = "SELECT * FROM eventos WHERE evento_id = $id ";
                        $resultado = $conn->query($sql);
                        $evento = $resultado->fetch_assoc();
    
                        ?>
                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-evento.php"> <!-- AGREGADO POR ASCC video2folder81-->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="usuario">Titulo Evento:</label>
                                    <input type="text" class="form-control" id="titulo_evento" name="titulo_evento" placeholder="Titulo del Evento" value="<?php echo $evento['nombre_evento']; ?>">
                                </div>
                                
                                <!-- </div> -->
                                <div class="form-group">
                                    <label for="nombre">Categoría: </label> 
                                     <select name="categoria_evento" class="form-control select2" id="">
                                         <option value="0">- Seleccione -</option>
                                         <?php
                                             try {
                                                 $categoria_actual = $evento['id_cat_evento'];
                                                $sql = "SELECT * FROM categoria_evento ";
                                                $resultado = $conn->query($sql);
                                                while($cat_evento = $resultado->fetch_assoc()){ 
                                                    if($cat_evento['id_categoria'] == $categoria_actual){ ?>
                                                        <option value="<?php echo $cat_evento['id_categoria']; ?>" selected><?php echo $cat_evento['cat_evento']; ?>
                                                        
                                                        </option>
                                              <?php  } else { ?>
                                                <option value="<?php echo $cat_evento['id_categoria']; ?>">
                                                <?php echo $cat_evento['cat_evento']; ?>
                                            
                                                 </option>

                                              <?php }
                                                }
                                              } catch (Exception $e) {
                                                $error = $e->getMessage();
                                                echo $error;
                                              }
                                         ?>
                                     </select>                              
                                </div>

                                <div class="form-group">
                                    <label for="date">Fecha Evento:</label>
                                    <?php
                                    $fecha = $evento['fecha_evento'];
                                    $fecha_formato = date('m/d/Y', strtotime($fecha));

                                    ?>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control pull-right" id="datepicker" name="fecha_evento" value="<?php echo $fecha_formato; ?>">
                                    </div>
                                    <!--/.input group-->
                                </div>

                                <!-- time Picker -->
                            <div class="bootstrap-timepicker">
                            <div class="form-group">
                                <label>Hora</label>
                                <?php
                                $hora = $evento['hora_evento'];
                                $hora_formato = date('h:i a', strtotime($hora));

                                ?>

                                <div class="input-group">
                                <input type="text" class="form-control datetimepicker" name="hora_evento" value="<?php echo $hora; ?>">

                                    <div class="input-group-addon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            </div>

                            <div class="form-group">
                                    <label for="nombre">Invitado o Ponente: </label> 
                                     <select name="invitado" class="form-control select2" id="">
                                         <option value="0">- Seleccione -</option>
                                         <?php
                                             try {
                                                 $invitado_actual = $evento['id_inv'];
                                                $sql = "SELECT invitado_id, nombre_invitado, apellido_invitado FROM invitados ";
                                                $resultado = $conn->query($sql);
                                                while($invitados = $resultado->fetch_assoc()){ 

                                                if($invitados['invitado_id'] == $invitado_actual){ ?>
                                                    <option value="<?php echo $invitados['invitado_id']; ?>" selected>
                                                    <?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?>
                                                    </option>
                                                    <?php } else { ?>
                                                        <option value="<?php echo $invitados['invitado_id']; ?>" >
                                                    <?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?>
                                                    </option>

                                                   <?php }
                                                } 
                                              } catch (Exception $e) {
                                                $error = $e->getMessage();
                                                echo $error;
                                              }
                                         ?>
                                     </select>                              
                                </div>


                         </div>
                            <!-- /.box-body -->

                            <div class="box-footer"> <!-- Parte modificada por ASCC video16folfer80 min9//solo que el value y el name son diferentes, no se en que momento quedaron asi, yo los modificaré, espero no pase nada malo -->
                              <input type="hidden" name="registro" value="actualizar">
                              <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-primary">Añadir</button> 
                            </div>
                        </form>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
<?php
  include_once 'templates/footer.php';
                                            endif;
?>