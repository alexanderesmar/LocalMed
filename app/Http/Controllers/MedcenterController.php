<?php 

namespace App\Http\Controllers;

use App\Modelos\Medcenter;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Contracts\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

/**
* 
*/
class MedcenterController extends Controller
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
		$consulta=\DB::table('medcenter')->orderBy('nombre', 'ASC')->get();

		return view('medcenter.listar',['consulta' => $consulta]);
	}

	public function registrar_form()
	{
		$consulta=\DB::table('estados')->orderBy('estado', 'ASC')->get();

		return view('medcenter.registrar',['sql_estados'=>$consulta]);
	}

	public function store(Request $datos)
	{

		$medcenter = new Medcenter;

		$validador = \Validator::make($datos->all(), [
        'nombre' => 'required|min:6|max:40',
        #'rif' => 'required|min:11|unique:medcenter,rif',
        'tel1' => 'required',
        'correo' => 'required|email',
        'id_estado' => 'required',
        'id_municipio' => 'required',
        'id_parroquia' => 'required',
        'id_sector' => 'required',
        'id_urbanismo_barrio' => 'required',
        'adicional_ubicacion' => 'required|max:255',
        'lat' => 'required',
        'lng' => 'required',
    		]);

    	if ($validador->fails())
    	{
        return redirect()->back()->withInput()->withErrors($validador->errors());
    	}

    	$medcenter->create($datos->all());

    	$medcenter = Medicamento::all();

    	//verificar que la consulta no de error

    	//mensaje satisfactorio
    	Session::flash('message','Nuevo Centro Médico '.$datos->nombre.' agregado correctamente');

		$consulta=\DB::table('medcenter')->orderBy('id', 'DESC')->get();
		return view('medcenter.listar',['consulta' => $consulta]);

	}

	public function editar($id)
	{
		$medcenter=Medcenter::findOrFail($id);
		return view('medcenter.editar', ['medcenter',$medcenter] );
	}

	public function update(Request $datos, $id)
	{
		$validador = \Validator::make($datos->all(), [
        'nombre' => 'required',
    		]);

    	if ($validador->fails())
    	{
        return redirect()->back()->withInput()->withErrors($validador->errors());
    	}

    	Medcenter::where('id', $datos->id)->update($datos->except(['_token','_method']));

    	$medcenter = Medcenter::all();

    	Session::flash('message','Centro Médico: '.$datos->nombre.' actualizado correctamente');

		$consulta=\DB::table('medcenter')->orderBy('nombre', 'ASC')->get();
		return view('medcenter.listar',['consulta' => $consulta]);
	}

	public function borrar($id)
	{
		$datos=Medcenter::findOrFail($id);

		$datos->delete();

		Session::flash('message','Centro Médico: '.$datos->nombre.' eliminado correctamente');

		$consulta=\DB::table('medcenter')->orderBy('nombre', 'ASC')->get();
		return view('medcenter.listar',['consulta' => $consulta]);

	}
}


 ?>