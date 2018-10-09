<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
Route::get('date/{x}','xulyController@getx');
Route::get('addcolum',function(){
	Schema::table('role',function($table){
		$table->Boolean('mission');
	});
	echo "thêm dl Sthành công";
});
Route::get('dropcolum',function(){
	DB::table('role',function($table){
		$table->dropColumn('mission');
	});
	echo "xoá thành công";
});
Route::get('addsinhvien',function(){
	Schema::table('sinhvien',function($table){
		$table->date('ngaysinh');
	});
});