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
  <a href="login" class="bar">Log out</a>
  <a href="nosotros" class="bar">Nosotros</a>
</div>

            <div id="cuponera" class="cuponera">
                <p1 class="text">La Cuponera SV</p1>
                <br>
                                <p1 class="text">Gestion de usuario No autorizar</p1>

            </div>

 
 


            <div id="tabla">

     <table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">Estado</th>
      <th scope="col">Email</th>
      <th scope="col">Usuario</th>
      <th scope="col">Cliente</th>
            <th scope="col">comision</th>

      <th scope="col">ID</th>


     
    </tr>
  </thead>
  <tbody>

  @forelse ($perfiles as $perfil)

    <tr>
      <th scope="row">{{ $perfil->autorizado }}</th>
      <td>{{ $perfil->email }}</td>
      <td>{{ $perfil->usuario }}</td>
      <td>{{ $perfil->cliente }}</td>
            <td>{{ $perfil->comision }}</td>

      <td>{{ $perfil->id }}</td>

      @empty
    </tr>

    @endforelse
  </tbody>
</table>

</div>

            <div id="autorizar">

<table border="1" class="table">
  <tr>
    <td colspan="3">Ingrese el ID a autorizar</td>
  <tr>                                  
       <form action="perfil"  >
    <td> </td>
        <td> </td>

        <td><input  type="submit" value="Autorizar" class="perfil"></td>
 
  </form >
  </tr>
     <form action="" method = "POST" >
                                   {{csrf_field()}}
   <tr>
    <td colspan="2">   <input type="text" class="perfil" id="id" name="id" placeholder="Ingrese el ID">  </td>
    <td><input  type="submit" value="No autorizar" class="perfil"></td>
  </tr>

   </form >


</table>
</div>


     <div id="estado">
<table border="1" class="table">
    <td colspan="3">Codigo de estado</td>
  <tr>
    <td>0</td>
    <td>pendiente de autorizar</td>
   
  </tr>
  <tr>
    <td>1</td>
    <td>Autorizado</td>
    
  </tr>
    <tr>
    <td>2</td>
    <td>No autorizado</td>
    
  </tr>
</table>
</div>


</body>

</html>
