<?php 

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\v1\Producto;


class ProductosController extends Controller 
{

	function getAll()
	{
		return Producto::all();
	}
}