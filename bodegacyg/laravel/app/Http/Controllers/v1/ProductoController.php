<?php 

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
	function getAll()
	{
		$response = new \stdClass();
		$response->success=true;

		$productos = Producto::all();

		$response->data=$productos;

		return response()->json($response,201);
	}

	function getItem($id)
	{
		$response = new \stdClass();
		$response->success=true;

		$producto = Producto::find($id);
		$response->data = $producto;

		return response()->json($response,200);
	}

	function store(Request $request)
	{
		$response = new \stdClass();
		$response->success=true;

		$producto=Producto::where("codigo","=",$request->codigo)
		->orWhere("nombre","=",$request->nombre)
		->first();
		if($producto){
			$response->success=false;
			$response->errors=[];
			$response->errors[]="Ya existe un producto con el código - ".$request->codigo." - o con el nombre - ".$request->nombre." -";
			return response()->json($response,400);
		}

		$producto = new Producto();
		$producto->codigo = $request->codigo;
		$producto->nombre = $request->nombre;
		$producto->cantidad = $request->cantidad;
		$producto->precio = $request->precio;
		$producto->save();

		$response->data=$producto;

		return response()->json($response,201);
	}

	function update(Request $request)
	{
		$response = new \stdClass;
		$response->success=true; 

		$producto = Producto::find($request->id);

		$producto->codigo = $request->codigo;
		$producto->nombre = $request->nombre;
		$producto->cantidad = $request->cantidad;
		$producto->precio = $request->precio;
		$producto->save();

		$response->data = $producto;

		return response()->json($producto,200);

	}

	function patch(Request $request)
	{
		$response = new \stdClass;
		$response->success=true;

		$producto = Producto::Find($request->id);

		if(isset($request->codigo))
		$producto->codigo = $request->codigo;
		
		if(isset($request->nombre))
		$producto->nombre = $request->nombre;

		if(isset($request->cantidad))
		$producto->cantidad = $request->cantidad;

		if(isset($request->precio))
		$producto->precio = $request->precio;

		$producto->save();

		$response->data = $producto;

		return response()->json($response,200);
	}

	function delete($id)
	{
		$response = new \stdClass();
		$response->success=true;

		$response_code;
		
		$producto = Producto::find($id);

		if($producto)
		{
			$producto->delete();
			$response_code=200;
		}
		else
		{
			$response->errors = [];
			$response->success=false;
			$response->errors[]="El elemento ya ha sido eliminado previamente";
			$response_code=400;
		}

		return response()->json($response,$response_code);
	}

}