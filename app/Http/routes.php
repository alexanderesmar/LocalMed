<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/doctor', 'DoctorController@index');

/*listar*/
Route::get('/listar/beneficiarios', 'BeneficiarioController@listar');
Route::get('/listar/doctores', 'DoctorController@listar');
Route::get('/listar/medcenter', 'MedcenterController@listar');
Route::get('/listar/medicamentos', 'MedicamentoController@listar');
Route::get('/listar/patologias', 'PatologiaController@listar');


/*registrar enviar al formulario*/
Route::get('/registrar/beneficiarios', 'BeneficiarioController@registrar_form');
Route::get('/registrar/doctores', 'DoctorController@registrar_form');
Route::get('/registrar/medcenter', 'MedcenterController@registrar_form');
Route::get('/registrar/medicamentos', 'MedicamentoController@registrar_form');
Route::get('/registrar/patologias', 'PatologiaController@registrar_form');


/*registrar cargar a db*/
Route::post('/registrar/beneficiarios', 'BeneficiarioController@store');
Route::post('/registrar/doctores', 'DoctorController@store');
Route::post('/registrar/medcenter', 'MedcenterController@store');
Route::post('/registrar/medicamentos', 'MedicamentoController@store');
Route::post('/registrar/patologias', 'PatologiaController@store');

/*editar cargar a db*/
/*Route::get('/editar/beneficiario', 'BeneficiarioController@editar');
Route::get('/editar/doctor/{doctor}', 'DoctorController@editar');
Route::get('/editar/medcenter', 'MedcenterController@editar');
Route::get('/editar/medicamento', 'MedicamentoController@editar');
Route::get('/editar/patologia', 'PatologiaController@editar');*/

/*editar cargar a db*/
Route::post('/editar/beneficiario/{id}', 'BeneficiarioController@editar');
Route::post('/editar/doctor/{id}', 'DoctorController@editar');
Route::post('/editar/medcenter/{id}', 'MedcenterController@editar');
Route::post('/editar/medicamento/{id}', 'MedicamentoController@editar');
Route::post('/editar/patologia/{id}', 'PatologiaController@editar');


Route::put('/actualizar/beneficiario/{id}', 'BeneficiarioController@update');
Route::put('/actualizar/doctor/{id}', 'DoctorController@update');
Route::put('/actualizar/medcenter/{id}', 'MedcenterController@update');
Route::put('/actualizar/medicamento/{id}', 'MedicamentoController@update');
Route::put('/actualizar/patologia/{id}', 'PatologiaController@update');


/*borrar*/
Route::post('/borrar/beneficiario/{id}', 'BeneficiarioController@borrar');
Route::post('/borrar/doctor/{id}', 'DoctorController@borrar');
Route::post('/borrar/medcenter/{id}', 'MedcenterController@borrar');
Route::post('/borrar/medicamento/{id}', 'MedicamentoController@borrar');
Route::post('/borrar/patologia/{id}', 'PatologiaController@borrar');

/*test*/

Route::get('/municipios/{id}', 'AddressController@get_municipios_show');

Route::post('/municipios/{id}', 'AddressController@get_municipios');

Route::get('/doctor/listar/orm', 'DoctorController@getOrm');


Route::get('doctor', function(){
	return view('doctor.home');
});

Route::get('doctorado', function(){
	return view('doctor.registrar');
});