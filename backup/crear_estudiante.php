<?php require_once("./component/header.php"); ?>

<script src="resources/js_jadesoft/crear_estudiante.js"></script>	

<div id="content" class="left_content">
    <table>
        <tr><th>CREAR ESTUDIANTE</th></tr>

    </table>


    <form id="form_estudiante" name="form_estudiante" >
        <input type="hidden" name="id_estudiante" value="0" id="id_estudiante" />
        <input type="hidden" name="accion" value="guardar" id="accion" />
        <table>

            <tr> 
                <td> MATRICULA </td> 
                <td><input class="form-input" type="text" name="matricula" id="matricula"> 
                    <img id="consultar_estudiante" src="resources/imagenes/zoom_30.png" alt="Consulta Estudiante"/></td>
                <td rowspan="4"> <!--input class="form-btn" type="reset" name="limpiar" value="limpiar" id="resetiar"--> 
                    <img id="nuevo" src="resources/imagenes/document_orientation_portrait_60.png" alt="Nuevo Estudiante" /><br/>
                    <img id="guardar" src="resources/imagenes/diskette_60.png" alt="Crear Estudiante" /><br/>
                    <img id="borrar" src="resources/imagenes/trash_can_60.png" alt="Eliminar Estudiante" /><br/>
                </td>

            </tr>
            <tr> 
                <td> NOMBRE </td> 
                <td><input class="form-input" type="text" name="nombre" id="nombre"> </td>

            </tr>
            <tr> 
                <td> APELLIDO </td> <td>
                    <input class="form-input" type="text" name="apellido" id="apellido"> </td>

            </tr>
            <tr> 
                <td> ESTADO </td> 
                <td><input type="radio" name="habilitado" value="1" checked> ACTIVO<br>
                    <input type="radio" name="habilitado" value="0" > INACTIVO<br>
                </td>

            </tr>

        </table>
    </form>          


    <div id="dialog" title="Lista de Estudiantes">
        <div id="estudiante-contain" class="ui-widget">
            <input type="text" id="busqueda" />
            <div id="resultado"></div>
        </div>
    </div>

</div>

<?php

require_once("./component/footer.php");
