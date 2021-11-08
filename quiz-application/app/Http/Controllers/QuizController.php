<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QuizController extends Controller
{
    //quiz question submition
    function submit(Request $req){
        $req->validate([
            'correct'=>'required'
          

        ]);




        $create = DB::table('quiz')->insertGetId([
            'Question' => $req->quiz_question,
            'Option_one' => $req->quiz_option_one,
            'Option_two' =>$req->quiz_option_two,
            'Option_three' =>$req->quiz_option_three,
            'Option_four'=>$req->quiz_option_four,
            'correct_answer'=>$req->correct
            
        ]);
        if($create)
        {
            return back()->with('success','Question Created');

        }
        else {
            return back()->with('error','Error while creating question');

        }

    }

    //get quiz question from database
    function getquiz(){

        $quiz = DB::table('quiz')->select()->get();

        return view("user.quiz")->with(compact('quiz'));

        //dd($quiz);
    }

    function quizsubmit(Request $req){
        
        $quiz = DB::table('quiz')->select()->get();
        $point =0;

        foreach($quiz As $qz)
        {
            $a="correct$qz->id";
            if($qz->correct_answer == $req->$a)
            {
                $point++;
            }
        }

        return view("user.view-result")->with(compact('point'));
 

    }


}
