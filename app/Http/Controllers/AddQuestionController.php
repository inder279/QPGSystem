<?php

namespace App\Http\Controllers;
use App\Question;
use Illuminate\Http\Request;

class AddQuestionController extends Controller
{
    public function saveQuestion(Request $request){
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
    	$question->subject_id = 1;
    	$question->question = $text;
    	$question->save();
    	
    	

    }


}
