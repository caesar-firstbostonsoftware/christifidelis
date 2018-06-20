<?php
use Carbon\Carbon;

class DashboardController extends \BaseController {

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array('only'=>array('index')));
	}
	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function index()
	{
		$error = Session::get('error');
		$success=Session::get('success');
		$tclass = ClassModel::count();
		$tsubject = Subject::count();
		$tstudent=Student::count();
		$totalAttendance = Teachers::count();
$totalClassOff = ClassOff::count();
$totalHoliday = Holidays::count();
 		//$totalAttendance = Attendance::groupBy('date')->get();
 		//$totalExam = Marks::groupBy('exam')->groupBy('subject')->get();
 		$totalExam = 0;
		$book = AddBook::count();
 		$total = [
 			'class' =>$tclass,
 			'student' =>$tstudent,
 			'subject' =>$tsubject,
 			//'attendance' =>count($totalAttendance),
 			//'exam' =>count($totalExam),
 			'attendance' =>$totalAttendance,
'classoff' =>$totalClassOff,
'holiday' =>$totalHoliday,
 			'exam' =>$totalExam,
			'book' => $book
 		];
 	// 	//graph data
 		$monthlyIncome= Accounting::selectRaw('month(date) as month, sum(amount) as amount, year(date) as year')
 		->where('type','Income')
 		->groupBy('month')
 		->get();

 		$monthlyExpences= Accounting::selectRaw('month(date) as month, sum(amount) as amount, year(date) as year')
 		->where('type','Expence')
 		->groupBy('month')
 		->get();
 		$incomeTotal = Accounting::where('type','Income')
 		->sum('amount');
 		$expenceTotal = Accounting::where('type','Expence')
 		->sum('amount');
 		$incomes=$this->datahelper($monthlyIncome);
 		$expences=$this->datahelper($monthlyExpences);
 		$balance = $incomeTotal - $expenceTotal;

 		$date = Carbon::now();
 		$grades = Marks::select('*')->where('regiNo','=',Auth::user()->login)->get();
 		$subjects = Subject::all(); 

 		$gradeshistories = Marks::select('session')->Distinct('session')->get();


//$datases = Session::all();
//dd(Auth::user()->login);
 		
 		//dd($gradeshistories);

		return View::Make('dashboard',compact('error','success','total','incomes','expences','balance', 'grades', 'subjects', 'date', 'gradeshistories'));
	}
	private function datahelper($data)
 	{
 		$DataKey = [];
 		$DataVlaue =[];
 		foreach ($data as $d) {
 			array_push($DataKey,date("F", mktime(0, 0, 0, $d->month, 10)).','.$d->year);
 			array_push($DataVlaue,$d->amount);

 		}
 		return ["key"=>$DataKey,"value"=>$DataVlaue];

 	}
}
