<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./imgfares/favicon.jpg.jpg" type="image/jpg" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="./EstilosCssF/dcoloresf.css">
    <link rel="stylesheet" type="text/css" href="./EstilosCssF/diseñocssf.css">
    
    <script src="./JScript/acciones_script.js"></script>
    
    <title>Inventario-fares</title>
</head>
<body>
    <header id="titulo1" class="fcolor-d5">
        <h1>Ediciones Fares</h1>
    </header>
    <nav class="fcolor-l4">
        <ul>
            <li><a href="#">Principal</a></li>
            <li><a href="#">Libros</a></li>
            <li class="f-desplegable">
                <a href="#" class="btndesplegable">Inventario</a>
                <div class="cont-desplegable">
                    <a href="cproductos.php">Crear productos</a>
                    <a href="#">Consultar productos</a>
                </div>
            </li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
    <section class="fcolor-l1 seccion-form">
        <div class="s-encabezado">
            <h2>Inventario</h2>
        </div>
        <form class="fcolor-l5" action="guardar.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div id="codnom">
                <label class="codnom1">Codigo: 
                    <input type="text" name="codigo" id="codigo" pattern="[0-9]+" placeholder="Ingresar solo numeros" size="12" autofocus required> 
                </label>
                <label class="codnom1">Producto: 
                    <input type="text" class="campof" name="nom-producto" id="nom-producto" pattern="^[A-Za-z\s]{3,100}" placeholder="Ingresar solo letras" size="45" required> 
                </label>
            </div>
            <div id="cospor">
                <label class="codnom1">Costo: 
                    <input type="text" class="campof" name="costo" id="costo" pattern="[0-9]+([,\.][0-9]+)?"> 
                </label>
                <label>Porcentaje de venta: 
                    <input type="text" name="porc_venta" id="porcentaje" maxlength="3" size="4"> 
                </label>
            </div>
            <div id="prefecha">
                <label class="codnom1">Precio de venta: 
                    <input type="text" class="campof" name="pventa_resultado" id="pventa" readonly> 
                </label>
                <label class="codnom1">Fecha: 
                    <input type="date" class="campof" name="fecha" id="fecha"> 
                </label>
            </div>
            <div id="csimagen">
                <img src="" width="200px" alt="Imagen del producto...">
            </div>
            <div id="botonimg">
                <input type="file" class="campof" name="imagen" id="imagen" accept="image/*">
            </div>
            <input type="submit" value="guardar">
        </form>
    </section>
    <footer class="fcolor-d5">
        <p>Derechos Reservados &copy; 2004-2023 </p>
    </footer>
</body>
</html>