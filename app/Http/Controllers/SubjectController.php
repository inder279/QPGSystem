<?php

namespace App\Http\Controllers;
use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

	//displaying subject
	//no middleware needed
    public function getSubjects(){
    	//$subjects = Subject::paginate(10);
    	
    	$subjects = Subject::paginate(10);
    	//echo $subjects;
    	return view('displaySubjects', compact('subjects'));
   }

   public function saveSubject(Request $request){
    	$subject = new Subject();
    	$subject->subject_name = $request['subject_name'];
    	$subject->save();
    	echo $subject;
    	
    	return redirect()->route('admin');
    }
}
