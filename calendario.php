<?php include_once 'includes/templates/header.php'?>


    <section class="seccion contenedor">
        <h2>Calendario</h2>

        <?php

            require_once "includes/funciones/conexion.php";
            $query=" SELECT  id_evento,nombre_evento,fecha_evento,hora_evento,categoria_evento,icono,nombre_invitado,apellido_invitado  FROM evento ";

            //aqui uso la tabla extra donde se enlaza(relacion)
             $query .=" INNER JOIN categoria_evento ";
            //aqui le doy la logica de igualdad
            //ON tablaprincipal.(el identificador que usare de la tabla) =
            //tablaQueUsare.(el identificador de esa tabla)
             $query .=" ON evento.id_cate_evento = categoria_evento.id_categoria ";

            $query .=" INNER JOIN invitados ";
             //aqui le doy la logica de igualdad
            $query .=" ON evento.id_invi = invitados.id_invitado ";

            $consulta=$mysqli->query($query);

        ?>

        <div class="calendario">
            <?php
                //para mi formateo de un nuevo array 8creado x mi

                $calendario=array();

                while ($fila=$consulta->fetch_assoc()) {
                    //creo mi variable para ordenar
                    $fecha=$fila['fecha_evento'];
                    $evento = array(
                        'titulo'=>$fila['nombre_evento'],
                        'fecha'=>$fila['fecha_evento'],
                        'hora'=>$fila['hora_evento'],
                        'categoria'=>$fila['categoria_evento'],
                        'icono'=>$fila['icono'],
                        'invitado'=>$fila['nombre_invitado'] . " " . $fila['apellido_invitado']
                    );
                    //abro 2 [] uno para lo que quiero ex fecha de evento ordenado
                    $calendario[$fecha][]=$evento;
                    ?>

               <?php }?>


               <?php
               //imprime todo los eventos
               foreach ($calendario as $dia => $lista_eventos) { ?>

                 <h3>
                 <i class="fa fa-calendar" ></i>
                  <?php
                  //imprimimos la fecha

                  setlocale(LC_TIME,'es_ES.UTF-8');

                  //windows
                  setlocale(LC_TIME, 'spanish');
                  //se formatea de acuerdo al tema español
                  echo strftime ("%A, %d de %B del %Y",strtotime($dia) );

                  ?>
                 </h3>

                <?php foreach ($lista_eventos as $evento) { ?>

                    <div class="kurosawa">

                        <p class="titulo"> <?php echo $evento['titulo']; ?></p>

                        <p class="hora">
                           <i class="fa fa-clock" aria-hidden="true"></i>
                           <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                        </p>

                        <p>
                         <i class="fa <?php echo $evento ['icono']; ?>" aria-hidden="true" ></i>
                         <?php echo $evento['categoria']; ?>
                        </p>

                        <p>
                           <i class="fa fa-user" aria-hidden="true"></i>
                           <?php echo $evento['invitado']; ?>
                        </p>

                    </div>

                <?php } //fin del foreach de los eventos?>

               <?php } //fin del foreach de fechas ?>

        </div><!--calendario-->

    </section>

<?php include_once 'includes/templates/footer.php'?>
