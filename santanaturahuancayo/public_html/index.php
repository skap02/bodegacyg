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
    <title>Santa Natura Huancayo</title>
    <link rel="preload" href="css/style.css" as="style">
    <link href="css/style.css" rel="stylesheet">
</head>
<body> 
    <header class="dtv">
        <img class="logo" src="img/logo.png">
    </header>

    <!--   OCULTAR CODIGO  -->
<div class="nav-bg">
    <nav class="navegacion-principal contenedor">
        <a href="#">DESCRIPCIÓN</a>
        <a href="#">PRODUCTOS</a>
        <a href="#">PROMOCIONES</a>
        <a href="#">CONTACTANOS</a>

    </nav>
</div>
 
    <section class="tienda">
        <div class="contenido-tienda">
<!--    <a class="boton" href="">facebook</a>
        <a class="boton" href="">whatsapp</a>   -->

        </div>

        
    </section>

    <main class="contenedor sombra">
        <br>
        <h2 class="titulo2" id="oferta">OFERTAS DEL MES</h2>

        <div class="ofertas">
    
        <section class="productos">            
            <div class="img">
                <img class="imagen" src="img/111.jpg">
            </div>
            <a class="boton" id="solicitar" href="">Solicitar</a>
        </section>
        
        <section class="productos">
            <div class="img">
                <img class="imagen2" src="img/222.jpg">
            </div>
            <a class="boton" id="solicitar" href="">solicitar</a>
        </section>
        
        <section class="productos">
            <div class="img">
                <img class="imagen3" src="img/333.jpg">
            </div>
            <a class="boton" id="solicitar" href="">solicitar</a>
        </section>
    </div> 
    
        <section>
            <h2 class="titulo2" id="oferta">Contacto</h2>

            <form class="formulario">
                <fieldset>
                    <legend>Rellene el Formulario</legend> 
                <div class="contenedor-campos">
                    <div class="campos">
                        <label>Nombre</label>
                        <input class="input-text" type="text" placeholder="Tu Nombre">
                    </div>
                    
                    <div class="campos">
                        <label>Telefono</label>
                        <input class="input-text" type="tel" placeholder="Tu Teléfono">
                    </div>
                    
                    <div class="campos">
                        <label>Correo</label>
                        <input class="input-text" type="email" placeholder="Tu correo">
                    </div>


                    <div class="campos">
                        <label>Mensaje</label>
                        <textarea class="input-text"></textarea>
                    </div>
                </div> <!--contenedor de campos-->
            
                <div class="alinear-derecha flex">
                    <input class="boton w-sm-100" type="submit" value="Enviar">
                </div>
               
                </fieldset>
            </form>
            <br>
        </section>
    </main>  
    <footer>
        <p>EL FIN JUSTIFICA LOS MEDIOS</p>
    </footer>  
</body>
</html>