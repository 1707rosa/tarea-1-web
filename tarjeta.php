<?php 
$nombre="Rosa Angelica";
$apellido="Sanchez Franco";
$edad=18;
$carrera="Desarrollo de software";
$universidad="ITLA";
$mensaje= ($edad>=18) ? "Eres mayor de edad" : "Eres menor de edad";
require_once 'partes/head.php'; ?>

<style>
    #tarjeta {
        width: 300px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin: 20px auto;
        background-color: #f9f9f9;
    }
    #tarjeta td {
        padding: 5px;
    }
    #tarjeta tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    #tarjeta tr:nth-child(odd) {
        background-color: #ffffff;
    }
    #tarjeta tr:hover {
        background-color: #d1e7dd;
    }


</style>
    <h2>Tarjeta de Presentacion</h2>
    
<table id="tarjeta" >
    <tr>
        <td>Nombre</td>
        <td><?php echo $nombre; ?></td>
    </tr>
    <tr>
        <td>Apellido</td>
        <td><?php echo $apellido; ?></td>
    </tr>
    <tr>
        <td>Edad</td>
        <td><?php echo $edad; ?></td>
    </tr>
    <tr>
        <td>Carrera</td>
        <td><?php echo $carrera; ?></td>
    </tr>
    <tr>
        <td>Universidad</td>
        <td><?php echo $universidad; ?></td>
    </tr>
</table>

<h3><?= $mensaje; ?></h3>

</div>



<?php require_once 'partes/foot.php'; ?>