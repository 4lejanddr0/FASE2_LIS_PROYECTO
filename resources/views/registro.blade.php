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
   
        
              
                     <div id="registro">
                     <div id="registroimg">
                    <img src="img/log.PNG" height="150px" width="150px" >
                    </div>
                    <form action="" method = "POST" >
                    {{csrf_field()}}
                    <div id="label">
                    <label for="empresa"><b>Nombre de empresa  </b></label>
		    <input type="text" class="registro" id="empresa" name="empresa" placeholder="Nombre de empresa ">
                    
                      <label for="NIT">NIT de empresa  </label>
		    <input type="number" class="registro" id="nit" name="nit" placeholder="NIT de empresa ">


            
            <label for="direccion">Direccion  </label>
		    <input type="text" class="registro" id="direccion" name="direccion" placeholder="Direccion">
                      <label for="telefono">telefono  </label>
		    <input type="number" class="registro" id="telefono" name="telefono" placeholder="Telefono ">
                     <label for="email">Correo Electronico  </label>
		    <input type="text" class="registro" id="email" name="email" placeholder="Correo Electronico ">
            @error('email')
            <small class="error">
            <strong>{{$message}}</strong>
            </small>
             @enderror
                     <label for="usuario">Usuario </label>
		    <input type="text" class="registro" id="usuario" name="usuario" placeholder="Usuario ">
                     <label for="Contra">Contraseña </label>
		    <input type="password" class="registro" id="Contra" name="password" placeholder="Contraseña  ">
             </div>


            <div id="registrarme"> 
                      <input class="botonlog" type="submit" value="registrarme" class="boton agregar">
                                 </div>
                       
                </div>
                   <div id="terminos"> 

<label><input type="checkbox" id="cbox1" value="first_checkbox" /> He leido y acepto los terminos y condiciones</label>

                            </div>
 </form >
  
            


</body>

</html>
