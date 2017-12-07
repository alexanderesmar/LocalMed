<?php 

namespace App\Http\Controllers;

use App\Modelos\Beneficiario;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Contracts\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

/**
* 
*/
class BeneficiarioController extends Controller
{
	
	function __construct()
	{
		# code...
	}

	public function index()
	{

		return 'works';
	}

	public function listar() 
	{
		$consulta=\DB::table('beneficiario')
		->orderBy('nombres', 'ASC')
		->get();

		return view('beneficiario.listar',['consulta' => $consulta]);
	}

	public function registrar_form()
	{	
		$consulta=\DB::table('estados')->orderBy('estado', 'ASC')->get();
		return view('beneficiario.registrar',['sql_estados'=>$consulta]);
	}

	public function store(Request $datos)
	{

		$beneficiario = new Beneficiario;

		$validador = \Validator::make($datos->all(), [
        'nombres' => 'required',
        'apellidos' => 'required',
        'ci' => 'required|unique:beneficiario,ci',
        'tel1' => 'required|max:12',
        'tel2' => 'max:12',
        'correo' => 'email|unique:beneficiario|min:8|max:12',
        'lat' => 'required',
        'lng' => 'required',
    		]);

    	if ($validador->fails())
    	{
        return redirect()->back()->withInput()->withErrors($validador->errors());
    	}

    	$beneficiario->create($datos->all());

    	$beneficiario = Beneficiario::all();

    	//verificar que la consulta no de error

    	//mensaje satisfactorio
    	Session::flash('message','Nuevo Beneficiarrio '.$datos->nombres.' '.$datos->apellidos.' agregado correctamente');

    	/*crear los mensajes de error al guardar o guardador correctamente*/

		$consulta=\DB::table('beneficiario')->orderBy('id', 'DESC')->get();
		return view('beneficiario.listar',['consulta' => $consulta]);
	}

	public function editar($id)
	{
		$beneficiario=Beneficiario::findOrFail($id);
		return view('beneficiario.editar', ['beneficiario'=>$beneficiario] );
	}

	public function update(Request $datos, $id)
	{
		$validador = \Validator::make($datos->all(), [
        'nombres' => 'required',
    		]);

    	if ($validador->fails())
    	{
        return redirect()->back()->withInput()->withErrors($validador->errors());
    	}

    	Beneficiario::where('id', $datos->id)->update($datos->except(['_token','_method']));

    	$beneficiario = Beneficiario::all();

		$consulta=\DB::table('beneficiario')->orderBy('nombres', 'ASC')->get();
		return view('beneficiario.listar',['consulta' => $consulta]);
	}

	public function borrar($id)
	{
		$datos=Beneficiario::findOrFail($id);

		$datos->delete();

		Session::flash('message','Beneficiario: '.$datos->nombres.' '.$datos->apellidos.' eliminado correctamente');

		$consulta=\DB::table('beneficiario')->orderBy('nombres', 'ASC')->get();
		return view('beneficiario.listar',['consulta' => $consulta]);

	}
}


 ?>