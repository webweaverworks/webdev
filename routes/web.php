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

//use App\Task;

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/about', function () {
    return view('about');
});
 */

/*
Route::get('/about', function () {	

	$name = 'Jeffrey';	
	$age = 32;

	return view('about', compact('name'));
	

});
 */


/*
Route::get('/about', function () {
	return view('about')->with('name', 'world');

});
 */

/*
Route::get('/about', function () {	

	$tasks = [
		'Go to the store',
		'Finish my screencast',
		'Clean the house'	


	];
	return view('about', compact('tasks'));
	

});
*/
/*
Route::get('/about', function () {	
$tasks = DB::table('tasks')->get();
//return view('about', compact('tasks'));
});
 */
/*
Route::get('tasks/{task}', function($id) {

	$task = DB::table('tasks')->find($id);
	//dd($task);
	return view('about', compact('task'));


});
 */
/*
Route::get('tasks/{task}', function($id) {

//	$task = DB::table('tasks')->find($id);
	//dd($task);
	$tasks = Task::find($id);
	return view('about', compact('tasks'));


});
 */
/*
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
 */


Route::get('/posts', 'PostsController@index');
//Route::get('/blog', 'PostsController@blog');
//Route::get('/posts/', 'PostsController@show');

Route::get('/posts/create', 'PostsController@create');
	// PUT PATCH DELETE POST GET
Route::get('/posts/{post}', 'PostsController@show');
// controller => PostsController
// Eloquent model =>  Post
// migration -> create_posts_table
//
//  /posts/create   
//   when submitting 
//
//  POST /post
//  Get /posts/{id}/edit
//  PATCH /posts/{id}
//  DELETE /posts/{id}
//
// 
