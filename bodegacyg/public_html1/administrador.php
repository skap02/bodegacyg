<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Birthstone&family=Festive&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Birthstone&family=Festive&display=swap" rel="stylesheet">
    <title>Bodega CyG - Administrador</title>
    <title>Bodega CyG</title>
    <link rel="preload" href="css/style.css" as="style">
    <link href="css/style.css" rel="stylesheet">
    <body bgcolor="black"></body>
    
</head>
<body> 
    <!-- Logo del proyecto -->
<!--    <header class="dtv">
        <img class="logo" src="img/logo1.png">
    </header>    -->

    <!--   OCULTAR CODIGO  -->
<div class="nav-bg">
    <nav class="navegacion-principal contenedor">
        <a href="http://localhost/bodegacyg/bodegacyg/public_js/frmNuevaCategoria.html">NUEVA CATEGORIA</a>
        <a href="http://localhost/bodegacyg/bodegacyg/public_js/frmNuevoProducto.html">NUEVO PRODUCTO</a>        
        <a href="http://localhost/bodegacyg/bodegacyg/public_html1/">PÁGINA PRINCIPAL</a>

</div>
    <!-- Imagen de presentación  -->
    <section class="tienda">
        <div class="contenido-tienda">
        <!--  <a class="boton" href="">facebook</a>
        <a class="boton" href="">whatsapp</a>   -->
        </div>
    </section>
    <!--  Productos en oferta  -->
    <main class="contenedor sombra">
        <br>
        <h2 class="titulo2" id="oferta">OFERTAS DEL MES</h2>

        <div class="ofertas">
    <!-- Primera iamgen -->
        <section class="productos">            
            <div class="img">
                <img class="imagen" src="img/1.jpg">
            </div>
            <a class="boton" id="solicitar" href="">COMPRAR</a>
        </section>
    <!-- Segunda imagen -->   
        <section class="productos">
            <div class="img">
                <img class="imagen2" src="img/2.jpg">
            </div>
            <a class="boton" id="solicitar" href="">COMPRAR</a>
        </section>
    <!-- Tercera imagen -->    
        <section class="productos">
            <div class="img">
                <img class="imagen3" src="img/3.jpg">
            </div>
            <a class="boton" id="solicitar" href="">COMPRAR</a>
        </section>
    </div> 
    <!-- Formulario -->
        <section>
            <h2 class="titulo2" id="oferta">Contacto</h2>

            <form class="formulario">
                <fieldset>
                    <legend>Rellene el Formulario</legend> 
                <div class="contenedor-campos ">
                    <div class="campos">
                    <!-- Nombre -->    
                        <label>Nombre</label>
                        <input class="input-text" type="text" placeholder="Tu Nombre">
                    </div>
                    <!-- Telefono -->
                    <div class="campos">
                        <label>Telefono</label>
                        <input class="input-text" type="tel" placeholder="Tu Teléfono">
                    </div>
                    <!-- Correo -->
                    <div class="campos">
                        <label>Correo</label>
                        <input class="input-text" type="email" placeholder="Tu correo">
                    </div>
                    <!-- Mensaje -->
                    <div class="campos">
                        <label>Mensaje</label>
                        <textarea class="input-text"></textarea>
                    </div>
                </div>
                <!--contenedor de campos-->
            
                <div class="alinear-derecha flex">
                    <input class="btn btn-outline-secondary" type="submit" value="Enviar">
                </div>
               
                </fieldset>
            </form>
            <br>
        </section>
    </main>  
    <!-- Final del documento -->
    <footer>
        <p>EL FIN JUSTIFICA LOS MEDIOS</p>
    </footer>  
</body>
</html>