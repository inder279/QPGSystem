<?php

namespace App\Http\Controllers;
use App\Question;
use Illuminate\Http\Request;

class AddQuestionController extends Controller
{
    public function saveQuestion(Request $request){
    	$question = new Question();
    	$text = $request['question'];
    	$question->subject_id = 22;
    	$question->question = $text;
    	$question->save();
    	
    	

    }
}
