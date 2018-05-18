<?php
use Carbon\Carbon;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$error = Session::get('error');
		$institute=Institute::select('name')->first();
		if(!$institute)
		{
			$institute=new Institute;
			$institute->name="FirstBostonSoftware";
		}
		return View::make('login',compact('error','institute'));

	}

		public function gallery()
	{
		$error = Session::get('error');
		$institute=Institute::select('name')->first();
		if(!$institute)
		{
			$institute=new Institute;
			$institute->name="FirstBostonSoftware";
		}
		return View::make('gallery',compact('error','institute'));

	}

		public function soffer()
	{
		$error = Session::get('error');
		$institute=Institute::select('name')->first();
		if(!$institute)
		{
			$institute=new Institute;
			$institute->name="FirstBostonSoftware";
		}
		return View::make('schooloffers',compact('error','institute'));

	}	

		public function pguardian()
	{
		$firstName = Input::get('firstName');
		$lastName = Input::get('lastName');
		$name = $firstName . " " . $lastName;
		//dd($firstName);
		$stud = Student::where('firstName','=',$firstName)->where('lastName','=',$lastName)->first();
		//dd($stud->regiNo);
		$grades = Marks::select('*')->where('regiNo','=',$stud->regiNo)->get();
 		$date = Carbon::now();
 		$subjects = Subject::all(); 

 		$gradeshistories = Marks::select('session')->Distinct('session')->get();


 		$attendance = Attendance::where('regiNo','=',$stud->regiNo)->get();
 		//dd($attendance->date->month);
		$error = Session::get('error');
		$institute=Institute::select('name')->first();
		if(!$institute)
		{
			$institute=new Institute;
			$institute->name="FirstBostonSoftware";
		}
		//dd($grades);
		return View::make('guardian',compact('error','institute', 'grades', 'subjects', 'date', 'gradeshistories','attendance', 'name'));

	}
				public function searchView()
	{
		$error = Session::get('error');
		$institute=Institute::select('name')->first();
		if(!$institute)
		{
			$institute=new Institute;
			$institute->name="FirstBostonSoftware";
		}
		return View::make('searchstud');

	}

		public function news()
	{
 		$date = Carbon::now();
 		$news = News::all(); 
 		//dd($news);
		$error = Session::get('error');
		$institute=Institute::select('name')->first();
		if(!$institute)
		{
			$institute=new Institute;
			$institute->name="FirstBostonSoftware";
		}
		return View::make('news',compact('error','institute', 'date', 'news'));

	}

			public function shownews($id)
	{
 		$date = Carbon::now();
 		$news = News::where('id','=',$id)->first(); 
 		//dd($news);
		$error = Session::get('error');
		$institute=Institute::select('name')->first();
		if(!$institute)
		{
			$institute=new Institute;
			$institute->name="FirstBostonSoftware";
		}
		return View::make('shownewsupdate',compact('error','institute', 'date', 'news'));

	}

}
