@extends('layouts.app')

@section('content')

<section id="questions" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Questions</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <a href="/new" class="btn btn-danger">Ask a question</a>
            <small>we are happy to answer your questions!</small>
          </div>
        </div>
        <div class="row">
        @foreach ($questions as $question)
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lni-question-circle"></i>
              </div>
              <div class="services-content">
                 <p><a class="question-link" href="{{ url('question/'.$question->id) }}">{{ $question->text }}</a></p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

      

@endsection