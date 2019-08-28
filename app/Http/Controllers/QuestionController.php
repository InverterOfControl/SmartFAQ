<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display all questions.
     *
     * @return Response
     */
    public function index(){
        $questions = Question::all();

        return view('questions.index', [
            'questions' => $questions
        ]);
    }

    public function show($questionId){
        $foundQuestion = Question::with('answers')->where('id', '=', $questionId)->get();
        
        return view('questions.single', [
            'question' => $foundQuestion[0]
        ]);
    }

    /**
     * Display a form for question entry.
     *
     * @return Response
     */
    public function new() {
        return view('questions.new');
    }

    /**
     * Store a new question.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {

        // check for text and make sure it contains a question mark
        $this->validate($request, [
            'text' => 'required|min:5|regex:(\?+$)',
        ]);

        $newQuestion = new Question;

        $newQuestion->text = $request->text;

        $newQuestion->save();

        return redirect('/');
    }
}
