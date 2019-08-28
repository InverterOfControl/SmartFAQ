@extends('layouts.app')

@section('content')
<section id="question-form" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Ask a Question!</h2>
            <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <form action="/question" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="question-text" class="col-sm-3 control-label">your question</label>

                    <div class="col-sm-12">
                        <input value="{{ old('text') }}" type="text" placeholder="{{ $question_placeholder->text }}" name="text" id="question-text" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-plus"></i> Ask Question
                        </button>
                    </div>
                </div>
        </form>
    </div>
</section>
@endsection