<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--link bootstrap-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
   rel="stylesheet" 
   integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
   crossorigin="anonymous">

    <link href="tabla.css" rel="stylesheet">

    <title>Hoja Electronica</title>  
 

</head>
<body> 
    
    <div class="container">
        <h1>Productos</h1> 
        <form action="tabla_conexion.php"  method="POST"  class="col-6">
            <label>Nombre:</label>
            <input type="text" class="form-control" id="nombre"    name="nombre">
            <label>Codigo:</label>
            <input type="number" class="form-control" id="codigo"   name="codigo">
            <label>Precio:</label>
            <input type="number" class="form-control" id="precio"   name="precio">
            <label>Cantidad:</label>
            <input type="number" class="form-control" id="cantidad"    name="cantidad">
            <div class="row mt-3">
                <button type="button" class="btn btn-success" id="agregar">Agregar</button>
                <button type="button" class="btn btn-success" id="guardar">Guardar</button>
            </div>
        </form>
        <div class="col-12 mt-3" id="productos">
            <table class="table table-striped" id="lista">
                <tr>
                    <td> Nombre</td>
                    <td> Codigo</td>
                    <td> Precio</td>
                    <td> Cantidad</td>
                    <td> Total</td>
                    <td> Acciones</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-10 text-right" id="total"></div>

     <!--pa ser sincera no me acuerdo-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<!--link squery cdn-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!--link bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!--enlazando con app.js-->
<script src="tabla.js"></script>
    
</body>
</html>