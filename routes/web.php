<?php

use Illuminate\Support\Facades\Route;

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
	$tasks = [
		[ 'name' => 'Task 1' ],
		[ 'name' => 'Task 2' ],
		[ 'name' => 'Task 3' ],
	];
	return view( 'home', [
		'body'         => 'Hello Quang Tuyên',
		'name'         => '<span style="color:red">Vô Song</span>',
		'alertMessage' => 'Thông báo',
		'tasks'        => $tasks,
	] );
})->name( 'home' );

Route::get( 'about', function () {
	return view( 'about.aboutUs', [ 'about' => 'Giới Thiệu' ] );
})->name( 'about' );

Route::get( 'user/{id}', function( $id ) {
	return "ID user: $id";
});

Route::get( 'user/{id?}', function( $id = null ) {
	if ( ! $id ) {
		return 'Mời nhập ID:';
	}
	return $id;
} );
Route::get( 'user/{id}/comment/{commentId}', function ( $id, $commentId ) {
	return "User ID: $id and comment ID: $commentId";
} )->where( 'id', '[0-9]+' )->where( 'commentId', '[a-zA-Z0-9]+' );
