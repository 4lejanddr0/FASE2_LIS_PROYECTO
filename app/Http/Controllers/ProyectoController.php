<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\usuario;
use App\Models\pago;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

  public function empresa(){ return view('registro'); }
  public function inicio(){ return view('inicio'); }
  public function seleccion(){ return view('seleccion');}
  public function nosotros(){ return view('nosotros');}
  public function aprobacion(){ return view('aprobacion');}
  public function nologin(){ return view('nologin');}
    public function factura(){ return view('factura');}
        public function cupon(){ return view('cupon');}
public function compra(){ return view('compra');}
public function compraempresa(){ return view('compraempresa');}

  /*public function aprobacion(){ return view('aprobacion');} */ 
  public function login(){ return view('login');}




/*registro de cliente*/
  public function cliente(){ return view('usuario');}
  public function principal(){ return view('inicio');}
    public function pago(){ return view('pago');}



 public function verificarcliente(request $request){

$cliente = new usuario;
$cliente->roll = '2';
$cliente->autorizado = '0';
$cliente->email = $request->email;
$cliente->usuario = $request->usuario;
$cliente->password= $request->password;
$cliente->nombre =  $request->nombre;
$cliente->apellido =  $request->apellido;
$cliente->empresa = 'N/A';
$cliente->direccion = 'N/A';
$cliente->telefono ='N/A';
$cliente->dui = $request->dui;
$cliente->nit = 'N/A';
$cliente->fecha = $request->fecha;
$cliente->cliente = 'cliente';
$cliente->comision = '0';

$cliente->save();
         return redirect('/aprobacion');

   }    


/*registro de empresa*/
   public function verificar(request $request){


$registro = new usuario;
 $registro->roll = '3';
  $registro->autorizado = '0';
 $registro->email = $request->email;
 $registro->usuario = $request->usuario;
 $registro->password= $request->password;
 $registro->nombre = 'N/A';
 $registro->apellido = 'N/A';
 $registro->empresa = $request->empresa;
 $registro->direccion = $request->direccion;
 $registro->telefono = $request->telefono;
 $registro->dui = 'N/A';
 $registro->nit = $request->nit;
 $registro->fecha = 'N/A';
 $registro->cliente = 'empresa';
  $registro->comision = '0';



 $registro->save();

          return redirect('/aprobacion');


   }    


   /*LOGIN*/
   public function verificarlogin(request $request){

   $login =usuario::where('usuario',$request->usuario)->first();
     $login2 =usuario::where('password',$request->password)->first();
if($login and $login2 == null){
              return redirect('/nologin');

}
else
{
if(usuario::where('roll','1')->count() >0){

         return redirect('/perfil');

}
elseif (usuario::where('roll','2')->count() >0){

         echo 'Su roll es cliente';

}   

elseif (usuario::where('roll','3')->count() >0){

         echo 'Su roll es empresa';

}


}

   }  


public function perfil(){

$usuarios = usuario::all();
return view ('perfil',['perfiles'=>$usuarios]);

}



 public function perfilpost(request $request){

$usuario = usuario::find($request->id);

$usuario->comision =  $request->comision;
$usuario->autorizado =  "1";

$usuario->save();
         return redirect('/perfil');

   }    




    public function pagopost(request $request){

$cliente = new pago;
$cliente->nombre = $request->nombre;
$cliente->tarjeta = $request->tarjeta;
$cliente->fecha= $request->fecha;
$cliente->cvv =  $request->cvv;

$cliente->save();
         return redirect('/factura');
    }



    public function perfil2(){

$usuarios = usuario::all();
return view ('perfil2',['perfiles'=>$usuarios]);

}





 public function perfil2post(request $request){

$usuario = usuario::find($request->id);

$usuario->comision  =  "";
$usuario->autorizado =  "2";

$usuario->save();
         return redirect('/perfil2');

   }    


   }    
