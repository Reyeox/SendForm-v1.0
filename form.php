<?php
/**
 * Created by PhpStorm.
 * User: Eduardo Hernández
 * Date: 17/04/2018
 * Time: 9:15
 */
?>
<?php
include 'header.php';
include 'navbar.php';
?>
<div class="form-wrap">
    <h2 style="text-align: center">Bienvenido al formulario de visitas...</h2>
    <p style="text-align:center">Ingrese sus datos y un mensaje que desee dejárnos...</p>
    <div class="other-class">
        <form action="saveData.php">
            <label for="Nombre">Ingresa Nombre:</label>
            <input type="text" id="Nombre" placeholder="Ingresa Nombre">
            <label for="Email">Ingresa Email:</label>
            <input type="text" id="Email" placeholder="Ingresa Email">
            <label for="Tel">Ingresa Telefono:</label>
            <input type="number" id="Tel" placeholder="Ingresa Número Telefónico">
            <label for="Mensaje">Ingresa Mensaje:</label>
            <textarea name="Mensaje" id="Mensaje" cols="21" rows="5" style="width: 600px"></textarea>
            <br>
            <br>
            <input type="submit" name="Agregar">
        </form>
    </div>
</div>
<?php
include 'footer.php';
?>