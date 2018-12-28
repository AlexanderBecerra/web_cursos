<section class="seccion contenedor">
        <h2>Invitados</h2>

        <?php

            require_once "includes/funciones/conexion.php";
            $query=" SELECT * FROM invitados";

            $consulta=$mysqli->query($query);

        ?>

        <!--Este section es unico de la lista de invitados-->
        <section class="invitados contenedor seccion">

            <h2>Nuestros invitados</h2>
            <ul class="lista-invitados clearfix">

            <?php while ($invitados=$consulta->fetch_assoc()){?>

                <li>
                    <div class="invitado">
                        <a class="invitado-info" href="#invitado<?php echo $invitados['id_invitado'];?>">
                        <img  class="nuevos" src="img/<?php echo $invitados['url_imagen']?>" alt="invitado1">
                        <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'];?></p>
                        </a>
                    </div>
                </li>

                <div style="display:none;">

                    <div class="invitado-info" id="invitado<?php echo $invitados['id_invitado'];?>">
                        <h2><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'];?></h2>
                        <img  class="nuevos" src="img/<?php echo $invitados['url_imagen']?>" alt="invitado1">
                        <p><?php echo $invitados['descripcion']?></p>
                    </div>

                </div>

            <?php }?>

            </ul>

        </section>


    </section>
