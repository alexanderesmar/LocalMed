<?php 

namespace App\Http\Controllers;

use App\Modelos\Medicamento;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Contracts\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

/**
* 
*/
class MedicamentoController extends Controller
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
		$consulta=\DB::table('medicamentos')
		->orderBy('medicamento', 'ASC')
		->get();

		return view('medicamento.listar',['consulta' => $consulta]);
	}

	public function registrar_form()
	{
		return view('medicamento.registrar');
	}

	public function store(Request $datos)
	{

		$medicamento = new Medicamento;

		$validador = \Validator::make($datos->all(), [
        'medicamento' => 'required',
        'principio_activo' => 'required',
        'id_presentacion' => 'required',
        'cantidad_mg' => 'required|max:255',
        'cant_dosis' => 'required|max:255',
        'marca_laboratorio' => 'required',
    		]);

    	if ($validador->fails())
    	{
        return redirect()->back()->withInput()->withErrors($validador->errors());
    	}

    	$medicamento->create($datos->all());

    	$medicamento = Medicamento::all();

    	//verificar que la consulta no de error

    	//mensaje satisfactorio
    	Session::flash('message','Nuevo medicamento '.$datos->medicamento.' agregado correctamente');

		$consulta=\DB::table('medicamentos')->orderBy('id', 'DESC')->get();
		return view('medicamento.listar',['consulta' => $consulta]);

	}

	public function editar($id)
	{
		$medicamento=Medicamento::findOrFail($id);
		return view('medicamento.editar', ['medicamento'=>$medicamento] );
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

    	Medicamento::where('id', $datos->id)->update($datos->except(['_token','_method']));

    	$medicamento = Medicamento::all();

    	Session::flash('message','Medicamento: '.$datos->medicamento.' actualizado correctamente');

		$consulta=\DB::table('medicamentos')->orderBy('medicamento', 'ASC')->get();
		return view('medicamento.listar',['consulta' => $consulta]);
	}

	public function borrar($id)
	{
		$datos=Medicamento::findOrFail($id);

		$datos->delete();

		Session::flash('message','Medicamento: '.$datos->medicamento.' eliminado correctamente');

		$consulta=\DB::table('medicamentos')->orderBy('medicamento', 'ASC')->get();
		return view('medicamento.listar',['consulta' => $consulta]);

	}
}


 ?>