<?php 

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
	/*function getAll(Request $request)
	{

		$search = $request->search;

		$fecha_inicio = $request->fecha_inicio;
		$fecha_fin = $request->fecha_fin;

		$categoria = $request->categorias;

		if(!isset($categoria))
		$categoria="%";
		else
		$categoria="%".$categoria."%";

		if(!isset($fecha_inicio))
		$fecha_inicio="2022-01-01 00:00:00";

		if(!isset($fecha_fin))
		$fecha_fin="3000-01-01 23:59:59";
		
		$response = new \stdClass();
		$response->success=true;

		//$producto = Producto::all(); Recupera todos los elementos de la tabla
		$categorias = Categoria::where(function($q) use ($search){
			$q->where("categorias.codigo","like",$search)
			->orWhere("categorias.nombre","like",$search);
		})

		->where("categorias.created_at",">=",$fecha_inicio. " 00:00:00")
		->where("categorias.created_at","<=",$fecha_fin. " 23:59:59")
		
		//->where("categoria.nombre","like",$categoria)
		->get();


		$response->data=$categorias;

		return response()->json($response,201);
	}*/
    function getAll()
	{
		$response = new \stdClass();
		$response->success=true;

		$categorias = Categoria::all();

		$response->data=$categorias;

		return response()->json($response,201);
	}


	function getItem($id)
	{
		$response = new \stdClass();
		$response->success=true;

		$categoria = Categoria::find($id);
		$response->data = $categoria;

		return response()->json($response,200);
	}

	function store(Request $request)
	{
		$response = new \stdClass();
		$response->success=true;

		$categoria=Categoria::where("categorias.codigo","=",$request->codigo)
		->orWhere("categorias.nombre","=",$request->nombre)
		->first();
		if($categoria){
			$response->success=false;
			$response->errors=[];
			$response->errors[]="Ya existe un producto con el código - ".$request->codigo." - o con el nombre - ".$request->nombre." -";
			return response()->json($response,400);
		}

		$categoria = new Categoria();
		$categoria->codigo = $request->codigo;
		$categoria->nombre = $request->nombre;
		$categoria->save();

		$response->data=$categoria;

		return response()->json($response,201);
	}

	function update(Request $request)
	{
		$response = new \stdClass;
		$response->success=true; 

		$categoria = Categoria::find($request->id);

		$categoria->codigo = $request->codigo;
		$categoria->nombre = $request->nombre;
		$categoria->save();

		$response->data = $categoria;

		return response()->json($categoria,200);

	}

	function patch(Request $request)
	{
		$response = new \stdClass;
		$response->success=true;

		$categoria = Categoria::Find($request->id);

		if(isset($request->codigo))
		$categoria->codigo = $request->codigo;
		
		if(isset($request->nombre))
		$categoria->nombre = $request->nombre;

		$categoria->save();

		$response->data = $categoria;

		return response()->json($categoria,200);
	}

	function delete($id)
	{
		$response = new \stdClass();
		$response->success=true;

		$response_code;
		
		$categoria = Categoria::find($id);

		if($categoria)
		{
			$categoria->delete();
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