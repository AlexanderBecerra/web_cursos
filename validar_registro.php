<?php if(isset($_POST['submit'])):
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$regalo=$_POST['regalo'];
$total=$_POST['total_pedido'];
$fecha=date('Y-m-d H:i:s');
//pedidos
$boletos=$_POST['boletos'];
$camisas=$_POST['pedido_camisa'];
$etiquetas=$_POST['pedido_etiquetas'];
//cursos
$eventos=$_POST['registro'];
include_once "includes/funciones/funciones.php";
$pedido=productos_json($boletos,$camisas,$etiquetas);
$registro= eventos_json($eventos);
try{
    require_once "includes/funciones/conexion.php";
    $stmt=$mysqli->prepare("INSERT INTO registrados ( nombre_registrado , apellido_registrado , email_registrado , fecha_registrado , pases_articulos , talleres_registrados , regalo , total_pagado ) VALUES ( ?,?,?,?,?,?,?,? )");
    $stmt->bind_param("ssssssis",$nombre,$apellido,$email,$fecha,$pedido,$registro,$regalo,$total);
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
    header('Location: validar_registro.php?exitoso=1');
}catch(Exection $e){
    $error=$e->getMessage();
}
?>
<?php endif;?>
<?php include_once 'includes/templates/header.php'?>
<section class="seccion contenedor">
    <h2>Resumen de Usuarios</h2>
    <?php if(isset($_GET['exitoso'])){
        if($_GET['exitoso'] == "1"){
                echo "registro exitoso";
        }
        else {
        echo "zxd";
        }
    }

    ?>
</section>
<?php include_once 'includes/templates/footer.php'?>
