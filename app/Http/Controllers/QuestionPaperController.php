<?php

namespace App\Http\Controllers;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\fpdf\FPDF;


class QuestionPaperController extends Controller
{
    
    public function getPaperForm(){
    	$subjects = Subject::all(['subject_name']);
    	return view('generatePaperForm', compact('subjects',$subjects));
    }
    public function getUserPaperForm(){
        $subjects = Subject::all(['subject_name']);
        return view('userGeneratePaperForm', compact('subjects',$subjects));
    }


    public function generatePaper(Request $request){
    	//echo $request->subject_name;
    	
    	$subject_id = DB::select('select subject_id from subjects where subject_name = :subject_name', ['subject_name' => $request->subject_name]);
    	$id = (int) $subject_id[0]->subject_id;
    	$questions = DB::select('select * from questions where subject_id = :subject_id', ['subject_id' => $id]);

    	echo "</br>";
    	echo "</br>";
    	$num=1;
        if($request->num_questions>0 && $request->num_questions <= 100 && sizeof($questions)>= $request->num_questions){
            
    	foreach ($questions as $question) {
    		echo $num;
    		echo ". ";
    		echo $question->question;
            if($question->is_mcq == 1){
                //echo "<div class="col-md-6">";
                echo "</br>";
                echo "</br>";
                echo "      1.".$question->answer1."</br>";
                echo "      2.".$question->answer2."</br>";
                echo "      3.".$question->answer3."</br>";
                echo "      4.".$question->answer4."</br>";
                //echo "</div>";
            }
    		$num=$num+1;
    		echo "</br>";
    		echo "</br>";
    		if($num-1 >= $request->num_questions){
    			break;
    		}
        }
    	}else{
            if($request->num_questions >= 100 ){
                echo "You are not allowed to create more than 100 questions in a single paper";
            }else{
                echo "Not enough questions in the database!";
            }
            
        }		
    }   
}
