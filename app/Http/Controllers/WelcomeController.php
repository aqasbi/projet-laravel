<?php namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;       //from user manual


class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$results = DB::table('todolist')->get();
		//return $results;
		return view('todo', compact('results'));
	}
	
	public function todoDetails($id)
	{
		$result = DB::table('todolist')->find($id);

		return view('details', compact('result'));
	}

	public function add()
	{

		return view('add');
	}

	public function addTodo(Request $request)
	{
		
		DB::table('todolist')->insert(
		    array('title' => $request->input('title'), 'details' => $request->input('details'), 'date' => $request->input('date'), 'time' => $request->input('time'))
		);

		$results = DB::table('todolist')->get();
		//return $results;
		return view('todo', compact('results'));
	}

	public function delete()
	{
		$results = DB::table('todolist')->get();
		
		return view('delete', compact('results'));
	}

	public function deleteTodo(Request $request)
	{
		
		DB::table('todolist')->where('id', '=', $request->input('id'))->delete();

		$results = DB::table('todolist')->get();
		//return $results;
		return view('todo', compact('results'));
	}
	


}

