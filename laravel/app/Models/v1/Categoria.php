<<<<<<< HEAD:laravel/app/Models/v1/Categoria.php
<?php 

namespace App\Models\v1;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;


class Categoria extends Model
{

	use HasUUID;

	protected $table = 'categorias';
	protected $primaryKey = "id";
	public $incrementing = false;
	protected $keyType = 'string';
	protected $uuidFieldName = 'id';
}
=======
>>>>>>> 5f2adb21c4845e8a6f3ad3b7a0183b20b29dcb80:bodegacyg/laravel/app/Models/v1/Categoria.php
