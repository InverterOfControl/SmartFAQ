@extends('layouts.app')

@section('content')
<section id="question" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">{{ $question->text }}</h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <h6>Answers</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
            @foreach ($question->answers as $answer)
                <li class="list-group-item">
                {{ $answer->text }}
                </li>              
            @endforeach
            </ul>
            </div>
        </div>
    </div>
</section>

<section id="new-answer-section" class="section-padding">
    <div class="container">
        <form action="/answer" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Add an answer</h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
            </div>
            <div class="form-group">
                <label for="answer-text" class="col-sm-3 control-label">your answer</label>

                <div class="col-md-12">
                    <textarea name="text" id="answer-text" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-plus"></i> Answer Question
                    </button>
                </div>
            </div>
            <input type="hidden" name="questionId" value="{{ $question->id }}" />
        </form>
    </div>
</section>
@endsection