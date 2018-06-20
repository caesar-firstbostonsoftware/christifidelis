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
 $newnews = News::latest()->first();
 		//dd($new->created_at);
$startdiff = $newnews->created_at->diffInDays();
Session::put('startdiff', $startdiff);


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
		//dd($stud['regiNo']);
		$grades = Marks::select('*')->where('regiNo','=',$stud['regiNo'])->get();
 		$date = Carbon::now();
 		$subjects = Subject::all(); 

 		$gradeshistories = Marks::select('session')->Distinct('session')->get();


 		$attendance = Attendance::where('regiNo','=',$stud['regiNo'])->get();
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

		public function createnews()
	{
		$error = Session::get('error');

		return View::make('app/createnews',compact('error'));

	}

		public function savenews()
	{
		$rules=[
			'newsTitle' => 'required',
			'news' => 'required',
		];
		$validator = \Validator::make(Input::all(), $rules);
		if ($validator->fails())
		{
			return Redirect::to('create-news')->withinput(Input::all())->withErrors($validator);
		}
		else {
			$news=new News;

			$news->newsTitle = Input::get('newsTitle');
			$news->news = Input::get('news');

			$news->save();

			return Redirect::to('create-news')->with('success', 'News/Updates saved.');

		}

	}


		public function news()
	{
 		$date = Carbon::now();
 		$news = News::orderBy('updated_at', 'DESC')->get();
 $newnews = News::latest()->first();
 		//dd($new->created_at);
//$startdiff = $newnews->created_at->diffInDays(); 
//dd($diff);
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

	public function teacherview($id)
{

		$id = User::where('id',$id)->pluck('login');
        //dd($id);
        $teacher = Teachers::where('regNo',$id)->where('isActive',1)->first();
        $cl = Leaves::where('regNo',$id)->where('lType','CL')->whereYear('leaveDate','=',date('Y'))->where('status',2)->count();
        $ml = Leaves::where('regNo',$id)->where('lType','ML')->whereYear('leaveDate','=',date('Y'))->where('status',2)->count();
        $ul = Leaves::where('regNo',$id)->where('lType','UL')->whereYear('leaveDate','=',date('Y'))->where('status',2)->count();

        return View::Make("app.teacher.details",compact('teacher','cl','ml','ul'));

}

}
