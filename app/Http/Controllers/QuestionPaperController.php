<?php

namespace App\Http\Controllers;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionPaperController extends Controller
{
    
    public function getPaperForm(){
    	$subjects = Subject::all(['subject_name']);
    	return view('generatePaperForm', compact('subjects',$subjects));
    }


    public function generatePaper(Request $request){
    	//echo $request->subject_name;
    	$subject_id = DB::select('select subject_id from subjects where subject_name = :subject_name', ['subject_name' => $request->subject_name]);
    	$id = (int) $subject_id[0]->subject_id;
    	$questions = DB::select('select * from questions where subject_id = :subject_id', ['subject_id' => $id]);
    	echo "</br>";
    	echo "</br>";
    	$num=1;
    	foreach ($questions as $question) {
    		echo $num;
    		echo $question->question;
    		$num=$num+1;
    		echo "</br>";
    		echo "</br>";
		}
    }
}
