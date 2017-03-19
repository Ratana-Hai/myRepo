<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class StudentController extends Controller {   
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function index() {
    	// $students = [
    	// 	[
	    // 		'id' => '1',
	    // 		'name' => 'sarim',
	    // 		'sex' => 'M'
    	// 	],
    	// 	[
	    // 		'id' => '2',
	    // 		'name' => 'sna',
	    // 		'sex' => 'M'
    	// 	]
    	// ];
        $users = DB::select('select * from student where active = ?', [001]);

        return view('student.index')
        ->with('students', $students);
    }
    public function create(){
    	return view('student.create');
    }
}