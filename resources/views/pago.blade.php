<!DOCTYPE HTML>

<html lang="es">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Cuponera SV</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css" />


</head>

<body>


<div id="opciones">
  <a href="/" class="bar">Inicio</a>
  <a href="seleccion" class="bar">log out</a>
  <a href="nosotros" class="bar">Nosotros</a>
</div>

            <div id="cuponera" class="cuponera">
                <p1 class="text">La Cuponera SV</p1>
            </div>


               <div id="pago" class="pago">
                  
                    </div>


                   

                    <form action="" method = "POST" >
                    {{csrf_field()}}
                                         <div id="nombre">
                
                    <label for="usuario"><b>Nombre  </b></label>
		    <input type="text" class="n-tarjeta" id="nombre" name="nombre" placeholder="nombre">
                  </div>
                     <div id="n-tarjeta">
                      <label for="contra1"><b>No. Tarjeta </b> </label>
		    <input type ="number" class="n-tarjeta" id="password" name="tarjeta" placeholder="No. Tarjeta">
</div>
               <div id="fecha">
               <label for="contra1"><b>Fecha </b> </label>
		    <input type="date" class="loginc" id="password" name="fecha" placeholder="Fecha">
             </div>

                <div id="cvv">
               <label for="contra1"><b>CVV </b> </label>
		    <input type="text" class="loginc" id="password" name="cvv" placeholder="cvv">
		  
		    </div>
            <div id="aceptar"> 
                      <input  type="submit" value="Aceptar" class="botonlog">


                   </div>

                       <div id="atras"> 
                      <input  type="submit" value="Atras" class="botonlog">


                   </div>
  </form >
                   
       

               <div id="visa">
                    <img src="img/visa.JPG" height="100px" width="300px" >
                    </div>
                
  



</body>

</html>
