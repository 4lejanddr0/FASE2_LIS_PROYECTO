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
  <a href="seleccion" class="bar">Registrarse</a>
  <a href="nosotros" class="bar">Nosotros</a>
</div>

            <div id="cuponera" class="cuponera">
                <p1 class="text">La Cuponera SV</p1>
            </div>


               <div id="transparente" class="transparente">
                  
                    </div>
                     <div id="login">


                   
                       <div id="logimg">
                    <img src="img/log.PNG" height="150px" width="150px" >
                    </div>

                    <form action="" method = "POST" >
                    {{csrf_field()}}
                                         <div id="loginput">
                
                    <label for="usuario"><b>Usuario  </b></label>
		    <input type="text" class="loginc" id="usuario" name="usuario" placeholder="Usuario">
                 
                      <label for="contra1"><b>Contraseña </b> </label>
		    <input type="password" class="loginc" id="password" name="password" placeholder="Contraseña">
		  
		    </div>
            <div id="loginboton"> 
                      <input  type="submit" value="login" class="botonlog">
                         


                   </div>
  </form >
                   
                </div>
       

               <div id="usuimg">
                    <img src="img/usuario.PNG" height="30px" width="30px" >
                    </div>
                        <div id="passimg">
                    <img src="img/password.PNG" height="30px" width="30px" >
                    </div> 
    
  



</body>

</html>
