<?php 

namespace App\Http\Controllers;

use App\Modelos\Patologia;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Contracts\Validation\ValidationException;
use Illuminate\Support\Facades\Session;

/**
* 
*/
class PatologiaController extends Controller
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
		$consulta=\DB::table('patologias') /*especifica tabla*/
		#->select(['patologia.nombres', 'patologia.tel']) /*selector especifico de campos opcional añexar el nobre de la tabla para buscar de mas de una db*/
		/*->select('nombres', 'tel')*/ /*cuando es una consulta sencilla no hace falta pasar los campos en un array*/
		#->where('nombres','Dr. mundo') /*aunque llamo al campo de forma diferente funciona porque es una sola tabla*/
		/*->where('nombres','<>','Dr. mundo')*/ /*sintaxsis del where, por defecto '=':  campo condicional valor */
		->orderBy('patologia', 'ASC')
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

		return view('patologia.listar',['consulta' => $consulta]);
	}

	public function registrar_form()
	{
		return view('patologia.registrar');
	}

	public function store(Request $datos)
	{
		//dd( $datos->all() );

		$patologia = new Patologia;

		$validador = \Validator::make($datos->all(), [
        'patologia' => 'required',
    		]);

    	if ($validador->fails())
    	{
        return redirect()->back()->withInput()->withErrors($validador->errors());
    	}

    	$patologia->create($datos->all());

    	$patologia = Patologia::all();

    	//verificar que la consulta no de error

    	//mensaje satisfactorio
    	Session::flash('message','Nueva Patologia '.$datos->patologia.' agregada correctamente');

		$consulta=\DB::table('patologia')->orderBy('id', 'DECS')->get();
		return view('patologia.listar',['consulta' => $consulta]);
	}

	public function editar($id)
	{
		$patologia=Patologia::findOrFail($id);
		return view('patologia.editar', ['patologia'=>$patologia] );
	}

	public function update(Request $datos, $id)
	{
		$validador = \Validator::make($datos->all(), [
        'patologia' => 'required',
    		]);

    	if ($validador->fails())
    	{
        return redirect()->back()->withInput()->withErrors($validador->errors());
    	}

    	Patologia::where('id', $datos->id)->update($datos->except(['_token','_method']));

    	$patologia = Patologia::all();

    	Session::flash('message','Patologia: '.$datos->patologia.' actualizada correctamente');

		$consulta=\DB::table('patologia')->orderBy('patologia', 'ASC')->get();
		return view('patologia.listar',['consulta' => $consulta]);
	}

	public function borrar($id)
	{
		$datos=Patologia::findOrFail($id);

		$datos->delete();

		Session::flash('message','Patologia: '.$datos->patologia.' eliminada correctamente');

		$consulta=\DB::table('patologia')->orderBy('patologia', 'ASC')->get();
		return view('patologia.listar',['consulta' => $consulta]);

	}
}


 ?>