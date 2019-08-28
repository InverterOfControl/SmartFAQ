<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Store a new answer.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'text' => 'required|min:5',
        ]);
        
        $question = Question::find($request->questionId);

        $question->answers()->create([
            'text' => $request->text
        ]);

        return redirect('/question/'.$question->id);
    }
}
