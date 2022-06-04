
<?php

use LDAP\Result;

 include_once 'includes/templates/header.php'; ?>
 <section class="seccion contenedor">

    <h2>La mejor conferencia de diseño web en español</h2>
    <p>
      Duis sit amet facilisis erat. Etiam metus lorem, tristique eget massa
      in, vehicula commodo ante. Cras pellentesque ex sed imperdiet
      sollicitudin. Proin malesuada, nibh non accumsan semper, neque augue
      cursus arcu, vitae rutrum enim augue non ex. Sed aliquam purus et dui
      aliquet, ac ullamcorper eros malesuada.
    </p>
  </section>
  <!--.seccion-->


  <!--PARTE EDITADA POR MELANIE-->
  <section class="programa">
      <div class="contenedor-video">
        
        <div class="slider">

          <?php
              $ids = array(1,2,3,4,5);
              $alt = array(
                  "Slide 1",
                  "Slide 2",
                  "Slide 3",
                  "Slide 4",
                  "Slide 5"
              );
              $max = count($ids);
              for($s=0;$s<$max;$s++){ ?>
                  <input type="radio" id="<?= $ids[$s]; ?>" name="image-slide" hidden />
              <?php }
          ?>
          <div class="slideshow">
              <?php for($s=0;$s<$max;$s++){ ?>
              <div class="item-slide">
                  <img src="img/<?= $ids[$s]; ?>.jpg" alt="<?= $alt[$s]; ?>" />
              </div>
              <?php } ?>
          </div>
          <div class="pagination">
              <?php for($s=0;$s<$max;$s++){ ?>
              <label class="pag-item" for="<?= $ids[$s]; ?>">
                  <img src="img/<?= $ids[$s]; ?>.jpg" alt="<?= $alt[$s]; ?>" />
              </label>
              <?php } ?>
          </div>
      </div>
      </div>
      <!--.contenedor-video-->
      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">

            <h2>Programa del evento</h2> <!-- IniciaModificacion ASCC video1folder71 -->
            <?php
                try{
                  require_once('includes/funciones/bd_conexion.php');
                  $sql = " SELECT * FROM `categoria_evento` ";
                  $resultado = $conn->query($sql);
                } catch (\Exception $e){
                    echo $e->getMessage();
                }
            ?>
            <nav class="menu-programa">
              <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                <?php $categoria = $cat['cat_evento']; ?>
              <a href="#<?php echo strtolower($categoria) ?>">
                  <i class="fa <?php echo $cat['icono'] ?>"></i> <?php echo $categoria ?> </a>
              <?php } ?>
            </nav>

            <?php
                  try{
                    require_once('includes/funciones/bd_conexion.php');
                    $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                    $sql .= " FROM eventos ";
                    $sql .= " INNER JOIN categoria_evento ";
                    $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                    $sql .= " INNER JOIN invitados ";
                    $sql .= " ON eventos.id_inv = invitados.invitado_id";
                    $sql .= " AND eventos.id_cat_evento = 1 ";
                    $sql .= " ORDER BY evento_id LIMIT 2; ";
                    $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                    $sql .= " FROM eventos ";
                    $sql .= " INNER JOIN categoria_evento ";
                    $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                    $sql .= " INNER JOIN invitados ";
                    $sql .= " ON eventos.id_inv = invitados.invitado_id";
                    $sql .= " AND eventos.id_cat_evento = 2 ";
                    $sql .= " ORDER BY evento_id LIMIT 2; ";
                    $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                    $sql .= " FROM eventos ";
                    $sql .= " INNER JOIN categoria_evento ";
                    $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                    $sql .= " INNER JOIN invitados ";
                    $sql .= " ON eventos.id_inv = invitados.invitado_id";
                    $sql .= " AND eventos.id_cat_evento = 3 ";
                    $sql .= " ORDER BY evento_id LIMIT 2; ";
                    $resultado = $conn->query($sql);
                  } catch (\Exception $e){
                      $error = $e->getMessage();
                  }
            ?>

            <?php $conn->multi_query($sql); ?>

            <?php 
                do {
                  $resultado = $conn->store_result();
                  $row = $resultado->fetch_all(MYSQLI_ASSOC);   ?>

                  <?php $i = 0; ?>
                  <?php foreach($row as $evento): ?>
                    <?php if($i % 2 == 0){ ?>
                   <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix" > 
                    <?php } ?>
                    <div class="detalle-evento">
                      <h3><?php echo ($evento['nombre_evento']) ?></h3>
                      <p><i class="fa-regular fa-clock" aria-hidden="true"></i> <?php echo $evento['hora_evento'] ?> </p>
                      <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $evento['fecha_evento'] ?> </p>
                      <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?> </p>
                    </div>
                      
                    <?php if($i % 2 == 1): ?>
                    <a href="calendario.php" class="button float-right">Ver todos</a>
                    </div><!--#talleres-->
                  <?php endif; ?>
                  <?php $i++; ?>
                  <?php endforeach; ?>
                  <?php $resultado->free(); ?>
          <?php      } while ($conn->more_results() && $conn->next_result()); ?>

  
          
         </div>
          <!--.programa-evento-->
        </div>
        <!--.contenedor-->
      </div>
      <!--.contenido-programa-->
    </section>
    <!--.programa-->
    <!--PARTE EDITADA POR MELANIE-->

    <?php include_once 'includes/templates/invitados.php'; ?> <!-- incluido por ASSC video5folder70 -->

  <div class="contador parallax">
    <!--PARALLAX ES UN EFECTO-->
    <div class="contenedor">
      <ul class="resumen-evento">
        <li>
          <p class="numero">0</p>
          Invitados
        </li>
        <li>
          <p class="numero">0</p>
          Talleres
        </li>
        <li>
          <p class="numero">0</p>
          Dias
        </li>
        <li>
          <p class="numero">0</p>
          Conferencias
        </li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearflix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por dia</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Todos los dias</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 dias</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa"></div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>
            Vestibulum mollis dapibus rutrum. Nulla ac porttitor ipsum.
            Vestibulum auctor nunc arcu, et pharetra lacus euismod sed.
          </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial" />
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
      <!--.testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>
            Vestibulum mollis dapibus rutrum. Nulla ac porttitor ipsum.
            Vestibulum auctor nunc arcu, et pharetra lacus euismod sed.
          </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial" />
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
      <!--.testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>
            Vestibulum mollis dapibus rutrum. Nulla ac porttitor ipsum.
            Vestibulum auctor nunc arcu, et pharetra lacus euismod sed.
          </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial" />
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
      <!--.testimonial-->
    </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p> regístrate al newsletter:</p>
      <h3>gdlwebcamp</h3>
      <a href="#mc_embed_signup" class="btn_newsletter button transparente">Registro</a>
    </div>
    <!--.contenido-->
  </div>
  <!--.newslette-->

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li>

          <p id="dias" class="numero"></p>
          días
        </li>

        <li>

          <p id="horas" class="numero"></p>
          horas
        </li>

        <li>
          <p id="minutos" class="numero"></p>

          minutos
        </li>
        <li>


          <p id="segundos" class="numero"></p>

          segundos
        </li>
      </ul>
    </div>
  </section>

  <?php include_once 'includes/templates/footer.php'; ?>

