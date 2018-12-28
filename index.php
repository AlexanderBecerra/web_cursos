<?php include_once 'includes/templates/header.php'?>

        <section class="seccion">

                <h2>La mejor pagina de desarrollo web</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt at recusandae eligendi incidunt, numquam veritatis provident omnis laborum magni quia, neque perferendis fuga consequuntur exercitationem nesciunt commodi repellat minima totam.</p>

        </section>

        <section class="programacion">

            <div class="contenedor-video">

                <video  autoplay muted loop poster="img/bg-talleres.jpg">
                    <source src="video/video.mp4" type="video/mp4">
                    <source src="video/video.webm" type="video/webm">
                    <source src="video/video.ogv" type="video/ogg">
               </video>
            </div><!--del video de fondo-->

            <div class="contenido-programa">

                <div class="contenedor-cronograma">
                    <div class="programa-evento">
                        <h2>Programa del Evento </h2>

                        <?php

                        require_once "includes/funciones/conexion.php";
                        $query=" SELECT * FROM categoria_evento";
                        $consulta=$mysqli->query($query);

                        ?>


                        <nav class="menu-programa">

                            <?php while($cate=$consulta->fetch_array(MYSQLI_ASSOC)){ ?>
                                <a href="#<?php echo strtolower($cate['categoria_evento'])?>"><i class="fas <?php echo $cate['icono']; ?>"></i><?php echo $cate['categoria_evento']; ?></a>
                            <?php }?>

                            <!--
                            <a href="#conferencias"><i class="far fa-comments"></i>Conferencias </a>
                            <a href="#seminarios"><i class="fas fa-building"></i>Seminarios</a>
                            -->

                        </nav>
                        <?php
                            try {
                            require_once('includes/funciones/conexion.php');
                            $sql = "SELECT id_evento , nombre_evento , fecha_evento , hora_evento , categoria_evento , nombre_invitado , apellido_invitado FROM evento ";
                            $sql .= "INNER JOIN categoria_evento ";
                            $sql .= "ON evento.id_cate_evento=categoria_evento.id_categoria ";
                            $sql .= "INNER JOIN invitados ";
                            $sql .= "ON evento.id_invi=invitados.id_invitado ";
                            $sql .= "AND evento.id_cate_evento = 1 ";
                            $sql .= "ORDER BY id_evento LIMIT 2;";
                            $sql .= "SELECT id_evento , nombre_evento , fecha_evento , hora_evento , categoria_evento , nombre_invitado , apellido_invitado FROM evento ";
                            $sql .= "INNER JOIN categoria_evento ";
                            $sql .= "ON evento.id_cate_evento=categoria_evento.id_categoria ";
                            $sql .= "INNER JOIN invitados ";
                            $sql .= "ON evento.id_invi=invitados.id_invitado ";
                            $sql .= "AND evento.id_cate_evento = 2 ";
                            $sql .= "ORDER BY id_evento LIMIT 2;";
                            $sql .= "SELECT id_evento , nombre_evento , fecha_evento , hora_evento , categoria_evento , nombre_invitado , apellido_invitado FROM evento ";
                            $sql .= "INNER JOIN categoria_evento ";
                            $sql .= "ON evento.id_cate_evento=categoria_evento.id_categoria ";
                            $sql .= "INNER JOIN invitados ";
                            $sql .= "ON evento.id_invi=invitados.id_invitado ";
                            $sql .= "AND evento.id_cate_evento = 3 ";
                            $sql .= "ORDER BY id_evento LIMIT 2;";
                            } catch (Exception $e) {
                            $error = $e->getMessage();
                            }
                        ?>
                        <?php $mysqli->multi_query($sql); ?>

                        <?php
                            do{
                            $solucion=$mysqli->store_result();

                            ?>

                            <?php $i=0 ?>

                            <?php  while($evento=$solucion->fetch_assoc()){    ?>
                                <?php  if($i % 2 == 0){  ?>

                                    <div id="<?php echo strtolower($evento['categoria_evento'])  ?>" class="info-curso ocultar clearfix">
                                <?php }?>

                                <div class="detalle-evento">
                                    <h3><?php echo html_entity_decode($evento['nombre_evento']) ?></h3>
                                    <p><i class="fas fa-clock" aria-hidden="true"></i><?php echo $evento['hora_evento']; ?></p>
                                    <p><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $evento['fecha_evento']; ?></p>
                                    <p><i class="fa fa-user" aria-hidden="true"></i><?php echo $evento['nombre_invitado']." ".$evento['apellido_invitado'];?></p>
                                </div>
                                <?php if($i % 2 ==1): ?>

                                    <a href="calendario.php" class="button float-right">Ver todos</a>
                                    </div><!--talleres-->
                                <?php endif; ?>
                                <?php $i++; ?>

                            <?php } ?>

                            <?php $solucion->free(); ?>

                        <?php } while($mysqli->more_results() && $mysqli->next_result());?>




                        <!-- <div id="conferencias" class="info-curso ocultar clearfix">
                            <div class="detalle-evento">
                                <h3>Como ser freelancer</h3>
                                <p><i class="fas fa-clock"></i>18:00 hrs</p>
                                <p><i class="fa fa-calendar"></i>16 de Dic</p>
                                <p><i class="fa fa-user"></i>Takeshi Higa Arakaki</p>
                            </div>
                            <div class="detalle-evento">
                                    <h3>Documentacion de proyectos</h3>
                                    <p><i class="fas fa-clock"></i>10:00 hrs</p>
                                    <p><i class="fa fa-calendar"></i>17 de Dic</p>
                                    <p><i class="fa fa-user"></i>Takeshi Higa Arakaki</p>
                            </div>
                            <a href="#" class="button float-right">Ver todos</a>
                        </div> talleres -->

                        <!-- <div id="seminarios" class="info-curso ocultar clearfix">
                            <div class="detalle-evento">
                                <h3>Aprender a programar en un dia</h3>
                                <p><i class="fas fa-clock"></i>12:00 hrs</p>
                                <p><i class="fa fa-calendar"></i>17 de Dic</p>
                                <p><i class="fa fa-user"></i>Humberto Miraval Primo</p>
                            </div>
                            <div class="detalle-evento">
                                    <h3>Java web vs Php</h3>
                                    <p><i class="fas fa-clock"></i>10:00 hrs</p>
                                    <p><i class="fa fa-calendar"></i>17 de Dic</p>
                                    <p><i class="fa fa-user"></i>Humberto Miraval Primo</p>
                            </div>
                            <a href="#" class="button float-right">Ver todos</a>
                        </div>talleres -->




                    </div><!--programa -evento-->
                </div><!--contenedor-->

            </div><!--contenido de programa-->
        </section><!--programacion-->


        <?php include_once "includes/templates/invitados.php" ?>





        <!-- <section class="invitados contenedor seccion">
            <h2>Nuestros invitados</h2>
            <ul class="lista-invitados clearfix">
                <li>
                    <div class="invitado">
                        <img  class="nuevos" src="img/invitado1.jpg" alt="invitado1">
                        <p>Rafael Bautista</p>
                    </div>
                </li>
                <li>
                    <div class="invitado">
                        <img class="nuevos" src="img/invitado2.jpg" alt="invitado2">
                        <p>Shari Herrera</p>
                    </div>
                </li>
                <li>
                    <div class="invitado">
                        <img class="nuevos" src="img/invitado3.jpg" alt="invitado3">
                        <p>Gregorio Sanchez</p>
                    </div>
                </li>
                <li>
                    <div class="invitado">
                        <img class="nuevos" src="img/invitado4.jpg" alt="invitado4">
                        <p>Susana Rivera</p>
                    </div>
                </li>
                <li>
                    <div class="invitado">
                        <img class="nuevos" src="img/invitado5.jpg" alt="invitado5">
                        <p>Harold Garcia</p>
                    </div>
                </li>
                <li>
                    <div class="invitado">
                        <img class="nuevos" src="img/invitado6.jpg" alt="invitado6">
                        <p>Susan Sanchez</p>
                    </div>
                </li>
            </ul>
        </section> -->

        <div class="contador parallax">
            <div class="contenedor">
                <ul class="resumen-evento clearfix">
                    <li><p class="numero"></p>Invitados</li>
                    <li><p class="numero"></p>Talleres</li>
                    <li><p class="numero"></p>Dias</li>
                    <li><p class="numero"></p>Conferencias</li>
                </ul>
            </div>
        </div>

        <section class="precios seccion">
            <h2>Precios</h2>
            <div class="contenedor">
                <ul class="lista-precios clearfix">

                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por un dia</h3>
                            <p class="numero">$30</p>
                            <ul>
                                <li><i class="fas fa-check-square"></i> Bocadillos Gratis</li>
                                <li><i class="fas fa-check-square"></i> Todas las conferencias</li>
                                <li><i class="fas fa-check-square"></i> Todos los talleres</li>
                            </ul>
                            <a href="#" class="button x hollow">Comprar</a>
                        </div>
                    </li>

                    <li>
                        <div class="tabla-precio">
                            <h3>Todos los dias</h3>
                            <p class="numero">$50</p>
                            <ul>
                                <li><i class="fas fa-check-square"></i> Bocadillos Gratis</li>
                                <li><i class="fas fa-check-square"></i> Todas las conferencias</li>
                                <li><i class="fas fa-check-square"></i> Todos los talleres</li>
                            </ul>
                            <a href="#" class="button x">Comprar</a>
                        </div>
                    </li>

                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por 2 Dias</h3>
                            <p class="numero">$45</p>
                            <ul>
                                <li><i class="fas fa-check-square"></i> Bocadillos Gratis</li>
                                <li><i class="fas fa-check-square"></i> Todas las conferencias</li>
                                <li><i class="fas fa-check-square"></i> Todos los talleres</li>
                            </ul>
                            <a href="#" class="button x hollow">Comprar</a>
                        </div>
                    </li>

                </ul>
            </div>

        </section>


        <div id="mapa" class="mapa">

        </div>

        <section class="seccion">
            <h2>Testimoniales</h2>
            <div class="textimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p><i class="fas fa-quote-left"></i>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, rem, enim ipsa odit nisi maxime quos error dicta sapiente a, sed blanditiis fuga alias harum illum quibusdam. Velit, deleniti perspiciatis.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" >
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma </span> </cite>
                    </footer>
                </blockquote>
            </div><!--testimonial-->

            <div class="testimonial">
                <blockquote>
                    <p><i class="fas fa-quote-left"></i>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, rem, enim ipsa odit nisi maxime quos error dicta sapiente a, sed blanditiis fuga alias harum illum quibusdam. Velit, deleniti perspiciatis.</p>
                    <footer class="info-testimonial clearfix" >
                        <img src="img/testimonial.jpg" >
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma </span> </cite>
                    </footer>
                </blockquote>
            </div><!--testimonial-->

            <div class="testimonial">
                <blockquote>
                    <p><i class="fas fa-quote-left"></i>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, rem, enim ipsa odit nisi maxime quos error dicta sapiente a, sed blanditiis fuga alias harum illum quibusdam. Velit, deleniti perspiciatis.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" >
                        <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma </span> </cite>
                    </footer>
                </blockquote>
            </div><!--testimonial-->
            </div>
        </section>



        <div class="newsletter parallax">
            <div class="cotenido contenedor">
                <p>registrate al newsletter:</p>
                <h3>gdlwebcamp</h3>
                <a href="#mc_embed_signup" class="boton_newsletter button transparente">Registro</a>
            </div>
        </div>

        <section class="seccion">
            <h2>Faltan</h2>
            <div class="cuenta-regresiva contenedor">
                <ul class="clearfix">
                    <li><p id="dias" class="numero"></p>dias</li>
                    <li><p id="horas" class="numero"></p>horas</li>
                    <li><p id="minutos" class="numero"></p>minutos</li>
                    <li><p id="segundos" class="numero"></p>segundos</li>
                </ul>

            </div>
        </section>
        <?php include_once 'includes/templates/footer.php'?>

