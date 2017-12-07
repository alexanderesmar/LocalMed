<?php 

namespace App\Http\Controllers;

use App\Modelos\Doctor;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Contracts\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

/**
* 
*/
class DoctorController extends Controller
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
		$consulta=\DB::table('doctor') /*especifica tabla*/
		#->select(['doctor.nombres', 'doctor.tel']) /*selector especifico de campos opcional añexar el nobre de la tabla para buscar de mas de una db*/
		/*->select('nombres', 'tel')*/ /*cuando es una consulta sencilla no hace falta pasar los campos en un array*/
		#->where('nombres','Dr. mundo') /*aunque llamo al campo de forma diferente funciona porque es una sola tabla*/
		/*->where('nombres','<>','Dr. mundo')*/ /*sintaxsis del where, por defecto '=':  campo condicional valor */
		->orderBy('nombres', 'ASC')
		/*->joint('user_profiles','users.id','=','user_profiles.user_id')*/
		->get(); /*metodo/funcion de db para traerse los datos por get, este es el ultimo metodo a colocar*/

		/*se pueden anexar campos a la consulta de la siguiente forma*/
		
		/*para inclusiones simples*/
			/*$consulta->campo_aux= $consulta[0]->nombres.' con el numero: '.$consulta[0]->tel.' '.$var;*/ /*cualquier variable o concatenacion de estas*/

		/*para incluciones en todos los registros*/

		/*foreach ($consulta as $row) {
			$row->campo_aux= $row->nombres.' con el numero: '.$row->tel.' '.$var;
		}*/

		#dd($consulta);
		#return $consulta;

		return view('doctor.listar',['consulta' => $consulta]);
	}

	public function registrar_form()
	{
		return view('doctor.registrar');
	}

	public function store(Request $datos)
	{
		//dd( $datos->all() );

		$doctor = new Doctor;

		$validador = \Validator::make($datos->all(), [
        'nombres' => 'required',
        'apellidos' => 'required'
    		]);

    	if ($validador->fails())
    	{
        return redirect()->back()->withInput()->withErrors($validador->errors());
    	}

    	$doctor->create($datos->all());

    	$doctor = Doctor::all();

    	//verificar que la consulta no de error

    	//mensaje satisfactorio
    	Session::flash('message','Nuevo Doctor '.$datos->nombres.' '.$datos->apellidos.' agregado correctamente');

		#$consulta=\DB::table('doctor')->insert();
		$consulta=\DB::table('doctor')->orderBy('id', 'DECS')->get();
		return view('doctor.listar',['consulta' => $consulta]);
	}

	public function editar($id)
	{
		$doctor=Doctor::findOrFail($id);
		return view('doctor.editar', ['doctor'=>$doctor] );
	}

	public function update(Request $datos, $id)
	{
		$validador = \Validator::make($datos->all(), [
        'nombres' => 'required',
        'apellidos' => 'required',
    		]);

    	if ($validador->fails())
    	{
        return redirect()->back()->withInput()->withErrors($validador->errors());
    	}

    	Doctor::where('id', $datos->id)->update($datos->except(['_token','_method']));

    	$doctor = Doctor::all();

    	Session::flash('message','Doctor: '.$datos->nombres.' '.$datos->apellidos.' actualizado correctamente');

		$consulta=\DB::table('doctor')->orderBy('nombres', 'ASC')->get();
		return view('doctor.listar',['consulta' => $consulta]);
	}

	public function borrar($id)
	{
		$datos=Doctor::findOrFail($id);

		$datos->delete();

		Session::flash('message','Doctor: '.$datos->nombres.' '.$datos->apellidos.' eliminado correctamente');

		$consulta=\DB::table('doctor')->orderBy('nombres', 'ASC')->get();
		return view('doctor.listar',['consulta' => $consulta]);

	}
}


 ?>