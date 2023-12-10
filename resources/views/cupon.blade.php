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
   
        
              
                     <div id="registro12">
                     <div id="registroimg">
                    <img src="img/log.PNG" height="150px" width="150px" >
                    </div>
                    <form action="" method = "POST" >
                    {{csrf_field()}}
                    <div id="label">
                    <label for="empresa"><b>Título de la oferta </b></label>
		    <input type="text" class="registro" id="empresa" name="empresa" placeholder="Título de la oferta  ">
                    
                      <label for="NIT">Precio Regular  </label>
		    <input type="number" class="registro" id="nit" name="nit" placeholder="Precio regular ">


            
            <label for="direccion">Precio Oferta  </label>
		    <input type="text" class="registro" id="direccion" name="direccion" placeholder="precio oferta">
                      <label for="telefono">fecha de inicio  </label>
		    <input type="date" class="registro" id="telefono" name="telefono" placeholder="fecha de inicio ">
                        <label for="telefono">fecha de fin  </label>
		    <input type="date" class="registro" id="telefono" name="telefono" placeholder="fecha de fin ">
                     <label for="email">Fecha limite  </label>
		    <input type="date" class="registro" id="email" name="email" placeholder="Fecha limite ">
            @error('email')
            <small class="error">
            <strong>{{$message}}</strong>
            </small>
             @enderror
                     <label for="usuario">Cantidad de cupones </label>
		    <input type="text" class="registro" id="usuario" name="usuario" placeholder="cantidad de cupones ">
                     <label for="Contra">descripcion de la oferta </label>
		    <input type="password" class="registro" id="Contra" name="password" placeholder="descripcion de la oferta  ">
             </div>


            <div id="registrarme12"> 
                      <input class="botonlog" type="submit" value="registrarme" class="boton agregar">
                                 </div>
                       
                </div>
                   <div id="terminos12"> 

<label><input type="checkbox" id="cbox1" value="first_checkbox" /> Estado de la oferta</label>

                            </div>
 </form >
  
            


</body>

</html>
