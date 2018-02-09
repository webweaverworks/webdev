<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    //
	public function index() {

$posts = Post::all();
//$posts = Post::latest()->get();
$posts = Post::orderBy('created_at', 'asc')->get();
return 	view('posts.index', compact('posts'));	

	}
	
public function create() {
return 	view('posts.create');	

	}
public function show(Post $post) {
//$post = Post::find($post);
return 	view('posts.show', compact('post'));	

	}

/*public function blog() {
return 	view('posts.blog');	

	}
 */
public function store() {
	/*
	$post = new Post;
	$post->title = request('title');
	$post->body = request('body');

	$post->save();
	 */

	$this->validate(request(), [
		'title' => 'required',
		'body' => 'required'
	]);

	Post::create([
		'title' => request('title'),
		'body' => request('body')
	]);


	return redirect('/');


//dd(request()->all());
//dd(request(['body','title']));
//return 	view('posts.blog');	
	// Create a new post
	// Save it to the database
	// And then redirect to the homepage
	//
	}
}

