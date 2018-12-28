<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Pagina de Conferencia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <header class="side-header">
            <div class="hero">
                <div class="contenido-header">
                    <nav class="redes-sociales">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </nav>
                    <div class="informacion-evento">
                        <!--Clearfix lo uso para limpiar los floats-->
                        <div class="clearfix">
                            <p class="fecha"><i class="far fa-calendar-alt"></i> 10-12 Marzo</p>
                            <p class="ciudad"><i class="fas fa-globe"></i> Lima,PE</p>
                        </div>
                        <h1 class="nombre-sitio">GdlWebCamp</h1>
                        <p class="slogan">la mejor conferencia <span>diseño web</span></p>
                    </div>

                </div>
           </div><!--clase hero-->
        </header>

        <div class="barra-principal">
            <div class="contenedor clearfix">
                <div class="logo">
                    <img src="img/logo.svg" alt="logotipo">
                </div>

                <div class="navegacion-movil">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>


                <nav class="navegacion-barra clearfix">
                    <a href="conferencia.php">Conferencias</a>
                    <a href="calendario.php">Calendario</a>
                    <a href="invitados.php">Invitados</a>
                    <a href="Registro.php">Reservaciones</a>
                </nav>

            </div><!--contenedor de la barra-->
        </div><!--la barra-->

         <section class="seccion  contenedor">
             <h2>Registro de Usuarios</h2>
             <form id="registro" class="registro" action="validar_registro.php" method="post">
                <div id="datos_usuario" class="caja registro clearfix">
                    <div class="campo clearfix">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre">
                    </div>
                    <div class="campo clearfix">
                        <label for="apellido">Apellido:</label>
                        <input type="text" name="apellido" id="apellido" placeholder="Tu apellido">
                    </div>
                    <div class="campo clearfix">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" placeholder="Tu correo">
                    </div>

                    <div id="error"></div>
                </div><!--datos del usuario-->

                <div class="paquetes" id="paquetes">
                    <h3>Eligue el numero de boletos</h3>

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
                                    <div class="orden">
                                        <label for="pase_un_dia">Boletos:</label>
                                        <input  type="number" id="pase_un_dia" name="boletos[]" size="3" min="0" placeholder="0" >
                                    </div>
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
                                    <div class="orden">
                                        <label for="pase_todos_dias">Boletos:</label>
                                        <input  type="number"  id="pase_todos_dias" name="boletos[]" min="0" size="3" placeholder="0" >
                                    </div>
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
                                    <div class="orden">
                                        <label for="pase_dos_dias">Boletos:</label>
                                        <input  type="number"  id="pase_dos_dias" min="0" name="boletos[]" size="3" placeholder="0">
                                    </div>
                                </div>
                            </li>

                        </ul>

                </div><!--paquetes-->

                        <div id="eventos" class="eventos clearfix">
                         <h3>Elige tus talleres</h3>
                         <div class="caja">
                               <div id="viernes" class="contenido-dia clearfix">
                                   <h4>Viernes</h4>
                                       <div>
                                           <p>Talleres:</p>
                                           <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time> Responsive Web Design</label>
                                           <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time> Flexbox</label>
                                           <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> HTML5 y CSS3</label>
                                           <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>17:00</time> Drupal</label>
                                           <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>19:00</time> WordPress</label>
                                       </div>
                                       <div>
                                           <p>Conferencias:</p>
                                           <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Como ser Freelancer</label>
                                           <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>17:00</time> Tecnologías del Futuro</label>
                                           <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>19:00</time> Seguridad en la Web</label>
                                       </div>
                                       <div>
                                           <p>Seminarios:</p>
                                           <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI y UX para móviles</label>
                                       </div>
                               </div> <!--#viernes-->
                               <div id="sabado" class="contenido-dia clearfix">
                                   <h4>Sábado</h4>
                                   <div>
                                         <p>Talleres:</p>
                                         <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>10:00</time> AngularJS</label>
                                         <label><input type="checkbox" name="registro[]" id="taller_07" value="taller_07"><time>12:00</time> PHP y MySQL</label>
                                         <label><input type="checkbox" name="registro[]" id="taller_08" value="taller_08"><time>14:00</time> JavaScript Avanzado</label>
                                         <label><input type="checkbox" name="registro[]" id="taller_09" value="taller_09"><time>17:00</time> SEO en Google</label>
                                         <label><input type="checkbox" name="registro[]" id="taller_10" value="taller_10"><time>19:00</time> De Photoshop a HTML5 y CSS3</label>
                                         <label><input type="checkbox" name="registro[]" id="taller_11" value="taller_11"><time>21:00</time> PHP Medio y Avanzado</label>
                                   </div>
                                   <div>
                                         <p>Conferencias:</p>
                                         <label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"><time>10:00</time> Como crear una tienda online que venda millones en pocos días</label>
                                         <label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"><time>17:00</time> Los mejores lugares para encontrar trabajo</label>
                                         <label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"><time>19:00</time> Pasos para crear un negocio rentable</label>
                                   </div>
                                   <div>
                                         <p>Seminarios:</p>
                                         <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>10:00</time> Aprende a Programar en una mañana</label>
                                         <label><input type="checkbox" name="registro[]" id="sem_03" value="sem_03"><time>17:00</time> Diseño UI y UX para móviles</label>
                                   </div>
                               </div> <!--#sabado-->
                               <div id="domingo" class="contenido-dia clearfix">
                                   <h4>Domingo</h4>
                                   <div>
                                         <p>Talleres:</p>
                                         <label><input type="checkbox" name="registro[]" id="taller_12" value="taller_12"><time>10:00</time> Laravel</label>
                                         <label><input type="checkbox" name="registro[]" id="taller_13" value="taller_13"><time>12:00</time> Crea tu propia API</label>
                                         <label><input type="checkbox" name="registro[]" id="taller_14" value="taller_14"><time>14:00</time> JavaScript y jQuery</label>
                                         <label><input type="checkbox" name="registro[]" id="taller_15" value="taller_15"><time>17:00</time> Creando Plantillas para WordPress</label>
                                         <label><input type="checkbox" name="registro[]" id="taller_16" value="taller_16"><time>19:00</time> Tiendas Virtuales en Magento</label>
                                   </div>
                                   <div>
                                         <p>Conferencias:</p>
                                         <label><input type="checkbox" name="registro[]" id="conf_07" value="conf_07"><time>10:00</time> Como hacer Marketing en línea</label>
                                         <label><input type="checkbox" name="registro[]" id="conf_08" value="conf_08"><time>17:00</time> ¿Con que lenguaje debo empezar?</label>
                                         <label><input type="checkbox" name="registro[]" id="conf_09" value="conf_09"><time>19:00</time> Frameworks y librerias Open Source</label>
                                   </div>
                                   <div>
                                         <p>Seminarios:</p>
                                         <label><input type="checkbox" name="registro[]" id="sem_04" value="sem_04"><time>14:00</time> Creando una App en Android en una tarde</label>
                                         <label><input type="checkbox" name="registro[]" id="sem_05" value="sem_05"><time>17:00</time> Creando una App en iOS en una tarde</label>
                                   </div>
                               </div> <!--#domingo-->
                           </div><!--.caja-->
                     </div> <!--#eventos-->

        <div id="resumen" class="resumen">
            <h3>Pago y Extras</h3>
            <div class="caja clearfix">
                <div class="extras">
                    <div class="orden">
                        <label for="camisa_evento">Camisa del evento $10 <small>(promocion 7% dtco.)</small></label>
                        <input type="number"  id="camisa_evento" name="pedido_camisa" min="0" size="3" placeholder="0">
                    </div><!--orden-->
                    <div class="orden">
                        <label for="stickers">Paquete de 10 stickers a $2 <small>(HTML5, CSS3, JavaScript, Jquery,PHP,Mysql)</small></label>
                        <input type="number"  id="etiquetas" name="pedido_etiquetas" min="0" size="3" placeholder="0">
                    </div>
                    <div class="orden">
                        <label for="regalo">--Seleccione un regalo--</label>
                        <select id="regalo" name="regalo" required>
                            <option value=""> --Seleccione un regalo--</option>
                            <option value="2">Etiquetas</option>
                            <option value="1">Pulseras</option>
                            <option value="3">Lapiceros</option>
                        </select>
                    </div>
                    <input type="button" id="calcular" class="button" value="Calcular">
                </div><!--extras-->

                <div class="total">
                    <p>Resumen:</p>
                    <div id="lista-productos">

                    </div>
                    <p>Total:</p>
                    <div id="suma-total">

                    </div>
                    <input type="hidden" name="total_pedido" id="total_pedido" >
                    <input type="submit" name="submit" id="btnRegistro" class="button" value="Pagar">
                </div>

            </div>
        </div>

         </form>
         </section>

<footer class="site-footer">
            <div class="contenedor clearfix">
                <div class="footer-informacion">
                    <h3>Sobre <span>gdlwebcamp</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id molestiae autem iusto voluptates odit ex nostrum, dolor, facilis, distinctio iure doloremque officia vel ut aliquam eos laudantium magnam consequatur magni.</p>
                </div>
                <div class="ultimos-tweets">
                    <h3>Ultimos <span>tweets</span></h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo facere non nobis ullam nemo labore similique. Facilis, in. Exercitationem minus pariatur id reiciendis obcaecati sint dolores repellendus in voluptas quisquam!</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste deserunt eum dolores quo, quod alias recusandae id expedita dolorem placeat impedit nihil explicabo sunt quaerat, mollitia saepe voluptatibus perspiciatis quam.</li>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos illum recusandae iusto exercitationem! Incidunt rerum, aperiam dolore ex minus, mollitia eaque voluptate cupiditate vitae laudantium impedit, error neque dolorem libero!</li>
                    </ul>
                </div>
                <div class="menu">
                    <h3>Redes <span>sociales</span></h3>
                    <nav class="redes-sociales">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                    </nav>
                </div>
            </div>

            <p class="derechos">Todos los derechos reservados a Mi .3.  </p>

        </footer>

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/jquery.animateNumber.js"></script>
        <script src="js/jquery.countdown.min.js" ></script>
        <script src="js/jquery.lettering.js"></script>
        <script src="js/main.js"></script>
        <script src="js/extra.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
