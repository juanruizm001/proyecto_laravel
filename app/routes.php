<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});



/*
//Creacion de tabla en BD mediante SCHEMA
Route::get('creartablausers', function()
{
    Schema::create('users', function($tabla)
    {
        $tabla->increments('id');
        $tabla->string('name');
        $tabla->string('last_name');
        $tabla->string('email')->unique();
        $tabla->string('address');
        $tabla->integer('phone');
        $tabla->string('username');
        $tabla->boolean('level');
        $tabla->string('password');
        $tabla->timestamps();
    });
});
*/

/*
Route::get('creartablaproducts', function()
{
    Schema::create('products', function($tabla)
    {
        $tabla->increments('id');
        $tabla->string('nombre');
        $tabla->text('descripcion');
        $tabla->integer('cantidad');
        $tabla->integer('precio');
        $tabla->timestamps();
    });
    return ("Tabla de productos creada");
});
*/

/*
//Carga de datos a BD mediante routes (Más facil que mediante seeders)
Route::get('registraruser', function()
{
    $user = new User;
    $user->name="Raul";
    $user->last_name="Contreras";
    $user->email="raulito21@gmail.com";
    $user->address="Calle 9 de julio #244";
    $user->phone="52224799";
    $user->username="ra21";
    $user->level=0;
    $user->password="hola";

    //Guardamos
    $user->save();
    return "El usuario fué agregado.";
});
*/

//Registrar producto
Route::get('registrarproducto', function()
{
    $producto = new Product();
    $producto->nombre="tablet";
    $producto->descripcion="tablet de muestra";
    $producto->cantidad=30;
    $producto->precio=150;

    //Guardamos
    $producto->save();
    return "El producto fué agregado.";
});


//Buscar producto por ID
Route::get('buscar', function()
{
    $producto = Product::find(1);
    return ('El nombre del producto es: '.$producto->nombre);
});


//Buscar producto por alguna condicion o campo distinto de ID
Route::get('buscarxcondicion', function()
{
    $producto = Product::where('nombre','=','tablet')->get();
    return ('La cantidad de tablet es: '.$producto[0]['cantidad']);
});


//Actualizar producto por ID
Route::get('actualizarproducto', function()
{
    $producto = Product::find(2);
    $producto->cantidad=68;
    $producto->precio=675;
    $producto->save();
    return ('Producto actualizado');
});


//Eliminar producto por ID
Route::get('eliminar', function()
{
    $producto = Product::find(3);
    $producto->delete();
    return ('El producto con el ID fué eliminado');
});
