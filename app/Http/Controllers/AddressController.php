<?php 

namespace App\Http\Controllers;

use App\Modelos\Estado;
use App\Modelos\Municipio;
use App\Modelos\Parroquia;
use App\Modelos\Sector;
use App\Modelos\Urbanismos;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Contracts\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

/**
* 
*/
class AddressController extends Controller
{
	
	function __construct()
	{
		# code...
	}

	public function index()
	{

		return 'works';
	}


	public function get_municipios($id)
	{

		$consulta=\DB::table('municipios')->where('id_estado',$id)->orderBy('municipio', 'ASC')->get();
		//dd($consulta);

		/*return ['municipios'=> $consulta];*/
		return $consulta;
	}

	public function get_municipios_show($id)
	{

		$consulta=\DB::table('municipios')->where('id_estado',$id)->orderBy('id', 'ASC')->get();
		//dd($consulta);

		/*return ['municipios'=> $consulta];*/
		return $consulta;
	}


}


 ?>