<?php

namespace App\Http\Controllers;
use App\Question;
use Illuminate\Http\Request;
use App\Subject;
use Illuminate\Support\Facades\DB;

class AddQuestionController extends Controller
{
    public function saveQuestion(Request $request){
        $subject_id = DB::select('select subject_id from subjects where subject_name = :subject_name', ['subject_name' => $request->subject_name]);
        $id = (int) $subject_id[0]->subject_id;
    	$question = new Question();
    	$text = $request['question'];
    	$answer1 = $request['answer1'];
    	$answer2 = $request['answer2'];
    	$answer3 = $request['answer3'];
    	$answer4 = $request['answer4'];
    	$question->is_mcq = 1;
    	if(empty($answer1)){
    		$question->is_mcq = 0;
    		$answer1="no";
    		$answer2="no";
    		$answer3="no";
    		$answer4="no";
    	}
    	$question->answer1 = $answer1;
    	$question->answer2 = $answer2;
    	$question->answer3 = $answer3;
    	$question->answer4 = $answer4;
    	$question->subject_id = $id;
    	$question->question = $text;
    	$question->save();
    	
    	
        $subjects = Subject::all(['subject_name']);
        return view('addQuestion', compact('subjects',$subjects));
    }

    public function addQuestionForm(){
        $subjects = Subject::all(['subject_name']);
        return view('addQuestion', compact('subjects',$subjects));
    }


}
